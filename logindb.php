
<?php
session_start(); 
//$color_code = array('#F4ECF7','#F4ECF7','#95A5A6','#2ECC71');
//$random_color = $color_code[array_rand($color_code)];


$servername="localhost";
$username="root";
$password="";
$dbname="idcard";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$_SESSION['user']=$_POST['username'];

if(isset($_POST['submit'])){
    

    
    extract($_POST);
    $query="select * from login where username='$username' AND password='$password' ";
    $run_query=mysqli_query($conn,$query);
     if(mysqli_num_rows($run_query)>0){
        
         $_SESSION['username']=$username;
         $_SESSION['password']=$password;
         $_SESSION['user']=$username;
         
         
         
         header("location:idcat.php");
     }
     else{
        
        header("refresh: 3; url=login.php");
        echo "<h1><p align=center stlye=font:50px;>You have entered wrong username and password</p></h1> ";
        echo "<h2><p align=center stlye=font:40px;>try again!!</p></h2> ";
     }
}
?>
