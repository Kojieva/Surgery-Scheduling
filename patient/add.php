<?php
require_once('../connect/db.php');

if (isset($_POST['Submit'])) {
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$gender = $_POST['gender'];
$bday = $_POST['bday'];
$age = $_POST['age'];
$placebday = $_POST['placebday'];
$address = $_POST['address'];
$nationality = $_POST['nationality'];
$religion = $_POST['religion'];

if(empty($lname)){
$errorMsg = 'Please input Lastname';
}
elseif(empty($fname)){
$errorMsg = 'Please input Firstname';
}
elseif(empty($mname)){
$errorMsg = 'Please input Middlename';
}
elseif(empty($gender)){
$errorMsg = 'Please input Gender';
}
elseif(empty($bday)){
$errorMsg = 'Please input Birth Date';
}
elseif(empty($age)){
$errorMsg = 'Please input Age';
}
elseif(empty($placebday)){
$errorMsg = 'Please input Place of Birth';
}
elseif(empty($address)){
$errorMsg = 'Please input Address';
}
elseif(empty($nationality)){
$errorMsg = 'Please input Nationality';
}
elseif(empty($religion)){
$errorMsg = 'Please input Religion';
}
if(!isset($errorMsg)){

$sql = "insert into patientschd(lname, fname, mname, gender, bday, age, placebday, address, nationality, religion)
values('".$lname."', '".$fname."', '".$mname."', '".$gender."', '".$bday."', '".$age."', '".$placebday."', '".$address."', '".$nationality."', '".$religion."')";

$result = mysqli_query($conn, $sql);

if($result){
 
header('Location: patient.php');
}
else{
$errorMsg = 'Error '.mysqli_error($conn);
}
}
}
?>