<?php

//CONNECT PHP TO DATABASE
$connect= mysqli_connect("localhost", "root", "", "firstdb");

  // ADDING SESSION

$_SESSION['status']=false;

// // TESTING CONNECTION

// if($connect){
// 	echo "connected successfully";
// }
// else{
// 	echo "failed to connect to database";
// }

// POSTING INPUT

if (isset($_POST['login'])){
	$email = $_POST['email'];
	$password= $_POST['password'];

	// IF STATEMENT FOR EMPTY INPUTS

	if ($email== "" || $password== ""){
		echo "Must enter email and password";
	}

	// ELSE STATEMENT FOR FILLED INPUTS

	else{
		$php= "SELECT * FROM `adminlogin` WHERE(`email`='$email' and `password`='$password')";

		// QUERY PHP

		$query= mysqli_query($connect, $php);

		// COUNT MY TABLE ROW

		$count = mysqli_num_rows($query);

		// IF COUNT IS GREATER THAN 0

		if ($count>0){
			// FETCH LOGIN DETAILS

			$row= mysqli_fetch_assoc($query);

			// START SESSION

			session_start();

			// ADDING SESSION
			$_SESSION['status']=true;

			// DIRECT USER TO PAGE YOU WANT

			header("location:admin.php");
		}
		else{
			echo "Incorrect email or password.";
		}
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
<!-- 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
 -->	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<style type="text/css">
		body{
			margin: 0px;
			padding: 0px;
			text-decoration: none;
			background-image: url(img/focus.JPG);
			background-position: center;

		
   }
    form{
      margin-top: 100px;
      background-color:#ffffff;
      border-radius: 10px;
      width: 500px;
      padding: 13px;
      text-align: center;
      margin-left: 400px;
      position: absolute;
      box-shadow: 0px 0px 50px;
    }
    .form-title{
      font-size:40px;
      font-family: fantasy;
      font-weight: ;
    }
    .side-title{
      font-size: 30px;
      font-family: serif;
      font-weight: normal;
   }
   input{
    padding: 5px;
    background-color: #AEAC8E;
    width: 300px;
    height: 40px;
    border-radius: 20px;
    border:2px solid transparent;
    transition: 1.5s;
    text-decoration: none;
    box-shadow: 0px 0px 9px;
/*    border:0px;
*/    outline: none;
 /**/

   }
   input:hover{
    border: 2px solid blue;
   }
   .fa-subway{
    color:#1276FF;
   }
   button{
    width: 280px;
    color: white;
    background-color: #1276FF;
    height: 40px;
    border-radius: 20px;
    border:2px solid transparent;
    transition: 1.5s;
    font-size:12px;
    cursor: pointer;
    padding: 5px;
    margin-left: 20px;
    outline: none;
    font-weight: bolder;
    font-family: sans-serif;
    cursor: pointer;

   }
   button:hover{
   	border: 2px solid white;
   	font-weight: bolder;
   }
   .password{
    text-decoration: none;
    color:#000;
   }
   .acc{
    text-decoration:none;
    color: #000;
}
 span{
 	border:0px;
 
 }
 div{
 	position:all; 
 }
 .fa-envelope{
 	font-size:26px;
 	color: #AEAC8E;
 }
 .fa-key{
 	font-size:26px;
 	color: #AEAC8E;
 }
 i{
 	color: #AEAC8E; 
 }
 
 


		
		
	</style>
</head>
<body>
	<form method="post">
    <h3 class="form-title"><span class="fa fa-subway"></span>&nbsp;isurfvey</h3><hr>
    <h1 class="side-title">Member Login</h1>
     
    <span class="fa fa-envelope">&nbsp;<input type="email" name="email" placeholder="Email"></span><br><br>
    <span class="fa fa-key">&nbsp;<input type="password" name="password" placeholder="Password"></span><br><br>
         


         <button type="submit" name="login">login</button></a><br><br>
		<a href="forgotpassword.php"> <i>Forgot Password?</i></a><br><br>
		<a href="" class="acc">Create your Account &#8594;</a><br> 
  </form>
 



</body>
</html>
