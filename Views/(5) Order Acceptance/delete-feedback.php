<?php

// 1. Connect to MySQL server
$mysql = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

// 2. Select the database named "onprint"
mysqli_select_db($mysql, "onprint") or die(mysqli_error($mysql));

$complaintId = $_GET['complaintId'];
$feedbackId = $_GET['feedbackId'];

// Write SQL statement that deletes the record from table named "feedbacks"
$query = "DELETE FROM feedbacks WHERE id = '$feedbackId'";
$result = mysqli_query($mysql, $query) or die(mysqli_error($mysql));

// Write SQL statement that updates the record from table named "complaints"
$query = "UPDATE complaints SET status = 'open' WHERE id = $complaintId;";
$result = mysqli_query($mysql, $query) or die(mysqli_error($mysql));

if ($result) {
    echo "<script type='text/javascript'>
        window.location='delivery-record.php'
        </script>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($mysql);
}
