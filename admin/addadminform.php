<?php
include('addadmin.php')
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
 <a class="navbar-brand" style="color: white;">Admin</a>
  <a class="btn btn-secondary" href="createadmin.php" style="color: white;  margin-right: 0.3%">Back</a>
  <a class="btn btn-secondary" href="logout.php" style="color: white;">Log Out</a>


</nav>
<br>

<form method="post" enctype="multipart/form-data">

<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
<div class="card-header" style="width: 100%; margin-left: 0%;">

    <i class="fas fa-edit"></i> CREATE ADMIN ACCOUNT
    
  </div>
<div class="card-body">

<div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputEmail4">Username</label>
        <div class="input-group mb-2 mr-sm-2">
          <input type="text" class="form-control"
            id="inlineFormInputGroupUsername2" placeholder="Username"
            name="Username"  required>
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-user"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="form-group col-md-4">
        <label for="inputEmail4">Password</label>
        <div class="input-group mb-2 mr-sm-2">
          <input type="text" class="form-control"
            id="inlineFormInputGroupUsername2" placeholder="Password"
            name="Password"  required>
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-user"></i>
            </div>
          </div>
        </div>
      </div>

      
    </div>
</div>

  <div class="card-footer" style="width: 100%; margin-left: 0%;">
    <button class="btn btn-info" name="Submit">
      <i class="fas fa-save"></i> Save
    </button>
    <button type="reset" class="btn btn-danger">
      <i class="fas fa-undo"></i> Reset
    </button>
  </div>
</div>
</div>
</div>
</div>

</form>
</body>


</html>


