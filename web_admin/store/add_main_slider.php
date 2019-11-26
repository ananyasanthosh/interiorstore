<?php
include("check_session.php");
include("connection.php");
	
 if(isset($_POST['btn_save']))
{
	$title=$_POST['title'];
//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
	if($picture_size<=50000000)
	{
		$pic_name=time()."_".$picture_name;
		move_uploaded_file($picture_tmp_name,"../images/main_slider/".$pic_name);
		
mysqli_query($connection,"insert into main_slider (slider_pic, slider_pic_title) values ('$pic_name','$title')") or die ("query incorrect");

 header("location: manage_slider.php");
}else
{}
}else
{}
mysqli_close($connection);
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
<?php include("include/header.php"); ?>
   	<div class="container-fluid main-container">
	<?php include("include/side_bar.php");?>
    
	<div class="col-md-9 content" align="center" style="margin-left:10px">  
<div class="panel-heading" style="background-color:#c4e17f">
	<h1>Edit User Details </h1></div><br>
<form action="add_main_slider.php" name="form" method="post" enctype="multipart/form-data">
	
    <input type="text" name="title" style="width:200px" class="input-lg input-group-addon" placeholder="Title">
<input type="file" style="width:230px" class="input-lg" name="picture"  id="picture" multiple style="font-size:18px" >
	<br>
 <button type="submit" class="btn btn-success" name="btn_save" id="btn_save" style="font-size:18px">Submit</button>
</form>
</div></div>
<?php include("include/js.php");?>
</body>
</html>