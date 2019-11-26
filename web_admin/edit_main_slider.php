<?php
include("check_session.php");
include("connection.php");
$slider_pic_id=$_REQUEST['slider_pic_id'];

$result=mysqli_query($connection,"select slider_pic, slider_pic_title from main_slider where slider_pic_id='$slider_pic_id'")or die ("query 1 incorrect.......");
list($slider_pic,$slider_pic_title)=mysqli_fetch_array($result);

	
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
	if($picture_size<=999999999)
	{
$query=mysqli_query($connection,"select slider_pic from main_slider where slider_pic_id='$slider_pic_id'")or die("query is incorrect...");
	list($slider_pic1)=mysqli_fetch_array($query);
	
        $path="../images/main_slider/$slider_pic1";
		
		if(file_exists($path)==true)
		{
		  unlink($path);
		}
		else
		{
		}

		$pic_name=time()."_".$picture_name;
move_uploaded_file($picture_tmp_name,"../images/main_slider/".$pic_name);
mysqli_query($connection,"update main_slider set  slider_pic='$pic_name' where slider_pic_id ='$slider_pic_id'")or die("Query 2 is inncorrect.....");
}
   else
   {}
  
   }
else
{}
 mysqli_query($connection,"update main_slider set slider_pic_title='$title' where slider_pic_id='$slider_pic_id'")or die("Query 2 is inncorrect.....");

header("location: manage_slider.php"); 

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
<form action="edit_main_slider.php" name="form" method="post" enctype="multipart/form-data">
	<input type="hidden"  name="slider_pic_id" id="slider_pic_id" value="<?php echo $slider_pic_id;?>" />
	&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/main_slider/<?php echo $slider_pic;?>" style="width:200px;height:200px" ><br><br>
    <input type="text" name="title" style="width:200px" class="input-lg input-group-addon" value="<?php echo $slider_pic_title;?>">
<input type="file" style="width:230px" class="input-lg" name="picture"  id="picture" multiple style="font-size:18px" >
	<br>
 <button type="submit" class="btn btn-success" name="btn_save" id="btn_save" style="font-size:18px">Submit</button>
</form>
</div></div>
<?php include("include/js.php");?>
</body>
</html>