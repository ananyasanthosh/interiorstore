<?php
include("check_session.php");
include("connection.php");
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$client_id=$_GET['client_id'];
///////picture delete/////////
$result=mysqli_query($connection,"select client_pic from clients where client_id='$client_id'")
or die("query is incorrect...");

list($picture)=mysqli_fetch_array($result);
$path="../images/customers/$picture";

if(file_exists($path)==true)
{
  unlink($path);
}
else
{}
/*this is delet quer*/
mysqli_query($connection,"delete from clients where client_id='$client_id'")or die("query is incorrect...");
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
	<h1>Managing Customers </h1></div><br>
<div class='table-responsive'>  
<div style="overflow-x:scroll;">
<table class="table  table-hover table-striped table-bordered" style="font-size:18px">
<tr><th>Picture</th><th>Name</th><th>Details</th><th><a href="add_customer.php" class="btn btn-primary">Add New</a></th></tr>
<?php 
$result=mysqli_query($connection,"select client_id,client_pic, client_name, client_details from clients")or die ("query 1 incorrect.....");

while(list($client_id,$client_pic,$client_name,$client_details)=mysqli_fetch_array($result))
{
echo "<tr><td><img src='../images/customers/$client_pic' style='width:60px; height:60px; border:groove #000'></td><td>$client_name</td><td>$client_details</td>
<td>
<a class='btn btn-danger' href='manage_customers.php?client_id=$client_id&action=delete'>Delete</a></td></tr>";
}
?>
</table>
</div></div>
</div></div>
<?php include("include/js.php");?>
</body>
</html>