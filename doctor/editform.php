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
$anesthesia = $_POST['anesthesia'];
$surgerytype = $_POST['surgerytype'];


if(!isset($errorMsg)){
$sql = "update patientschd set anesthesia = '".$anesthesia."',surgerytype = '".$surgerytype."' where id=".$id;
$result = mysqli_query($conn, $sql);
if($result){
$successMsg = 'New record updated successfully';
header('Location:doc.php');
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
	<img src="../assets/img/dr.png" style="width:50px; margin-right: 10px;">
 <a class="navbar-brand" style="color: white;">Doctor</a>
	<a class="btn btn-secondary" href="doc.php" style="color: white;">Back</a>


</nav>
<br>

<form method="post" enctype="multipart/form-data">

	<div class="card-header">
		<i class="fas fa-edit"></i> SET A SURGEON AND ANESTHESIOLOGIST
	</div>
	<div class="card">
		<br>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="inputEmail4">Lastname</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" class="form-control"
						id="inlineFormInputGroupUsername2" value="<?php echo $row['lname']; ?>"
						name="lname"  readonly>
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
						name="fname"  readonly>
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
						name="mname"  readonly>
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
				<label for="inputEmail4">Anesthesia</label>
				<div class="input-group mb-2 mr-sm-2">
					<select type="text" class="form-control" name="anesthesia" value="<?php echo $row['anesthesia']; ?>"
						 required>
						<option></option>
						<option>Local</option>
						<option>General</option>
					</select>
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
	</div>


	<div class="card-footer">
		<button type="submit" name="Submit" class="btn btn-success">
			<i class="fas fa-save"></i> Save
		</button>
	</div>

</form>
</body>
</html>


