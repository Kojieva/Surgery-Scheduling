<?php 
session_start();
$Username = $_POST ['uname'];
$Password = $_POST ['pass'];
$Username = stripcslashes($Username);
$Password    = stripcslashes($Password);

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'surgery');


$s =" SELECT * FROM adminlogin WHERE  Username='$Username' and Password='$Password' ";

$result = mysqli_query($con , $s);


$row = mysqli_fetch_array($result);


if ( $row['Username'] == $Username &&   $row['Password'] == $Password )

{
  
 header('location:admin.php');
}
  else {

  
  
}



?>