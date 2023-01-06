<?php

// Filename: login-successful.php
// Purpose: To display protected web page if user is valid
// Note: If you enter directly to this page, you will be checked by the authenticator, and then redirect to login-failed.html

include("authenticator.php");

echo "<h3>Congratulations, " . $_SESSION['SESS_FIRST_NAME'] . "" . $_SESSION['SESS_LAST_NAME'] . "! Login Successfully :)</h3><br>";

?>

<!DOCTYPE html>

<html>

<body>

    <h2><u>Top secret page, cannot view here without valid membership!</u></h2>

    <p>
        Blak blak blak important information.
        Blak blak blak important information.
        Blak blak blak important information.
    </p>

    <p>
        Blak blak blak important information.
        Blak blak blak important information.
        Blak blak blak important information.
    </p>

    <p>
        Blak blak blak important information.
        Blak blak blak important information.
        Blak blak blak important information.
    </p>

    <br>

    <a href="logout.php">Logout Here</a>

</body>

</html>