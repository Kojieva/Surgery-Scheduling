<?php
include('add.php')
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
<img src="../assets/img/patient.png" style="width:50px; margin-right: 10px;">
 <a class="navbar-brand" style="color: white;">Patient</a>
	<a class="btn btn-secondary" href="../index.php" style="color: white;">Home</a>


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
						id="inlineFormInputGroupUsername2" placeholder="Santos"
						name="lname"  required>
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
						id="inlineFormInputGroupUsername2" placeholder="Alex"
						name="fname"  required>
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
						id="inlineFormInputGroupUsername2" placeholder="Pascual"
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
					<select type="text" class="form-control" name="gender"
						 required>
						<option></option>
						<option>Male</option>
						<option>Female</option>
					</select>
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
					<input type="date" id="dob" name="bday" class="form-control"
						onblur="checkAge()" required >
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
					<input type="text" id="age" name="age" class="form-control"
						readonly>
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
					<input type="text" class="form-control" name="placebday"
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
						id="inlineFormInputGroupUsername2" name="address"
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
					<input type="text" class="form-control" name="nationality"
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
						id="inlineFormInputGroupUsername2" name="religion"
						 required>
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
		<button class="btn btn-info" name="Submit">
			<i class="fas fa-save"></i> Save
		</button>
		<button type="reset" class="btn btn-danger">
			<i class="fas fa-undo"></i> Reset
		</button>
	</div>

</form>
</body>

<script>
date = new Date();
var month = date.getMonth()+1;
var day = date.getDate();
var year = date.getFullYear();
document.getElementById("date").value = month + '/' + day + '/' + year;
</script>
<script>
function checkAge(){
var today = new Date();
var d = document.getElementById("dob").value;
if (!/\d{4}\-\d{2}\-\d{2}/.test(d)) { // check valid format
showMessage();
return false;
}
d = d.split("-");
var byr = parseInt(d[0]);
var nowyear = today.getFullYear();
if (byr >= nowyear || byr < 1900) { // check valid year
showMessage();
return false;
}
var bmth = parseInt(d[1],10)-1; // radix 10!
if (bmth < 0 || bmth >11) { // check valid month 0-11
showMessage()
return false;
}
var bdy = parseInt(d[2],10); // radix 10!
var dim = daysInMonth(bmth+1,byr);
if (bdy <1 || bdy > dim) { // check valid date according to month
showMessage();
return false;
}
var age = nowyear - byr;
var nowmonth = today.getMonth();
var nowday = today.getDate();
if (bmth > nowmonth) {age = age - 1} // next birthday not yet reached
else if (bmth == nowmonth && nowday < bdy) {age = age - 1}
alert('You are ' + age + ' years old');
document.getElementById("age").value = age;
document.getElementById("age").focus();
if (age <= 15) {
alert ("You are 15 years old or less!");
document.getElementById("age").value = age;
document.getElementById("age").focus();
}
}
function showMessage() {
if (document.getElementById("dob").value != "") {
alert ("Invalid date format or impossible year/month/day of birth - please re-enter as nowyearYY-MM-DD");
document.getElementById("dob").value = "";
document.getElementById("dob").focus();
}
}
function daysInMonth(month,year) { // months are 1-12
var dd = new Date(year, month, 0);
return dd.getDate();
} 
</script>
</html>


