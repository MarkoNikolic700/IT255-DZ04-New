<?php 
//action.php
session_start();
$connect = mysqli_connect("localhost", "root", "registration");
if (isset($_POST["username"])) {
	# code...
	$query = "
	SELECT * FROM users
	WHERE username = '".$_POST["username"]."'
	AND password = '".$_POST["password"]."'
	";
	$result = mysqli_query($connect, $query);
	if (mysqli_num_rows($result) > 0 ) {
		$_SESSION["username"] = $_POST["username"];
		echo "yes";
	}
	else{
		echo "No";
	}
}
if (isset($_POST["action"])) {
	unset($_SESSION["username"]);
	# code...
}
?>