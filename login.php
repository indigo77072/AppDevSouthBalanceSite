<!--
    SB Rep Login page
    Author: Hector
    Filename: login.php
-->
<?php
include("database.php");
$wrong_login = "";
if(isset($_GET["msg"])){
	$wrong_login=$_GET["msg"];
  echo $wrong_login;
  $wrong_login="";
}
$must_login = "";
if(isset($_GET["msg2"])){
	$must_login=$_GET["msg2"];
  echo $must_login;
  $must_login="";
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="login_styles.css">
</head>


<body>
  <h1 class="title">South Balance Online Store</h1>
  <div class="loginbox">
    <h1>Login</h1>
    <form method="POST" action="login_Process.php">
      <p>Username</p>
      <input type="text" name="username" placeholder="Enter Username" >
      <p>Password</p>
      <input type="password" name="password" placeholder="Enter Password">
      <input type="submit" name="submit" value="Login">
    </form>
  </div>
</body>

</html>
