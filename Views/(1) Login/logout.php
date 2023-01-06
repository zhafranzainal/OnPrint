<?php

// Filename: logout.php
// Purpose: To logout from the website and destroy the self identity

// Start session
session_start();

// Unset the variables stored in session
session_destroy();

?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/l999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Logged Out</title>
    <link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <hl>
        <center>See you again, bye!</center>
    </hl>
    <h4>
        <center>You have been logged out.</center>
    </h4>
    <p>
        <center>Click here to <a href="login.php">Login</a></center>
    </p>
</body>

</html>