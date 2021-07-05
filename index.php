
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/fontawesome/fontawesome/css/all.css">
<link rel="shortcut icon" type="image/x-icon" href="icon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Surgery Scheduling</title>
</head>
<div class="jumbotron text-center" style="margin-bottom: 0">
	<h1>SURGERY SCHEDULING</h1>
</div>
<nav class="navbar navbar-expand-sm bg-info ">
</nav>
<br>
<style>

div.polaroid {
  width: 30%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin: 3%;
  margin-left:-1%;
}

div.container {
  text-align: center;
  padding: 10px 20px;
}
.form-row1 {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: 100px;
  margin-left: 100px;
  padding-left: 6.5%;
}
</style>

<body>
<form  method="post">

	<div class="card-header">
	</div>
	<div class="card">
		<br>
		<div class="form-row1">
<div class="polaroid">
  <img src="assets/img/patient.png"  style="width:100%">
  <div class="container">
  <a class="btn btn-info" href="patient/patient.php">PATIENT</a>
  </div>
</div>

<div class="polaroid">
  <img src="assets/img/dr.png" style="width:100%">
  <div class="container">		
	<a class="btn btn-info" href="doctor/loginform.php">DOCTOR</a>
</div>

</div>
<div class="polaroid">
  <img src="assets/img/admn.png" style="width:100%; ">
  <div class="container">   
  <a class="btn btn-info" href="admin/loginform.php">ADMIN</a>
</div>

</div>
</div>
</div>
		    
</form>


</body>

</html>