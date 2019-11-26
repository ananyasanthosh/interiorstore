<?php
include("check_session.php");
include("connection.php");
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$gallery_id=$_GET['gallery_id'];
///////picture delete/////////
$result=mysqli_query($connection,"select gallery_pic from gallery where gallery_id='$gallery_id'")
or die("query is incorrect...");

list($picture)=mysqli_fetch_array($result);
$path="../images/gallery/$picture";

if(file_exists($path)==true)
{
  unlink($path);
}
else
{}
/*this is delet quer*/
mysqli_query($connection,"delete from gallery where gallery_id='$gallery_id'")or die("query is incorrect...");
}
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
	<h1>Managing gallery </h1></div><br>
<div class='table-responsive'>  
<div style="overflow-x:scroll;">
<table class="table  table-hover table-striped table-bordered" style="font-size:18px">
<tr><th>Picture</th><th>Name</th><th>Details</th><th><a href="add_gallery.php" class="btn btn-primary">Add New</a></th></tr>
<?php 
$result=mysqli_query($connection,"select gallery_id,gallery_pic, gallery_name, gallery_details from gallery")or die ("query 1 incorrect.....");

while(list($gallery_id,$gallery_pic,$gallery_name,$gallery_details)=mysqli_fetch_array($result))
{
echo "<tr><td><img src='../images/gallery/$gallery_pic' style='width:60px; height:60px; border:groove #000'></td><td>$gallery_name</td><td>$gallery_details</td>
<td>
<a class='btn btn-danger' href='manage_gallery.php?gallery_id=$gallery_id&action=delete'>Delete</a></td></tr>";
}
?>
</table>
</div></div>
</div></div>
<?php include("include/js.php");?>
</body>
</html>