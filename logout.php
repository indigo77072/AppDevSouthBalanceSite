<!--
    SB Logout page
    Author: Will
    Filename: logout.php
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"></meta>
        <link rel="stylesheet" href="header_styles.css">
        <link rel="stylesheet" href="logout_styles.css">
        <title>South Balance - Logout</title>
        <!-- Will's guess: a logout script (PHP) will run when this webpage is loaded. -->
        
    </head>
    <body>

        <?php include 'header.php'
        // logout code adapted from:
        // https://www.oreilly.com/library/view/learning-php-mysql/9781449337452/ch21s14.html#:~:text=php%2C%20the%20logout%20page%20that,the%20top%20of%20the%20screen.
            if (isset($_SESSION['user']))
            {
                destroySession();
                echo "<p id=\"logoutMsg\">You have successfully logged out.</p>";
            }
            else echo "<p id=\"logoutMsg\">You cannot log out because you are not logged in.</p>";
        ?>

    </body>

</html>

