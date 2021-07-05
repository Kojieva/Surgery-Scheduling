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
$anesthesia = $_POST['anesthesia'];
$surgerytype = $_POST['surgerytype'];
$surgeon = $_POST['surgeon'];
$anesthesiologist = $_POST['anesthesiologist'];
$fasting = $_POST['fasting'];
$admittime = $_POST['admittime'];
$operation = $_POST['operation'];

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
elseif(empty($anesthesia)){
$errorMsg = 'Please input Anesthesia';
}
elseif(empty($surgerytype)){
$errorMsg = 'Please input Type of Surgery';
}
elseif(empty($surgeon)){
$errorMsg = 'Please input Surgeon';
}
elseif(empty($anesthesiologist)){
$errorMsg = 'Please input Anesthesiologist';
}
elseif(empty($fasting)){
$errorMsg = 'Please input Fasting Hour';
}
elseif(empty($admittime)){
$errorMsg = 'Please input Admit Time';
}
elseif(empty($operation)){
$errorMsg = 'Please input Operation Hour';
}

if(!isset($errorMsg)){

$sql = "insert into patientschd(lname, fname, mname, gender, bday, age, placebday, address, nationality, religion ,anesthesia ,surgerytype ,surgeon ,anesthesiologist ,fasting ,admittime ,operation)
values('".$lname."', '".$fname."', '".$mname."', '".$gender."', '".$bday."', '".$age."', '".$placebday."', '".$address."', '".$nationality."', '".$religion."', '".$anesthesia."', '".$surgerytype."', '".$surgeon."', '".$anesthesiologist."', '".$fasting."', '".$admittime."', '".$operation."')";

$result = mysqli_query($conn, $sql);

if($result){
echo "<script>alert('Welcome to Geeks for Geeks');</script>"; 
header('Location: admin.php');
}
else{
$errorMsg = 'Error '.mysqli_error($conn);
}
}
}
?>