<?php

$dataBaseHost = "localhost";
$dataBaseUser = "root";
$dataBasePassword = " ";
$dataBaseName = "login_sample_db";

if(!$connection = mysqli_connect($dataBaseHost, $dataBaseUser, $dataBasePassword, $dataBaseName));{
	die("Failed to connect!");

}



