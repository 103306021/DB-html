<?php
  mysql_connect("localhost","root","root");//連結伺服器
  mysql_select_db("daywin");//選擇資料庫
  mysql_query("set names utf8");//以utf8讀取資料，讓資料可以讀取中文
  if($_POST['printID']!=''){
    $printID=$_POST['printID'];
    $data=mysql_query("
      select* 
      from print
      where print_ID='$printID'");
  }else{
    $data=mysql_query("select* from print");
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>查詢印花</title>
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
    
    <ul class="select"><li><a href="create_order.php"><b>新增</b><!--[if IE 7]><!--></a>
    <div class="select_sub show">
      <ul class="sub">
        <li><a href="create_order.php">訂單</a></li>
        <li><a href="create_customer.php">客戶資料</a></li>
      </ul>
    </div>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
    </li>
    </ul>
    
    <div class="nav-divider">&nbsp;</div>
    
    <ul class="current"><li><a href="#nogo"><b>查詢</b><!--[if IE 7]><!--></a><!--<![endif]-->
    <!--[if lte IE 6]><table><tr><td><![endif]-->
    <div class="select_sub show">
      <ul class="sub">
        <li><a href="search_original.php">原始訂單</a></li>
        <li><a href="search_customer.php">客戶</a></li>
        <li><a href="search_product.php">製造訂單</a></li>
        <li ><a href="search_color.php">色碼</a></li>
        <li class="sub_show"><a href="#nogo">印花</a></li>
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
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

  <!--  start page-heading -->
  <div id="page-heading">
    <h1>查詢印花</h1>
  </div>
  <!-- end page-heading -->

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
    <!--  start content-table-inner ...................................................................... START -->
    <div id="content-table-inner">
    
      <!--  start table-content  -->
      <div id="table-content">
<form id="form1" name="form1" method="post" action="">
  <p>
    <input name="printID" type="text" id="printID" class="inp-form" value="<?php echo $printID?>" />
    <input type="submit" name="button" class="form-submit4" id="button" value="搜尋" /><br><br>
  </p>
</form>
<p></p>
<form id="mainform" action="">
<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
   <tr>
    <th class="table-header-repeat line-left"><a href="">印花編號</a>  </th>
    <th class="table-header-repeat line-left"><a href="">印花名稱</a></th>
    <th class="table-header-options line-left"><a href="">Options</a></th>
  </tr>

  <?php
    for($i=1;$i<=mysql_num_rows($data);$i++){
    $rs=mysql_fetch_row($data);
  ?>

  <tr>
    <td><?php echo $rs[0]?></td>
    <td><?php echo $rs[1]?></td>
    <td class="options-width">
          <a href="" title="修改" class="icon-1 info-tooltip"></a>
          <input type="button" name="delete" class="icon-2 info-tooltip" onClick="del_confirm(<?php echo $rs[0]?>)"/>
    </td>
  </tr>
  
  <?php
}
?>
</table>
        </form>
      </div>
      <!--  end content-table  -->
      
      <div class="clear"></div>
     
    </div>
    <!--  end content-table-inner ............................................END  -->
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
<!--  end content-outer........................................................END -->

<div class="clear">&nbsp;</div>
    
<!-- start footer -->         
<div id="footer">
  <!--  start footer-left -->
  <div id="footer-left">
  
  Admin Skin &copy; Copyright Internet Dreams Ltd. <span id="spanYear"></span> <a href="">www.netdreams.co.uk</a>. All rights reserved.</div>
  <!--  end footer-left -->
  <div class="clear">&nbsp;</div>
</div>
<!-- end footer -->
 
</body>
 <script>
  function del_confirm(id){
   if(confirm("確定刪除？")){
    location.href= "del(print).php?id=" + id;
    }else{}
  }
  </script>
</html>

</body>
</html>