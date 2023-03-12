<!--
    SB Login page
    Author: Hector
    Filename: about_us.php
-->

<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="login_styles.css">
</head>

<body>
  <div class="loginbox">
    <h1>Login</h1>
    <form method="POST" action="login.php">
      <p>Username</p>
      <input type="text" name="username" placeholder="Enter Username">
      <p>Password</p>
      <input type="password" name="password" placeholder="Enter Password">
      <input type="submit" name="submit" value="Login">
    </form>
  </div>
</body>

</html>
