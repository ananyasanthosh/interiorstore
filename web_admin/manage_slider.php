<?php
include("check_session.php");
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
  <?php include("include/header.php");?>
   	<div class="container-fluid main-container">
	<?php include("include/side_bar.php");?>
    <div class="col-md-9 content" style="margin-left:10px">
    <div class="panel-heading" style="background-color:#c4e17f">
	<h1>Managing Main_Slider </h1></div><br>
<div class='table-responsive'>  
<div style="overflow-x:scroll;">
<table class="table  table-hover table-striped table-bordered" style="font-size:18px">
<tr><th>Picture</th><th>Title</th><th>Action</th></tr>
<?php 
$result=mysqli_query($connection,"select slider_pic_id,slider_pic, slider_pic_title from main_slider")or die ("query 1 incorrect.....");

while(list($slider_pic_id,$slider_pic,$slider_pic_title)=mysqli_fetch_array($result))
{
echo "<tr><td><img src='../images/main_slider/$slider_pic' style='width:50px; height:50px; border:groove #000'></td><td>$slider_pic_title</td>
<td>
<a class=' btn btn-primary' href='edit_main_slider.php?slider_pic_id=$slider_pic_id'>Edit</a>
</td></tr>";
}
?>
</table>
</div></div>
</div></div>
<?php include("include/js.php");?>
</body>
</html>