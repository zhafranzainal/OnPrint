<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="../../Styles (css)/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>

    <?php

    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (!empty($_POST['name'])) {
            if (!empty($_POST['email'])) {
                if (!empty($_POST['username'])) {
                    if (!empty($_POST['password'])) {
                        if (!empty($_POST['mobile_no'])) {

                            // 1. Connect to MySQL server
                            $mysql = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

                            // 2. Select the database named "onprint"
                            mysqli_select_db($mysql, "onprint") or die(mysqli_error($mysql));

                            // 3. Write SQL statement that inserts the record into table named "users"
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $username = $_POST['username'];
                            $pass = $_POST['password'];
                            $mobileNo = $_POST['mobile_no'];

                            $unitNo = $_POST['unit_no'];
                            $streetName = $_POST['street_name'];
                            $residentialArea = $_POST['residential_area'];
                            $postalCode = $_POST['postal_code'];

                            $query = "INSERT INTO addresses VALUES('', '$unitNo', '$streetName', '$residentialArea', '$postalCode', '30', '1', NULL, NULL, NULL);";
                            $result = mysqli_query($mysql, $query);

                            $query = "INSERT INTO users VALUES('', '1', '$name', '$email', NULL, '$username', '$pass', '$mobileNo', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)";

                            // To run SQL query in database
                            $result = mysqli_query($mysql, $query);

                            // Check whether the insert was successful or not
                            if ($result) {
                                echo ('Your are registered');
                            } else {
                                die("Insert failed");
                            }
                        } else {
                            $error = "Please input mobile number!";
                        }
                    } else {
                        $error = "Please input password!";
                    }
                } else
                    $error = "Please input username!";
            } else
                $error = "Please input email!";
        } else
            $error = "Please input full name!";
    }

    ?>

    <div class="login-box">

        <h2>Register</h2>

        <form method="post" action="register.php" style="font-size: l0pt">

            <div class="user-box">
                <input type="text" name="name" required="">
                <label>Full Name</label>
            </div>

            <div class="user-box">
                <input type="email" name="email" required="">
                <label>Email</label>
            </div>

            <div class="user-box">
                <input type="text" name="username" required="">
                <label>Username</label>
            </div>

            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Password</label>
            </div>

            <div class="user-box">
                <input type="text" name="mobile_no" required="">
                <label>Mobile No</label>
            </div>

            <div class="user-box">
                <input type="text" name="unit_no" required="">
                <label>Unit No</label>
            </div>

            <div class="user-box">
                <input type="text" name="street_name" required="">
                <label>Street Name</label>
            </div>

            <div class="user-box">
                <input type="text" name="residential_area" o required="">
                <label>Residential Area</label>
            </div>

            <div class="user-box">
                <input type="text" name="postal_code" required="">
                <label>Postal Code</label>
            </div>

            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <button type="submit">REGISTER</button>
            </a>

        </form>

        <a href="login.php" class="float-right text-primary">Already a Member? Login</a>

    </div>

</body>

</html>