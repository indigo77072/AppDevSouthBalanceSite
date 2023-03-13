<!--
    SB Rep Login_Process page
    Author: Indigo
    Filename: login_Process.php
-->

<?php 
	include('database.php');
	$uname = $_POST['username'];
	$pwd = $_POST['password'];
	$query="SELECT * FROM accounts WHERE Username='$uname' and Password='$pwd'";
	echo $query;
	$results=mysqli_query($conn,$query);
	print_r($results);
	
	if($results->num_rows > 0){
		$user = mysqli_fetch_assoc($results);
		$_SESSION["user"] = $user["Username"];
		$_SESSION["id"] = $user["Sales_Person_ID"];
		header("location: index.php");
	} else {
		$wrong_login="You have entered the wrong username/password. Try again";
		header("location: login.php?msg=$wrong_login");
	}
?>