<?php

$connect= mysqli_connect("localhost", "root", "", "firstdb");
 // DENYING ACCESS TO PAGE WITHOUT LOGIN
 session_start();
 if ($_SESSION['status']!= true) {
	header("location:phpclass.php");
}
if (isset($_POST['logout'])) {
    session_destroy();
    header("location:phpclass.php");

}


?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<style type="text/css">
		body{
			margin: 0px;
			padding: none;
			background: grey;
		}
		nav{
			padding: 10px;
			text-align: center;
			background: blue;
		}
		b{
			font-size: 25px;
		}
		button{
			background: red;
			padding: 5px;
			color: white;
			float: right;
			margin-top:-25px;
		}
	</style>
</head>
<body>
	<nav>
		<b>ADMIN PAGE</b>
		<form method="post">
			<button type="submit" name="logout">Logout</button>
		</form>
		
	</nav>

</body>
</html>