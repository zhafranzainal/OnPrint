<!--
edit.php
Interface of update data
-->

<?php

include("dbase.php");

$idURL = $_GET['id'];

$query = "SELECT * FROM order WHERE id = '$idURL'";
$result = mysqli_query($mysql, $query) or die("Could not execute query in edit.php");
$row = mysqli_fetch_assoc($result);

    $id = $row['id'];
	$outlet_id = $row['outlet_id'];
	$package_id = $row['package_id'];
	$delivery_option_id = $row['delivery_option_id'];
	$document_file = $row['document_file'];
	$quantity = $row['quantity'];
    $total_price = $row['total_price'];
    $point = $row['point'];
    $status = $row['status'];
    $qr_code = $row['qr_code'];
    $created_at = $row['created_at'];
    $updated_at = $row['updated_at'];
    $deleted_at = $row['deleted_at'];

//@mysql_free_result($result);

?>

<html>

<head>
    <title>Order</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body style="background-color: #FFFFFF; color: #000000;">

    <form method="post" action="update.php">

        Outlet:
        <input type="text" name="nama" size="40" value="<?php echo $outlet_id; ?>">
        <br>

        Package:
        <input type="text" name="email" size="25" value="<?php echo $package_id; ?>">
        <br>

        Quantity: <br>
        <textarea name="komen" cols="30" rows="8"><?php echo $quantity; ?></textarea>
        <br><br>

        <input type="hidden" name="id" value="<?php echo $idURL; ?>">

        <input type="submit" value="Ubah">
        <input type="reset" value="Semula">
        <br>

    </form>
    <hr>

    <div align="centre">
        [ <a href="display.php">Balik ke Paparan</a> | <a href="index.php">Balik ke Halaman Utama</a> | <a href="create.html">Tambah Buku Pelawat</a> ]
    </div>

</body>

</html>