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
$addr=$_POST['address'];
$phone=$_POST['phone'];
$dep=$_POST['department'];
$doi=$_POST['issue'];
// $file=$_POST['file'];
  $file = $_FILES['photo']['name'];
  $file_type = $_FILES['photo']['type'];
  $file_size = $_FILES['photo']['size'];
  $file_tem_loc = $_FILES['photo']['tmp_name'];
  $file_store = "photo/".$file;

  move_uploaded_file($file_tem_loc, $file_store);

$sql="insert into staff(name,dob,address,phone,department,issue,photo) values('$name','$dob','$addr','$phone','$dep','$doi','$file')";

$res=mysqli_query($conn,$sql);
if($res)
{
  header("refresh:3; url=staff_form.php");
  echo "<h1><p align=center stlye=font:50px;>Your record has been stored successfully</p></h1> ";
}
else
{ 
  header("refresh: 3; url=staff_form.php");
  echo "<h1><p align=center stlye=font:50px;>Something went wrong !! Must be a server issue</p></h1> ";

}
  }
}
?>