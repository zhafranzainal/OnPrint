<?php

// Filename: sessionHandler.php
// Purpose: To handle login information and create a session for that user

// Start session
session_start();

// Validation error flag
$errflag = false;

// Input validations
if ($_POST['username'] == '') {
    $errmsg_arr[] = 'Login ID is missing';
    $errflag = true;
}

if ($_POST['password'] == '') {
    $errmsg_arr[] = 'Password is missing';
    $errflag = true;
}

// If input validation occured, redirect back to the login form
if ($errflag) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
    header("location: login.php");
    exit();
}

// Connect to MySQL server
$mysql = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

// Select the database named "mydatabase"
mysqli_select_db($mysql, "mydatabase") or die(mysqli_connect_error());

// Write SQL statement that selects the record from table named "profile"
$name = $_POST['username'];
$pass = $_POST['password'];
$query = "SELECT * FROM profile WHERE username = '$name' AND password = '$pass'";

// To run SQL query in database
$result = mysqli_query($mysql, $query) or die(mysqli_error($mysql));

// Check whether the query was successful or not
if (isset($result)) {
    if (mysqli_num_rows($result) == 1) {
        //Login-Successful
        session_regenerate_id();
        $member = mysqli_fetch_assoc($result);
        $_SESSION['SESS_MEMBER_ID'] = $member['id'];
        $_SESSION['SESS_FIRST_NAME'] = $member['firstname'];
        $_SESSION['SESS_LAST_NAME'] = $member['lastname'];
        $_SESSION['STATUS'] = true;
        session_write_close();
        header("location: login-successful.php");
        exit();
    } else {
        //Login failed
        header("location: login-failed.html");
        exit();
    }
} else {
    die("Query failed");
}
