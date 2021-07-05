
<?php
require_once('../connect/db.php');
if(isset($_GET['delete'])){
$id = $_GET['delete'];
$sql = "select * from doctorlogin where id = ".$id;
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
$row = mysqli_fetch_assoc($result);
$sql = "delete from doctorlogin where id=".$id;
if(mysqli_query($conn, $sql)){
header('location:createdoc.php');
}
}
}
?>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `doctorlogin` WHERE CONCAT(`id`,`Username`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `doctorlogin`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "surgery");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../assets/css/fontawesome/fontawesome/css/all.css">
<link rel="shortcut icon" type="image/x-icon" href="../icon.ico">

<title>Surgery Scheduling</title>
<div class="jumbotron text-center" style="margin-bottom: 0">
  <h1>SURGERY SCHEDULING</h1>
</div>
<nav class="navbar navbar-expand-sm bg-info">
    <img src="../assets/img/admin.png" style="width:50px; margin-right: 10px;">
  <a class="navbar-brand" style="color: white;">Admin</a> 
  <a class="btn btn-secondary" href="admin.php" style="color: white; margin-right: 0.3%">Home</a>
  <a class="btn btn-secondary" href="createadmin.php" style="color: white; margin-right: 0.3%">Create Admin Account</a>
  <a class="btn btn-secondary" href="createdoc.php" style="color: white; margin-right: 0.3%">Create Doctor Account</a>
  <a class="btn btn-secondary" href="logout.php" style="color: white;">Log Out</a>

</nav>
</head>
<body>
  <br>
<form action="createdoc.php" method="post" enctype="multipart/form-data">

  <div class="card-header" style="width: 50%; margin-left: 25%;">

    <i class="fas fa-edit"></i> DOCTOR ACCOUNT RECORD
      <a class="btn btn-primary" href="adddocform.php" style="float:right; margin-left: 0.3%; padding: 5px 10px; margin-top:-0.3%;"><i class="fa fa-user-plus"></i></a></li>

          <button type="submit" class="btn btn-success "  name="search" style="float:right; margin-left: 0.3%; padding: 5px 10px; margin-top:-0.3%; "><i class="fas fa-search"></i> Search</button>
         
    <input type="text"    name="valueToSearch" placeholder="Search"  style="float:right; border: 1px solid #ccc;   padding: 5px 20px; border-radius: 4px; margin-top:-0.3%;">
  </div>


  </div>
  <div class="card" style="width: 50%;  margin-left: 25%;">
<table id="example" class="table table-striped table-bordered"  >
<thead>
<tr>
           <th style="text-align: center; font-size: 12px">ID</th>
          <th style="text-align: center; font-size: 12px">Username</th>
          <th style="text-align: center; font-size: 12px">Password</th>
          <th style="text-align: center; font-size: 12px">Action</th>
</tr>
</thead>
<tbody>
<?php
$sql = "select * from doctorlogin";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)){
while($row = mysqli_fetch_assoc($result)){
?>
<?php while($row = mysqli_fetch_array($search_result)):?>
<tr>
             <td style="text-align: center; font-size: 13px"><?php echo $row['id'] ?></td>
            <td style="text-align: center; font-size: 13px"><?php echo $row['Username'] ?></td>
            <td style="text-align: center; font-size: 13px"><?php echo $row['Password'] ?></td>  
<td class="text-center">
<a href="editdocform.php?id=<?php echo $row['id'] ?>" class="btn btn-success" style=" padding: 3%;padding-left: 4%;"><i class="fa fa-xs fa-user-edit"></i></a>
<a href="createdoc.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger" style=" padding: 3%; padding-left: 5%;padding-right: 5%;"onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-xs fa-trash-alt"></i></a>

</td>
</tr>
<?php endwhile;?>
<?php
}
}
?>
</tbody>

</table>
</div>
</form>
<script src="js/bootstrap.min.js" charset="utf-8"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#example').DataTable();
} );
</script>
</body>
</html>