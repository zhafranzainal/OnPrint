<?php
// Start the session
session_start();
?>

<?php
        // Set session variables
        $_SESSION["username"] = "username";
        ?>
<?php

// //connect with mysql
$mysql = mysqli_connect("localhost", "root") or die(mysqli_connect_error());

// // to select the targeted database
mysqli_select_db($mysql, "onprint") or die(mysqli_error());

//select query
$query = mysqli_query($mysql, "SELECT id from users where username = '$username'"); //execute the query
$row = mysqli_fetch_assoc($query);
foreach ($row as $row) {
    $mysql = mysqli_query($mysql, "SELECT * FROM users WHERE id = '$row' "); //execute the query
}

?>

<?php
$mysql = mysqli_connect("localhost", "root") or die(mysqli_connect_error());

// // to select the targeted database
mysqli_select_db($mysql, "onprint") or die(mysqli_error());

if (isset($_SESSION['username'])) {
    $uname = $_SESSION['username'];

    if (isset($_POST['save_select'])) {

        $payment_methods = $_POST['payment_methods'];
        $delivery_options = $_POST['delivery_options'];

        $status = "Success";


        $dataquery = "SELECT d.id FROM delivery_options WHERE name = '$username'";
        $rt = mysqli_fetch_assoc(mysqli_query($mysql, $dataquery));
        $result = "SELECT `id` FROM `users` WHERE username = '$username'";


        if ($row = mysqli_fetch_assoc(mysqli_query($mysql, $result))) {
            $_SESSION['id'] = $row['id'];
        }
        $uid = $_SESSION['id'];

        foreach ($rt as $rt) {

            if ($row) {

                $mysql = "INSERT INTO `payment_methods`(`id`, `user_id`, `address_id`, `payment_method_id`, `order_id`, `status`, `created_at`,`updated_at`,deleted_at`)VALUES ('payment_method_id','$uid', 1, '$rt', NOW(), '$status');";
                $test = mysqli_query($mysql, $mysql);

                if ($test) {
                    echo "<script>alert('Inserted')
                                sessionHandler.php = 'paymentview.php'</script>";
                }
            } else {
                echo "error" . $row . "<br>" . $mysql->error;
            }
        }
    }
}
?>

<table align="center">

    <?php
    while ($row2 = mysqli_fetch_assoc($mysql)) {
        ?>
        <tr>
            <input type="hidden" name="id" value="<?= $row2['id']; ?>">
        </tr>

        <tr>
            <td><label for="username">Name:</label></td>
            <td><input type="text" value="<?= $row2['name'] ?>" name="username" maxlength="200" size="75"></td>
        </tr>
        <tr>
            <td><label for="phoneNo">Mobile number:</label></td>
            <td><input type="text" value="<?= $row2['mobile_no'] ?>" name="phoneNo" maxlength="7" size="7"></td>
        </tr>
        <tr>
            <td><label for="address">Address:</label></td>
            <td><textarea name="address" rows="4" cols="50"><?php echo $row2['address_id']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <?php echo "<a href=paymentedit.php?id=" . $row2['id'] . " class=button>Edit</a>"; ?>
            </td>
        </tr>
        <?php
    }

    ?>