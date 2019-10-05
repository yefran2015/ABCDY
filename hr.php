<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">-->
	 <link rel="stylesheet" href="./design/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 75%;
		}

		td, th {
		  border: 1px solid #dddddd;
		  text-align: center;
		  padding: 8px;
		}

		tr:nth-child(even) {
		  background-color: #dddddd;
		}
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to the HR Page.</h1>
		<br><br>
		<table align="center">
		  <tr>
			<th>Report Name</th>
			<th>Link To Training</th>
		  </tr>
		  <tr>
			<td>Employees Training Past Due</td>
			<td> <a href="">Click here to view the report</a> </td>
			</tr>
			<td>Up Comming Training</td>
			<td> <a href="">Click here to view the report</a> </td>
			</tr>
			<tr>
			<td>Create New Training</td>
			<td> <a href="./addNewTraining.php"  style="color:red;">Click here to start creation of new training</a> </td>
			</tr>
		</table>
    </div>
    <p>

        <a href="sign_out.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>