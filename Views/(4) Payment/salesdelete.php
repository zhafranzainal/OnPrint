<?php
$mysql = mysqli_connect("localhost", "root") or die(mysqli_connect_error());

// // to select the targeted database
mysqli_select_db($mysql, "onprint") or die(mysqli_connect_error());

if (isset($_GET['id'])) {
	$paymentId = $_GET['id'];
	$query = "DELETE FROM `receipts` WHERE id = '$paymentId'";
	$run = mysqli_query($mysql, $query);
	if ($run) {
		header('location:salesreceipt.php');
	} else {
		echo "Error: " . mysqli_error($mysql);
	}
}
?>