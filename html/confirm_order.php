<?php
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Could not connect: ' . mysql_error());
    echo 'Failed to connect.<br>';
}


mysql_select_db("daywin",$link);
mysql_query("set names utf8");
$data=mysql_query("select * from daywin");
$name=$_POST["name"];
$material=$_POST["material"];
$color=$_POST["color"];
$print=$_POST["print"];
$dscrp=$_POST["dscrp"];
$size=$_POST["size"];
$quantity=$_POST["quantity"];

//***有新增客戶欄位所以有新變數(開始)
$newName=$_POST["newName"];
$country=$_POST["country"];
$contact_name=$_POST["contact_name"];
$phone=$_POST["phone"];
$e_addr=$_POST["e_addr"];
$addr=$_POST["addr"];

$newCust = $_POST["newCust"];
//***有新增客戶欄位所以有新變數(結束)


if($newCust=="0"){
$date_R_y=$_POST["date_R_y"];
$date_R_m=$_POST["date_R_m"];
$date_R_d=$_POST["date_R_d"];
$date_R = "$date_R_y-$date_R_m-$date_R_d";
$date_C_y=$_POST["date_C_y"];
$date_C_m=$_POST["date_C_m"];
$date_C_d=$_POST["date_C_d"];
$date_C = "$date_C_y-$date_C_m-$date_C_d";

}else{
$date_R = $_POST["date_R"];
$date_C = $_POST["date_C"];

//新增客戶到資料庫
$in_c_q = "INSERT INTO customer (cust_name, country, email_addr, contact_name, phone, addr) VALUES ('$newName','$country','$e_addr', '$contact_name', '$phone', '$addr')";
$in_c = mysql_query($in_c_q,$link) or printf("<br>insert customer error<br>");

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>確認訂單</title>
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
	$('.styledselect_form_1')(.selectbox{ inputClass: "styledselect_form_1" });
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
		<meta charset="UTF-8"> 
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
			<div class="step-no">2</div>
			<div class="step-dark-left"><a href="">確認訂單</a></div>
			<div class="step-dark-right">&nbsp;</div>
			<div class="step-no-off">3</div>
			<div class="step-light-left">完成匯出</div>
			<div class="step-light-round">&nbsp;</div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
		<h1>請確認輸入的資訊是否正確</h1><br>
		<!-- ***根據有沒有新增客戶來決定顯示的欄位(開始) -->
		<?php
		if($newCust=="0"){
			//如果客戶已存在(沒有新增客戶)
		echo
		"<h3>輸入的訂單資訊如下</h3>
		<p>客戶名稱：$name</p><br>";

		 }else{ 
		 	//如果有新增客戶
		 echo
		"<h3>新客戶資訊如下</h3>
		<p>客戶名稱：$newName</p><br>
		<p>國籍：$country</p><br>
		<p>聯絡人：$contact_name</p><br>
		<p>電話：$phone</p><br>
		<p>聯絡信箱：$e_addr</p><br>
		<p>地址：$addr</p><br>

		<h3>輸入的訂單資訊如下</h3>
		<p>客戶名稱：$newName</p><br>";
		} 
		?>
		<!-- ***根據有沒有新增客戶來決定顯示的欄位(結束) -->

		<!-- 顯示訂單資訊 -->
		<p>原料：<?php echo $material;?></p><br>
		<p>色號：<?php echo $color;?></p><br>
		<p>印花編號：<?php echo $print;?></p><br>
	    <p>描述：<?php echo $dscrp;?></p><br>
	    <p>長度：<?php echo $size;?></p><br>
	    <p>數量：<?php echo $quantity;?></p><br>
		<p>收到訂單日期：<?php echo $date_R;?></p><br>
		<p>要求出貨日期：<?php echo $date_C;?></p><br>
		
		<form name="confirm_f" method="post" action="completed_order.php">
			<input type="hidden" name="name" value="<?php echo $name;?>"/>
	    	<input type="hidden" name="material" value="<?php echo $material;?>"/>
	    	<input type="hidden" name="color" value="<?php echo $color;?>"/>
			<input type="hidden" name="print" value="<?php echo $print;?>"/>
	      	<input type="hidden" name="dscrp" value="<?php echo $dscrp;?>"/>
	      	<input type="hidden" name="size" value="<?php echo $size;?>"/>
	      	<input type="hidden" name="quantity" value="<?php echo $quantity;?>"/>
			<input type="hidden" name="date_R" value="<?php echo $date_R;?>"/>
			<input type="hidden" name="date_C" value="<?php echo $date_C;?>"/>

		<!-- ***這裡我不確定你有沒有加到 -->
			<input type="hidden" name="newName" value="<?php echo $newName;?>"/>
	      	<input type="hidden" name="country" value="<?php echo $country;?>"/>
	      	<input type="hidden" name="e_addr" value="<?php echo $e_addr;?>"/>
		<!-- ***這裡我不確定你有沒有加到 -->

	
			<input type="submit" value="確認送出" class="form-submit" style="margin-left:40px">
			<input type="button" value="修改" onclick="history.back()" class="back" style="margin-left:10px">

</form>
	<!-- end id-form  -->

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