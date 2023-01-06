<?php

// Filename: login.php
// Purpose: Login interface

// Start session
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>User provide login information</title>
</head>

<body style="font-family: arial, sans-serif; background-color: lightgreen">

    <?php

    // To display error message if username and password are invalid
    if (isset($_SESSION['ERRMSG_ARR'])) {

        echo "<hl style='color:red'>Error found: ";

        for ($loop = 0; $loop < count($_SESSION['ERRMSG_ARR']); $loop++) {
            echo $_SESSION['ERRMSG_ARR'][$loop] . "! ";
        }

        echo "</hl>";
        unset($_SESSION['ERRMSG_ARR']);
    }

    ?>

    <h2>Click Login to save your session data.</h2>

    <form method="post" action="sessionHandler.php" style="font-size: l0pt">

        <strong>Username:</strong><br>
        <input type="text" name="username">
        <br>

        <strong>Password:</strong><br>
        <input type="password" name="password">
        <br><br>

        <input type="submit" value="Login" style="background-color: #F0E86C; color: navy; font-weight: bold">
        <input type="reset" value="Reset"></p>

    </form>

</body>

</html>