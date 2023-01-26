<!--
display.php
To display all information of database
-->

<html>

<head>
	<title>Order</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body style="background-color: #FFFFFF; color: #000000;">

	<ol>

		<?php

		include("dbase.php");

		$query = "SELECT * FROM orders";
		$result = mysqli_query($mysql, $query);

		if (mysqli_num_rows($result) > 0){
            // output data of each row
            while($row = mysqli_fetch_assoc($result)){
            $id = $row["id"];
            $outlet_id = $row["outlet_id"];
            $package_id = $row["package_id"];
            $delivery_option_id = $row["delivery_option_id"];
            $document_file = $row["document_file"];
            $quantity = $row["quantity"];
            $total_price = $row["total_price"];
            $point = $row["point"];
            $status = $row["status"];
            $qr_code = $row["qr_code"];
            $created_at = $row["created_at"];
            $updated_at = $row["updated_at"];
            $deleted_at = $row["deleted_at"];
            ?>
            <li>
            Outlet : <?php echo $outlet_id; ?><br>
            Package : <?php echo $package_id; ?><br>
            Quantity / Point : <?php echo "$quantity / $point"; ?><br>
            Document File : <?php echo nl2br($document_file); ?><br>
            Tindakan : <a href="update.php?id=<?php echo $id; ?>">Update</a> /  <a href="delete.php?id=<?php echo $id; ?>">Delete</a><br>
            </li>
		<?php
			}
		} else {
			echo "0 results";
		}
		?>

	</ol>

	<div align="center">
		[ <a href="index.php">Balik ke Halaman Utama</a> | <a href="create.html">Tambah Buku Pelawat</a> ]
	</div>

</body>

</html>