<?php
include('../connect/db.php');
?>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `patientschd` WHERE CONCAT(`surgeon`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `patientschd`";
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
	<img src="../assets/img/dr.png" style="width:50px; margin-right: 10px;">
	<a class="navbar-brand" style="color: white;">Doctor</a> 
	<a class="btn btn-secondary" href="logout.php" style="color: white;">Log Out</a>

</nav>
</head>
<body>
	<br>
<form action="doc.php" method="post" enctype="multipart/form-data">

	<div class="card-header" style="width: 100%; margin-left: 0%;">

		<i class="fas fa-edit"></i> PATIENT RECORD/SET A SURGEON AND ANESTHESIOLOGIST
		      <button type="submit" class="btn btn-success "  name="search" style="float:right; margin-left: 0.3%; padding: 5px 10px; margin-top:-0.3%; "><i class="fas fa-search"></i> Search</button>
		     
		<input type="text"    name="valueToSearch" placeholder="Search Surgical Doctor"  style="float:right; border: 1px solid #ccc;   padding: 5px 20px; border-radius: 4px; margin-top:-0.3%;">
	</div>


	</div>
	<div class="card" style="width: 100%;  margin-left: 0%;">
<table id="example" class="table table-striped table-bordered"  >
<thead>
<tr>
					<th style="text-align: center; font-size: 12px">ID</th>
					<th style="text-align: center; font-size: 12px">Last Name</th>
					<th style="text-align: center; font-size: 12px">First Name</th>
					<th style="text-align: center; font-size: 12px">Middle Name</th>
					<th style="text-align: center; font-size: 12px">Gender</th>
					<th style="text-align: center; font-size: 12px">Birthday</th>
					<th style="text-align: center; font-size: 12px">Age</th>
					<th style="text-align: center; font-size: 12px">Place of Birth</th>
					<th style="text-align: center; font-size: 12px">Address</th>
					<th style="text-align: center; font-size: 12px">Nationality</th>
					<th style="text-align: center; font-size: 12px">Religion</th>
					<th style="text-align: center; font-size: 12px">Anesthesia</th>
					<th style="text-align: center; font-size: 12px">Type of Surgery</th>
					<th style="text-align: center; font-size: 12px">Surgeon</th>
					<th style="text-align: center; font-size: 12px">Anesthesiologist</th>
					<th style="text-align: center; font-size: 12px">Fasting Hour</th>
					<th style="text-align: center; font-size: 12px">Admit Time</th>
					<th style="text-align: center; font-size: 12px">Operation Hour</th>
					<th style="text-align: center; font-size: 12px">Action</th>
</tr>
</thead>
<tbody>
<?php
$sql = "select * from patientschd";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)){
while($row = mysqli_fetch_assoc($result)){
?>
<?php while($row = mysqli_fetch_array($search_result)):?>
<tr>
						<td style="text-align: center; font-size: 13px"><?php echo $row['id'] ?></td>
						<td style="text-align: center; font-size: 13px"><?php echo $row['lname'] ?></td>
						<td style="text-align: center; font-size: 13px"><?php echo $row['fname'] ?></td>
						<td style="text-align: center; font-size: 13px"><?php echo $row['mname'] ?></td>
						<td style="text-align: center; font-size: 13px"><?php echo $row['gender'] ?></td>
						<td style="text-align: center; font-size: 13px"><?php echo $row['bday'] ?></td>
						<td style="text-align: center; font-size: 13px"><?php echo $row['age'] ?></td>
						<td style="text-align: center; font-size: 13px"><?php echo $row['placebday'] ?></td>
						<td style="text-align: center; font-size: 13px"><?php echo $row['address'] ?></td>
						<td style="text-align: center; font-size: 13px"><?php echo $row['nationality'] ?></td>
						<td style="text-align: center; font-size: 13px"><?php echo $row['religion'] ?></td>
						<td style="text-align: center; font-size: 13px"><?php echo $row['anesthesia'] ?></td>
						<td style="text-align: center; font-size: 13px"><?php echo $row['surgerytype'] ?></td>
						<td style="text-align: center; font-size: 13px"><?php echo $row['surgeon'] ?></td>
						<td style="text-align: center; font-size: 13px"><?php echo $row['anesthesiologist'] ?></td>
						<td style="text-align: center; font-size: 13px"><?php echo $row['fasting'] ?></td>
						<td style="text-align: center; font-size: 13px"><?php echo $row['admittime'] ?></td>
						<td style="text-align: center; font-size: 13px"><?php echo $row['operation'] ?></td>		
<td class="text-center">
<a href="editform.php?id=<?php echo $row['id'] ?>" class="btn btn-info" style=" padding: 6%;"><i class="fa fa-xs fa-user-edit"></i></a>

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