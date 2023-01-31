<?php

// Filename: login-successful.php
// Purpose: To display protected web page if user is valid
// Note: If you enter directly to this page, you will be checked by the authenticator, and then redirect to login-failed.html

include("authenticator.php");
echo "<script>alert('Congratulations, " . $_SESSION['SESS_NAME'] . "! Login Successfully :)')</script>";

$ses = $_SESSION['SESS_MEMBER_ID'];
if(isset($_SESSION['SESS_MEMBER_ID']) && isset($_SESSION['SESS_NAME'])){
}





 $mysql = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

        // 2. Select the database named "onprint"
        mysqli_select_db($mysql, "onprint") or die(mysqli_error($mysql));

        
        //$query = "SELECT a.name, a.email, a.mobile_no, b.unit_no, b.street_name, b.residential_area, b.postal_code, c.name, d.name FROM users a,addresses b, cities c, states d WHERE a.address_id = b.id AND b.city_id = c.id AND b.state_id = d.id ORDER BY a.id";
        $query = mysqli_query($mysql,"SELECT id FROM users WHERE id = '$ses' ");
        $result = mysqli_fetch_assoc($query);
        foreach ($result as$result){
              $y = mysqli_query($mysql, "SELECT * FROM users WHERE id = '$result' ");
        }

?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="../../Styles (css)/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

    <link href="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/favicon.ico" rel="shortcut icon"
        type="image/x-icon">

</head>

<body>

    

    <div class="top-header bg-primary">
        <div class="container">
            <div class="row">

                <div class="col-md-7 mt-2">
                    <ul>
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="../(3) Printing Order/order.html">Order</a></li>
                        <li><a href="../(4) Payment/payment.html">Payment</a></li>
                        <li><a href="../(5) Order Acceptance/delivery-note.php">Delivery</a></li>
                        <li><a href="../(6) Sales and Admin/admin.html">Sales and Admin</a></li>
                    </ul>
                </div>

                <div class="col-md-5 mt-2 ">
                    <h6>Welcome to OnPrint!</h6>
                </div>

            </div>
        </div>
    </div>

    <div class="container mt-4" id="top-logo">
        <div class="row">
            <div class="col-md-2" style="right: 5%;">
                <nav class="navbar navbar-light">
                    <a class="navbar-brand" href="#">
                        <img src="../../Assets (images)/logo.png" width=auto height="50">
                    </a>
                </nav>
            </div>
            <div class="col-md-7" id="searchbar">
                <div class="input-group mt-3">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                        aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="button-addon2"><i
                                class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <hr>
    <div class="container" style="height: 30px;">
        <nav class="navbar navbar-expand-lg navbar-light" style="height: 30px;">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse pl-4" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                            aria-expanded="false"> <span> ≡ All Category</span></a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Comb Bind Notebook</a>
                            <a class="dropdown-item" href="#">Tape Bind Notebook</a>
                            <a class="dropdown-item" href="#">Certificate Printing</a>
                            <a class="dropdown-item" href="#">Thesis Hard Cover</a>
                            <a class="dropdown-item" href="#">Poster</a>
                        </div>

                    </li>

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            Campus
                        </a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">UMP Pekan</a>
                            <a class="dropdown-item" href="#">UMP Gambang</a>
                        </div>

                    </li>

                </ul>
            </div>

        </nav>

    </div>
    <hr>
    <br>

    <div class="container">
        <h2>My Account</h2>
        <br><br>
            <div class="row rounded">
                <div class="col-3 mb-4 mt-3 pt-4 pb-3 bg-light w-auto h-fit-content">
                    <div class="nav flex-column nav-pills">
                        
                        <li><a class="nav-link active" href="../(2) User/dashboard.php">Dashboard</a></li>
                    <br>
                    </div>
                    <div class="nav flex-column nav-pills">
                        
                        <li><a class="nav-link active" href="../(2) User/profile.html">Profile</a></li>
                    <br>
                    </div>
                </div>
            <div class="col-9 mt-3">
                <div class="tab-content bg-light pb-5" id="v-pills-tabContent">
                    <div class="tab-pane fade show active p-3" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        <img id="profilePic"
                            src="https://icon-library.com/images/default-user-icon/default-user-icon-8.jpg"
                            class="rounded-circle img-fluid">
                        &nbsp; &nbsp; <h5 class="d-inline-block">Neelesh D &nbsp;&nbsp;&nbsp;&nbsp;<small
                                class="text-success"><i class="fas fa-pencil-alt"></i>&nbsp;
                                Edit</small>&nbsp;&nbsp;&nbsp;&nbsp;<small class="text-danger"><i
                                    class="fas fa-times"></i>&nbsp; Remove</small></h5>

                        <br>
                        <br>
                        <hr>
                        <br>

                        <form style="border:1px solid #ccc">
                        <?php
                            while ($result2 = mysqli_fetch_assoc($y)){
                            ?>

                          <h1>Sign Up</h1>
                          <p>Please fill in this form to create an account.</p>
                              <hr>

    <label for="email"><b>Username</b></label>
    <input type="text"  name="email" value="<?=$result2['username']?>" disabled>

    <label for="psw"><b>Name</b></label>
    <input type="text"  name="psw" value="<?=$result2['name']?>" disabled>

    <label for="psw-repeat"><b>Email</b></label>
    <input type="text"  value="<?=$result2['email']?>" disabled>
    
    <label for="psw-repeat"><b>Mobile No</b></label>
    <input type="text"  name="psw-repeat" value="<?=$result2['mobile_no']?>" disabled>
    
    <?php
                        }
                     ?>


</form>
                       

                        <hr>

                        <div class="delAccount pt-3">
                            <h5 class="text-dark">Delete Account</h5>
                            <a href="" class="text-muted float-right font-weight-bold">Delete Your Account</a>
                            <p class="text-muted">By deleting your account, you will lose all your data.</p>
                        </div>
                        <hr class="mt-4"><br><br>

                        <button type="button" class="btn btn-outline-primary float-right mt-3 mb-5" data-toggle="modal"
                            data-target=".bd-example-modal-md">Save Changes</button>
                        <br>
                    </div>
                    <!-- <div class="tab-pane fade p-3" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
            
          </div> -->
                </div>
            </div>
        </div>
    </div>

    <footer class="footer pt-5 pb-5" id="footer">
        <div class="container">
            <span class="text-muted float-left">
                <p id="copyright">&copy; 2022 Section 02B GP5</p>
            </span>

            <span class="float-right">
                <p id="footerInfo"> Zhafran | Anishah | Amalin | Hamizah</p>
            </span>
        </div>
    </footer>


    <div class="modal fade bd-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edited Successfully</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Details were edited successfully.</p>
                </div>
            </div>
        </div>
    </div>

</body>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
<script src="js/script.js"></script>

<a href="logout.php">Logout Here</a>
</html>




