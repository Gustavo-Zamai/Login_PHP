<?php

  

if($_SERVER['REQUEST_METHOD'] == "POST"){

	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($user_name) && !is_numeric($user_name) && !empty($password)) {
		//save to database
		$user_id = random_num(20);
		$query = "insert into users(user_id, user_name, password) values('$user_id', '$user_name', '$password')";

		mysqli_query($connection, $query);

		header("Location: login.php");
		die;

	}else{
		echo "Please enter some valid information!";
	}

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>


<style type="text/css">

#text{
	height: 25px;
	width: 100%;
	border: solid thin #aaa;
	border-radius: 5px;
	padding: 4px;
}

#button{
	padding: 10px;
	width: 100px;
	color: white;
	background-color: white;
	border: none;
	align-items: center;
}	

#box{
	background-color: lightgrey;
	margin: auto;
	width: 300;
	padding: 20px;
}
</style>

<div id="box">
	<form method="post">
		<div style="font-size: 20px; margin: 10px; color: black;">Signup</div>
		
		<input id="text" type="text" name="user_name"><br><br>
		<input id="text" type="password" name="password"><br><br>
		
		<input id="button" type="submit" value="Signup"><br><br>

		<a style="color: black; font-family: 'Poppins';" href="login.php">Click To Login</a><br><br>

	</form>
</div>