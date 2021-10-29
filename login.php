<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){

	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($user_name) && !is_numeric($user_name) && !empty($password)) {
		//read from database
		$query = "select * from users where user_name = '$user_name' limit 1";


		$result = mysqli_query($connection, $query);

		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {
				$user_data = mysqli_fetch_assoc($result);
			

			if ($user_data['password'] == $password) {
				$_SESSION['user_id'] = $user_data['user_id'];
				header("Location: index.php");
				die;

			}
		}
	}

		echo "Please enter some valid information!";

	}else{
		echo "Please enter some valid information!";
	}

}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
		<div style="font-size: 20px; margin: 10px; color: black;">Login</div>
		
		<input id="text" type="text" name="user_name"><br><br>
		<input id="text" type="password" name="password"><br><br>
		
		<input id="button" type="submit" value="Login"><br><br>

		<a style="color: black; font-family: 'Poppins';" href="signupp.php">Click To Signup</a><br><br>

	</form>
</div>



</body>
</html>