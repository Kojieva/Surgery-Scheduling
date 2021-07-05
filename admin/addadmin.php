<?php
require_once('../connect/db.php');

if (isset($_POST['Submit'])) {
$Username = $_POST['Username'];
$Password = $_POST['Password'];


if(empty($Username)){
$errorMsg = 'Please input Username';
}
elseif(empty($Password)){
$errorMsg = 'Please input Password';
}

if(!isset($errorMsg)){

$sql = "insert into adminlogin(Username, Password)
values('".$Username."', '".$Password."')";

$result = mysqli_query($conn, $sql);

if($result){

header('Location: createadmin.php');
}
else{
$errorMsg = 'Error '.mysqli_error($conn);
}
}
}
?>