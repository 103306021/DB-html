<?php
 mysql_connect("localhost","root","root");//連結伺服器
 mysql_select_db("daywin");//選擇資料庫
 mysql_query("set names utf8");//以utf8讀取資料，讓資料可以讀取中文
 $id=$_GET['id'];
 mysql_query("DELETE FROM color Where color_ID='$id'");  // ***
?>

<script>
	alert("刪除成功!");
	location.href= "search_color.php"; // ***
</script>