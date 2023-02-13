<?php
$servername="localhost";
$username="root";
$password="";
$dbname="idcard";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	if(isset($_POST['submit']))
	{

$name=$_POST['name'];
$dob=$_POST['dob'];
$desig=$_POST['designation'];
$addr=$_POST['address'];
$phone=$_POST['phone'];
$doj=$_POST['doj'];
// $file=$_POST['file'];
  $file = $_FILES['photo']['name'];
  $file_type = $_FILES['photo']['type'];
  $file_size = $_FILES['photo']['size'];
  $file_tem_loc = $_FILES['photo']['tmp_name'];
  $file_store = "photo/".$file;

  move_uploaded_file($file_tem_loc, $file_store);

$sql="insert into teacher(name,dob,designation,address,phone,doj,photo) values('$name','$dob','$desig','$addr','$phone','$doj','$file')";

$res=mysqli_query($conn,$sql);
if($res)
{
  header("refresh: 4; url=teacher_form.php");
  echo "<h1><p align=center stlye=font:50px;>Your record has been stored successfully</p></h> ";
  
}
else
{ 
  header("refresh: 4; url=teacher_form.php");
  echo "<h1><p align=center stlye=font:50px;>Something went wrong !! Must be a server issue</p></h1> ";

}
  }
}
?>