<?php

// Filename: login.php
// Purpose: Login interface

// Start session
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="../../Styles (css)/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>

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

    <div class="login-box">

        <h2>Login</h2>

        <form method="post" action="sessionHandler.php" style="font-size: l0pt">

            <div class="user-box">
                <input type="text" name="username" required="">
                <label>Username</label>
            </div>

            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Password</label>
            </div>

            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <button type="submit">LOGIN</button>
            </a>

        </form>

        <a href="register.php" class="float-right text-primary">Not a Member? Register</a>

    </div>

</body>

</html>