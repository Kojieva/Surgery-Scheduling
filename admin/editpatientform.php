
<?php
require_once('../connect/db.php');
if (isset($_GET['id'])) {
$id = $_GET['id'];
$sql = "select * from patientschd where id=".$id;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);
}else {
$errorMsg = 'Could not Find Any Record';
}
}
if(isset($_POST['Submit'])){
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


if(!isset($errorMsg)){
$sql = "update patientschd set lname = '".$lname."',fname = '".$fname."' ,mname = '".$mname."',gender = '".$gender."', bday = '".$bday."',age = '".$age."',placebday = '".$placebday."' ,address = '".$address."' ,nationality = '".$nationality."' ,religion = '".$religion."' ,anesthesia = '".$anesthesia."' ,surgerytype = '".$surgerytype."',surgeon = '".$surgeon."' ,anesthesiologist = '".$anesthesiologist."' ,fasting = '".$fasting."' ,admittime = '".$admittime."' ,operation = '".$operation."' where id=".$id;
$result = mysqli_query($conn, $sql);
if($result){
$successMsg = 'New record updated successfully';
header('Location:admin.php');
}else{
$errorMsg = 'Error '.mysqli_error($conn);
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../assets/css/fontawesome/fontawesome/css/all.css">
<link rel="shortcut icon" type="image/x-icon" href="../icon.ico">
<title>Surgery Scheduling</title>
<div class="jumbotron text-center" style="margin-bottom:0">
<h1>SURGERY SCHEDULING</h1>
</div>
</head>


<body>

<nav class="navbar navbar-expand-sm bg-info">
	  <img src="../assets/img/admin.png" style="width:50px; margin-right: 10px;">
 <a class="navbar-brand" style="color: white;">Patient Record</a>
	<a class="btn btn-secondary" href="admin.php" style="color: white;">Back</a>


</nav>
<br>

<form method="post" enctype="multipart/form-data">

	<div class="card-header">
		<i class="fas fa-edit"></i>PATIENT INFORMATION ENTRY
	</div>
	<div class="card">
		<br>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="inputEmail4">Lastname</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" class="form-control"
						id="inlineFormInputGroupUsername2" value="<?php echo $row['lname']; ?>"
						name="lname" required >
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-user"></i>
						</div>
					</div>
				</div>
			</div>

			<div class="form-group col-md-4">
				<label for="inputEmail4">Firstname</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" class="form-control"
						id="inlineFormInputGroupUsername2" value="<?php echo $row['fname']; ?>"
						name="fname" required >
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-user"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group col-md-4">
				<label for="inputEmail4">Middlename</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" class="form-control"
						id="inlineFormInputGroupUsername2"value="<?php echo $row['mname']; ?>"
						name="mname"  required>
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-user"></i>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="form-row">
						<div class="form-group col-md-4">
				<label for="inputEmail4">Gender</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" id="dob" value="<?php echo $row['gender']; ?>" name="gender" class="form-control"
						 required >
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-mailbox"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group col-md-4">
				<label for="inputEmail4">Birth Date</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="date" id="dob" value="<?php echo $row['bday']; ?>" name="bday" class="form-control"
						 required >
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-mailbox"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group col-md-4">
				<label for="inputEmail4">Age</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" id="age"  value="<?php echo $row['age']; ?>"name="age" class="form-control"
						required>
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-mailbox"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		
			<div class="form-row">
			<div class="form-group col-md-4">
				<label for="inputEmail4">Place of Birth</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" class="form-control" value="<?php echo $row['placebday']; ?>" name="placebday"
						 required>
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-mailbox"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group col-md-4">
				<input type="hidden" name="action" value="add"> <label
					for="inputEmail4">Address</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" class="form-control"
						id="inlineFormInputGroupUsername2" value="<?php echo $row['address']; ?>" name="address"
						 required>
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-mailbox"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group col-md-4">
				<label for="inputEmail4">Nationality</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" class="form-control" value="<?php echo $row['nationality']; ?>" name="nationality"
						 required>
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-mailbox"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-4">
				<input type="hidden" name="action" value="add"> <label
					for="inputEmail4">Religion</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" class="form-control"
						id="inlineFormInputGroupUsername2" value="<?php echo $row['religion']; ?>" name="religion"
						 required>
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-mailbox"></i>
						</div>
					</div>
				</div>
			</div>

					<div class="form-group col-md-4">
				<label for="inputEmail4">Anesthesia</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" id="dob" value="<?php echo $row['anesthesia']; ?>" name="anesthesia" class="form-control"
						  required>
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-mailbox"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group col-md-4">
				<label for="inputEmail4">Type of Surgery</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" name="surgerytype" class="form-control" value="<?php echo $row['surgerytype']; ?>"
						required >
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-mailbox"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-row">
				<div class="form-group col-md-4">
				<input type="hidden" name="action" value="add"> <label
					for="inputEmail4">Surgeon</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" class="form-control"
						id="inlineFormInputGroupUsername2" value="<?php echo $row['surgeon']; ?>" name="surgeon"required>
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-mailbox"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group col-md-4">
				<input type="hidden" name="action" value="add"> <label
					for="inputEmail4">Anesthesiologist</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" class="form-control"
						id="inlineFormInputGroupUsername2" value="<?php echo $row['anesthesiologist']; ?>" name="anesthesiologist"
						required >
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-mailbox"></i>
						</div>
					</div>
				</div>
			</div>

					<div class="form-group col-md-4">
				<label for="inputEmail4">Fasting Hour</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" id="dob" value="<?php echo $row['fasting']; ?>" name="fasting" class="form-control"
						 required >
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-mailbox"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="inputEmail4">Admit Time</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" name="admittime" class="form-control" value="<?php echo $row['admittime']; ?>"
						 required>
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-mailbox"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group col-md-4">
				<input type="hidden" name="action" value="add"> <label
					for="inputEmail4">Operation Hour</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" class="form-control"
						id="inlineFormInputGroupUsername2" value="<?php echo $row['operation']; ?>" name="operation"
						required >
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-mailbox"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="card-footer">
		<button type="submit" name="Submit" class="btn btn-success">
			<i class="fas fa-save"></i> Update
		</button>
		
	</div>

</form>
</body>
</html>