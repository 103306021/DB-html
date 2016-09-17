<?php
define('FPDF_FONTPATH',"FPDF/font/");

require("FPDF/chinese.php");

$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
	die('Could not connect: ' . mysql_error());
	echo 'Failed to connect.<br>';
}

mysql_select_db("daywin",$link);
mysql_query("set names utf8");
$data=mysql_query("select * from daywin");

$sql = "SELECT * FROM customer WHERE cust_ID=1";
$result = mysql_query($sql,$link);
$cust_row = mysql_fetch_row($result);

//�o�̦�bug

$last_order_ID = mysql_fetch_row(mysql_query("SELECT MAX(order_o_ID) FROM order_original"));
$last_order_row = mysql_fetch_row(mysql_query("SELECT * FROM order_original WHERE order_o_ID=$last_order_ID[0]"));

$last_pro_ID = mysql_fetch_row(mysql_query("SELECT MAX(pro_ID) FROM product"));
$last_pro_row = mysql_fetch_row(mysql_query("SELECT * FROM product WHERE pro_ID=$last_pro_ID[0]"));

$material_row = mysql_fetch_row(mysql_query("SELECT * FROM material WHERE mat_ID=$last_pro_row[2]"));
$cust_row = mysql_fetch_row(mysql_query("SELECT * FROM customer WHERE cust_ID=$last_order_row[1]"));
$fixed_waste = $material_row[3];

$order_ID = $last_order_row[0];
$name = $cust_row[1];
$contact_name = $cust_row[4];
$phone = $cust_row[5];
$material = $material_row[1]; 
$spf = $material_row[4];
$color = $last_pro_row[3];
$print = $last_pro_row[4];
$dscpt = $last_pro_row[5];
$size = $last_pro_row[6];
$quantity = $last_pro_row[7];
$waste = $quantity*$fixed_waste;
$date_R =$last_order_row[2];
$date_C =$last_order_row[3];




$pdf = new PDF_Chinese('P','mm','A4');
$pdf->AddBig5Font();
$pdf->AddPage();
$pdf->SetFont('Big5');
$pdf->SetTitle("Order Sheet");
$pdf->SetFont('Big5','B',24);
$pdf->Cell(190,10,'�� �j �� �� �� �� �� �� �� �q',0,0,'C',0);
$pdf->Ln();

$pdf->SetFont('Big5','B',10);
$pdf->Cell(190,8,'�x �_ �� �} �� �� �@ �q �T �Q �G �� �Q �� �G ��',0,0,'C',0);
$pdf->SetX(160);
$pdf->Cell(40,8,'TEL: ( 02) 2555-1800',0,0,'R',0);
$pdf->Ln();

$pdf->SetX(160);
$pdf->Cell(40,8,'FAX: ( 02) 2555-1395',0,0,'R',0);
$pdf->Ln();

$pdf->SetFont('Big5','B',24);
$pdf->Cell(190,10,'�q��A�s�y����',0,0,'C',0);
$pdf->Ln();

$pdf->SetFont('Big5','B',10);
$pdf->SetX(160);
$pdf->Cell(40,8,"���: $date_R",0,0,'R',0);
$pdf->Ln();

$pdf->SetFont('Big5','B',14);
$pdf->Cell(40,8,"NO. $order_ID",0,0,'L',0);
$pdf->Ln();

$pdf->SetFont('Big5','B',10);
$pdf->Cell(26,10,'�t��',1,0,'C',0);
$pdf->Cell(36,10,"$name",1,0,'C',0);
$pdf->Cell(24,10,'�p���H',1,0,'C',0);
$pdf->Cell(44,10,"$contact_name",1,0,'C',0);
$pdf->Cell(20,10,'�s���q��',1,0,'C',0);
$pdf->Cell(40,10,"$phone",1,0,'C',0);
$pdf->Ln();

$pdf->Cell(190,6,"���~�n�D",1,0,'C',0);
$pdf->Ln();

$pdf->Cell(26,10,'���',1,0,'C',0);
$pdf->Cell(60,10,'�W��',1,0,'C',0);
$pdf->Cell(22,10,'�C��( �⸹)',1,0,'C',0);
$pdf->Cell(22,10,'�L��( �s��)',1,0,'C',0);
$pdf->Cell(20,10,'����',1,0,'C',0);
$pdf->Cell(20,10,'�ƶq',1,0,'C',0);
$pdf->Cell(20,10,'�w�Ʒl��',1,0,'C',0);
$pdf->Ln();


for ($i=0;$i<1;$i++){
$pdf->Cell(26,16,"$material",1,0,'C',0);
$pdf->Cell(60,16,"$spf",1,0,'C',0);
$pdf->Cell(22,16,"$color",1,0,'C',0);
$pdf->Cell(22,16,"$print",1,0,'C',0);
$pdf->Cell(20,16,"$size",1,0,'C',0);
$pdf->Cell(20,16,"$quantity",1,0,'C',0);
$pdf->Cell(20,16,"$waste",1,0,'C',0);
$pdf->Ln();
$pdf->Cell(26,10,"�y�z",1,0,'C',0);
$pdf->Cell(164,10,"$dscrp",1,0,'C',0);
$pdf->Ln();
}


$pdf->Cell(26,10,'��f��',1,0,'C',0);
$pdf->Cell(36,10,"$date_C",1,0,'C',0);
$pdf->Cell(24,10,'��f�a�I',1,0,'C',0);
$pdf->Cell(104,10,'',1,0,'C',0);
$pdf->Ln();

$pdf->Cell(26,16,'�Ƶ�',1,0,'C',0);
$pdf->Cell(164,16,'',1,0,'C',0);
$pdf->Ln();

$pdf->SetFont('Big5','B',12);
$pdf->Cell(140,16,'�Ȥ�ñ�^:',0,0,'R',0);

$pdf->Output();
?>