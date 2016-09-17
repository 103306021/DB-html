<?php
mysql_connect("localhost","root","root");
mysql_select_db("daywin");
mysql_query("set names utf8");
$data=mysql_query("select * from daywin");

$newCust = 0;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>新增訂單</title>
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
			<div class="step-no">1</div>
			<div class="step-dark-left"><a href="">填寫資料</a></div>
			<div class="step-dark-right">&nbsp;</div>
			<div class="step-no-off">2</div>
			<div class="step-light-left">確認訂單</div>
			<div class="step-light-right">&nbsp;</div>
			<div class="step-no-off">3</div>
			<div class="step-light-left">完成匯出</div>
			<div class="step-light-round">&nbsp;</div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
		<form name="create_f" method="post" action="confirm_order.php">
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">客戶名稱</th>
			<td><input type="text" name="name" class="inp-form" /></td>
			<td></td>
		</tr>
		
		<tr>
		<th valign="top">原料</th>
		<td>	
		<select  name="material" class="styledselect_form_1">
			<option value="" disabled selected>請選擇原料</option>
			<option value="1">ACRYLIC</option>
			<option value="2">POLEYSTER</option>
		</select>
		</td>
		<td></td>
		</tr>
		
		<tr>
			<th valign="top" >色號</th>
			<td><input type="text" name="color" class="inp-form" /></td>
			<td></td>
		</tr>

		<tr>
			<th valign="top" >印花編號</th>
			<td><input type="text" name="print" class="inp-form" /></td>
			<td></td>
		</tr>

		<tr>
			<th valign="top">長度</th>
			<td><input type="text" name="size" class="inp-form" /></td>
			<td></td>
		</tr>

		<tr>
			<th valign="top">數量</th>
			<td><input type="number" name="quantity" min="1" max="1000" class="inp-form" /></td>
			<td></td>
		</tr>

		<tr>
			<th valign="top">收到訂單日期</th>
			<td class="noheight">
		
				<table border="0" cellpadding="0" cellspacing="0">
					<tr  valign="top">
						
							
							<td>				
								<select id="d" class="styledselect-day" name="date_R_d">
									<option value="">日</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								</select>
							</td>
							<td>
								<select id="m" class="styledselect-month" name="date_R_m">
									<option value="">月</option>
									<option value="1">一月</option>
									<option value="2">二月</option>
									<option value="3">三月</option>
									<option value="4">四月</option>
									<option value="5">五月</option>
									<option value="6">六月</option>
									<option value="7">七月</option>
									<option value="8">八月</option>
									<option value="9">九月</option>
									<option value="10">十月</option>
									<option value="11">十一月</option>
									<option value="12">十二月</option>
								</select>
							</td>
							<td>
								<select  id="y"  class="styledselect-year" name="date_R_y">
									<option value="">年</option>
									<option value="2015">2015</option>
									<option value="2016">2016</option>
									<option value="2017">2017</option>
									<option value="2018">2018</option>
									<option value="2019">2019</option>
									<option value="2020">2020</option>
								</select>
							</td>
						
					</tr>
				</table>
			</td>
	</tr>

			<tr>
			<th valign="top">要求出貨日期</th>
			<td class="noheight">
		
				<table border="0" cellpadding="0" cellspacing="0">
					<tr  valign="top">
						
							
							<td>				
								<select id="d" class="styledselect-day" name="date_C_d">
									<option value="">日</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								</select>
							</td>
							<td>
								<select id="m" class="styledselect-month" name="date_C_m">
									<option value="">月</option>
									<option value="1">一月</option>
									<option value="2">二月</option>
									<option value="3">三月</option>
									<option value="4">四月</option>
									<option value="5">五月</option>
									<option value="6">六月</option>
									<option value="7">七月</option>
									<option value="8">八月</option>
									<option value="9">九月</option>
									<option value="10">十月</option>
									<option value="11">十一月</option>
									<option value="12">十二月</option>
								</select>
							</td>
							<td>
								<select  id="y"  class="styledselect-year" name="date_C_y">
									<option value="">年</option>
									<option value="2015">2015</option>
									<option value="2016">2016</option>
									<option value="2017">2017</option>
									<option value="2018">2018</option>
									<option value="2019">2019</option>
									<option value="2020">2020</option>
								</select>
							</td>
							
					</tr>
				</table>
			</td>
	</tr>



	<tr>
		<th valign="top" >描述</th>
		<td><textarea rows="" cols="" name="dscrp" class="form-textarea"></textarea></td>
		<td></td>
	</tr>
	
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="新增" class="form-submit">
			<a href="create_order.php"><input type="reset" value="" class="form-reset"/></a>
		</td>
		<td></td>
	</tr>
	</table>
		<input type="hidden" name="newCust" value="<?php echo $newCust;?>"/>

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