
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../assets/css/fontawesome/fontawesome/css/all.css">
<link rel="shortcut icon" type="image/x-icon" href="../icon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Surgery Scheduling</title>
</head>
<div class="jumbotron text-center" style="margin-bottom: 0">
	<h1>SURGERY SCHEDULING</h1>
</div>
<nav class="navbar navbar-expand-sm bg-info">
  <img src="../assets/img/admin.png" style="width:50px; margin-right: 10px;">
   <a class="navbar-brand" style="color: white;">Admin Login Form</a>
 <a class="btn btn-secondary" href="../index.php" style="color: white;">Home</a>

</nav>
<br>

<body>


<form action="login.php" method="POST">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-7 col-lg-5 mx-auto">
        <div class="card my-5">
          <div class="card-body">

    <p class="h4 mb-4">Admin Login</p>

    <!-- Name -->
    <input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="User Name" name="uname" required>

    <!-- Email -->
    <input type="password" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="Password" name="pass" required>

    <!-- Sign in button -->
    <button class="btn btn-info btn-block" type="submit">Login</button>



          </div>
        </div>
      </div>
    </div>
  </div>
</form>
		    


</body>

</html>