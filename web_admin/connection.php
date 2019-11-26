<?php 
$connection=mysqli_connect("localhost","root","","interior");
/*check connection*/
$connect = new PDO("mysql:host=localhost;dbname=interior", "root", "");

if(mysqli_connect_errno())
{
echo"Connection Fail". mysqli_connect_error();
}
?>