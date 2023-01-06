<?php

// Filename: authenticator.php
// Purpose: To verify user identity in accessing this website
// Note: Include this file in every protected page to avoid unauthorized user enter

// Start session
session_start();

// Check whether the login status is true or not
if (!isset($_SESSION['STATUS']) || !$_SESSION['STATUS'] == true) {
    header("location: login-failed.html");
    exit();
}
