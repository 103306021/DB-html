<?php
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("daywin",$link);
mysql_query("set names utf8");
$data=mysql_query("select * from daywin");

//訂單資料
$name=$_POST["name"];
$material=$_POST["material"];
$color=$_POST["color"];
$print =$_POST["print"];
$dscrp=$_POST["dscrp"];
$size=$_POST["size"];
$quantity=$_POST["quantity"];
$date_R = $_POST["date_R"];
$date_C = $_POST["date_C"];

//新客戶資料
$newName=$_POST["newName"];
$country=$_POST["country"];
$e_addr=$_POST["e_addr"];

//***紀錄要不要新增客戶，不要=0，要=1 (開始)
$newCust = $_POST["newCust"];
//***紀錄要不要新增客戶，不要=0，要=1 (結束)

//從資料庫裡找出客戶是否已存在
$sql = "SELECT * FROM customer WHERE cust_name ='$name'";
$result = mysql_query($sql,$link);
$cust_row = mysql_fetch_row($result);

?>
	
<!DOCTYPE html>
<html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $title ?></title>

<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
 
<!--  checkbox styling script -->
<script src="js/jquery/ui.core.js" type="text/javascript"></script>
<script src="js/jquery/ui.checkbox.js" type="text/javascript"></script>
<script src="js/jquery/jquery.bind.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$('input').checkBox();
	$('#toggle-all').click(function(){
 	$('#toggle-all').toggleClass('toggle-checked');
	$('#mainform input[type=checkbox]').checkBox('toggle');
	return false;
	});
});
</script>  


<![if !IE 7]>

<!--  styled select box script version 1 -->
<script src="js/jquery/jquery.selectbox-0.5.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect').selectbox({ inputClass: "selectbox_styled" });
});
</script>
 

<![endif]>


<!--  styled select box script version 2 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
});
</script>

<!--  styled select box script version 3 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
});
</script>

<!--  styled file upload script --> 
<script src="js/jquery/jquery.filestyle.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
$(function() {
	$("input.file_1").filestyle({ 
	image: "images/forms/upload_file.gif",
	imageheight : 29,
	imagewidth : 78,
	width : 300
	});
});
</script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>
 
<!-- Tooltips -->
<script src="js/jquery/jquery.tooltip.js" type="text/javascript"></script>
<script src="js/jquery/jquery.dimensions.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$('a.info-tooltip ').tooltip({
		track: true,
		delay: 0,
		fixPNG: true, 
		showURL: false,
		showBody: " - ",
		top: -35,
		left: 5
	});
});
</script> 

<!--  date picker script -->
<link rel="stylesheet" href="css/datePicker.css" type="text/css" />
<script src="js/jquery/date.js" type="text/javascript"></script>
<script src="js/jquery/jquery.datePicker.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
        $(function()
{

</script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>

<body>

<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<h1 style="color:white;padding-top:30px"><img src="images/forms/N025.png" width="50" height="40" style="margin-right:15px">日強纖維股份有限公司</h1>

	<!-- end logo -->
 	<div class="clear"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
	
<div class="clear">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 


		<!--  start nav -->
		<div class="nav">
		<div class="table">
		
		<ul class="current"><li><a href="#nogo"><b>新增</b><!--[if IE 7]><!--></a>
		<div class="select_sub show">
			<ul class="sub">
				<li class="sub_show"><a href="#nogo">訂單</a></li>
				<li><a href="create_customer.php">客戶資料</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="#nogo"><b>查詢</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="search_original.php">原始訂單</a></li>
				<li><a href="search_customer.php">客戶</a></li>
				<li><a href="search_product.php">製造訂單</a></li>
				<li><a href="search_color.php">色碼</a></li>
				<li><a href="search_print.php">印花</a></li>
				<li><a href="search_material.php">原料</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->
 
 <div class="clear"></div>
 
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>建立訂單</h1></div>


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
	
		<!--  start step-holder -->
		<div id="step-holder">
			<div class="step-no-off">1</div>
			<div class="step-light-left">填寫資料</div>
			<div class="step-light-right">&nbsp;</div>
			<div class="step-no-off">2</div>
			<div class="step-light-left">確認訂單</div>
			<div class="step-light-right">&nbsp;</div>
			<div class="step-no">3</div>
			<div class="step-dark-left"><a href="">完成匯出</a></div>
			<div class="step-dark-round">&nbsp;</div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	<?php

	if($cust_row){
		$custID = $cust_row[0];
		$in_o = "INSERT INTO order_original (cust_ID, date_received, date_complete) VALUES ('$custID','$date_R','$date_C')";
		mysql_query($in_o,$link);

		//新增產品資料到product的表
		$orderID = mysql_fetch_row(mysql_query("SELECT MAX(order_o_ID) FROM order_original"));
		$in_p = "INSERT INTO product (order_o_ID, mat_ID, color_ID, print_ID, dscrp, size, quantity) VALUES ('$orderID[0]', '$material', '$color', '$print', '$dscpt', '$size', '$quantity')";
		mysql_query($in_p,$link);
		$title = "完成";

		?>
	<!-- 	<P>客戶名稱：<?php echo $material;?></p>
			<p>原料：<?php echo $material;?></p>
			<p>色號：<?php echo $color;?></p>
			<p>印花編號：<?php echo $print;?></p>
			<p>描述：<?php echo $dscrp;?></p>
			<p>長度：<?php echo $size;?></p>
			<p>數量：<?php echo $quantity;?></p>
			<p>收到訂單日期：<?php echo $date_R;?></p>
			<p>要求出貨日期：<?php echo $date_C;?></p>
			 -->
			
	<a href="export.php"><input type="submit" value="匯出PDF訂單" class="form-submit3"></a><br>

	<h2>&nbsp;&nbsp;&nbsp;or</h2>
	<a href="start.html"><input type="submit" value="返回首頁" class="form-submit3"></a>

	


			<?php
		}else{
		//要新增客戶所以newCust=1
			$newCust = 1;
			$title = "新增客戶";

			?>
<form name="newCust_f" method="post" action="confirm_order.php">
	  <h1>找不到該客戶，請輸入新客戶資訊</h1><br><br>
	  	<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">客戶名稱</th>
			<td><input type="text" name="newName" value="<?php echo $name?>" class="inp-form"><br></td>
			<td></td>
		</tr>
		
		<tr>
			<th valign="top" >國籍</th>
			<td><input type="text" name="country" class="inp-form" /></td>
			<td></td>
		</tr>

		<tr>
			<th valign="top" >聯絡人</th>
			<td><input type="text" name="contact_name" class="inp-form" /></td>
			<td></td>
		</tr>

		<tr>
			<th valign="top" >電話</th>
			<td><input type="text" name="phone" class="inp-form" /></td>
			<td></td>
		</tr>

		<tr>
			<th valign="top" >聯絡信箱</th>
			<td><input type="text" name="e_addr" class="inp-form" /></td>
			<td></td>
		</tr>

		<tr>
			<th valign="top" >地址</th>
			<td><input type="text" name="addr" class="inp-form" /></td>
			<td></td>
		</tr>

	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="確認客戶資料並新增訂單" class="form-submit2">
			<a href="completed_order.php"><input type="reset" value="" class="form-reset"/></a>
		</td>
		<td></td>
	</tr>


	<input type="hidden" name="name" value="<?php echo $name;?>"/>
    <input type="hidden" name="material" value="<?php echo $material;?>"/>
    <input type="hidden" name="color" value="<?php echo $color;?>"/>
    <input type="hidden" name="print" value="<?php echo $print;?>"/>
    <input type="hidden" name="dscrp" value="<?php echo $dscrp;?>"/>
    <input type="hidden" name="size" value="<?php echo $size;?>"/>
    <input type="hidden" name="quantity" value="<?php echo $quantity;?>"/>
	<input type="hidden" name="date_R" value="<?php echo $date_R;?>"/>
	<input type="hidden" name="date_C" value="<?php echo $date_C;?>"/>
	<input type="hidden" name="newCust" value="<?php echo $newCust;?>"/>
			
		</table>
  </form>
<?php
}

  $sql_o="SELECT * FROM order_original";
  $data_o=mysql_query($sql_o,$link);
  // echo "orderID , custID , dateReceived <br>";
  // for($num=1;$num<=mysql_num_rows($data_o);$num++){
  // 	$rs=mysql_fetch_row($data_o);

  // echo "$rs[0] , $rs[1] , $rs[2]<br>";}
?>
	</td>
	<td>


</td>
</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
	<th class="sized bottomleft"></th>
	<td id="tbl-border-bottom">&nbsp;</td>
	<th class="sized bottomright"></th>
</tr>
</table>

<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer -->

 

<div class="clear">&nbsp;</div>
    
<!-- start footer -->         
<div id="footer">
	<!--  start footer-left -->
	<div id="footer-left">
	Admin Skin &copy; Copyright Internet Dreams Ltd. <a href="">www.netdreams.co.uk</a>. All rights reserved.</div>
	<!--  end footer-left -->
	<div class="clear">&nbsp;</div>
</div>
<!-- end footer -->
 
</body>
</html>

