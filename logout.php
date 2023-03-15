<!--
    SB Logout page
    Author: Will
    Filename: logout.php
-->

<!--<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"></meta>
        <link rel="stylesheet" href="header_styles.css">
        <link rel="stylesheet" href="logout_styles.css">
        <title>South Balance - Logout</title>
        Will's guess: a logout script (PHP) will run when this webpage is loaded.
        
    </head>
    <body> -->

        <!-- <php/* include 'header.php';
        // logout code adapted from:
        // https://www.oreilly.com/library/view/learning-php-mysql/9781449337452/ch21s14.html#:~:text=php%2C%20the%20logout%20page%20that,the%20top%20of%20the%20screen.
            if (isset($_SESSION['user']))
            {
                destroySession();
                echo "<p id=\"logoutMsg\">You have successfully logged out.</p>";
            }
            else echo "<p id=\"logoutMsg\">You cannot log out because you are not logged in.</p>";*/
        ?>

    </body>

</html> -->

<?php
//indigo's reccomendation for the php code running correctly
   /*         if(!isset($_SESSION['user'])){
                header("Location: login.php"); // We will put this code at the top of every page but the login page. Makes sure that someone is logged in before being able to access any other pages.
            }
     if (isset($_SESSION['user'])) //sees if a user is logged in. 
     {
         destroySession(); //if the user is looged in the destroy the session so that nobody is loggef in. 
         echo "<p id=\"logoutMsg\">You have successfully logged out.</p>"; // I will have to research how to pass this message to the login.php page
         header("Location:login.php");

     }
     else echo "<p id=\"logoutMsg\">You cannot log out because you are not logged in.</p>"; */
     ?>
<?php
include("database.php");
unset($_SESSION['id']);
session_destroy();
header("location:login.php");
?>

