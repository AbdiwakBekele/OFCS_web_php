<?php

include "../db.php";
SESSION_START();

if(!isset($_COOKIE['logged'])){
    
    header('location: ../admin_login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Jimma Community School</title>


    <link href="style.css" rel="stylesheet">

    <link href="css/responsive/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/Logo-Icons.png"/>
    <link rel="stylesheet" type="text/css" href="icon/svg-with-js/css/fa-svg-with-js.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
        .header {
            background-color: #0082e6;
            padding: 30px 15px;
            margin-top: 10px;
            position: absolute;
            margin-left: 5px;
            top: 26px;
            width: 100%;
            background-repeat: no-repeat;
        }


        .header a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }


        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }


        .header a:hover {
            background-color: #ddd;
            color: black;
        }


        .header a.active {
            background-color: dodgerblue;
            color: white;
        }


        .header-right {
            float: right;
        }

        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }

            .header-right {
                float: none;
            }
        }

         
    </style>

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="admas-reg"></div>
    </div>


    <div class="top_header_area">
        <div class="container">
            <div class="row">
                <div class="col-5 col-sm-6">
                    <!--  Top Social bar start -->
                    <div class="top_social_bar">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!--  Login Register Area -->

            </div>
        </div>
    </div>

    <br><br>
    <br><br>
    <br><br>


    <div class="header">

        <h3 style="color: white" > Jimma Community School </h3>
        <a href="#default" class="logo"></a>
        <div class="header-right dropdown myac">

            <a href="../admin_login.php">Logout</a>
                

        </div>
    </div>    
    </div>





            <!------- studentaff Registration Form ------->

            <br>
<form class="was-validated bg-light border shadow p-3" action="a_add_studentaff.php" method="POST" enctype="multipart/form-data" name="form">

<!-- Database Insertion PHP Code -->
<?php
    include '../db.php';    
    
    if(isset($_POST['Submit'])){
        
        $studentaff_fullname = $_POST['studentaff_fullname'];
        $studentaff_email = $_POST['studentaff_email'];
        $studentaff_phone = $_POST['studentaff_phone'];
        $studentaff_password = md5($_POST['studentaff_password']);
        $confirm_studentaff_password =  md5($_POST['confirm_studentaff_password']);
        
        if($studentaff_password == $confirm_studentaff_password){
        
            $query = "INSERT INTO studentaff (studentaff_fullname,  studentaff_email, studentaff_phone, studentaff_password)
                                VALUES ('$studentaff_fullname', '$studentaff_email', '$studentaff_phone', '$studentaff_password')";

            if(mysqli_query($con, $query)){
                $msg = "You have Successfully Add a Student Affairs!";
                echo $msg;
            }
            
        }else{
            $msg = "Password Don't match";
            echo $msg;
        }
    }
        
        $con->close();
    ?>  

    <!-- Full Name Input -->
    <br>
        <div class="row mt-3">
            <!-- Full Name Input -->
            <div class="form-group mt-2 col-md-6 col-sm-12">
                <label for="email"><h6><b><i class="fas fa-envelope"></i> Full Name</b></h6></label>
                <input type="text" class="form-control" name="studentaff_fullname" id="email" placeholder="Enter Full Name" required>
                        <div class="valid-feedback">good</div>
            </div>
        </div>

                
        <div class="row mt-3">
            <!-- address Input -->
            <div class="form-group mt-2 col-md-6 col-sm-12">
                <label for="email"><h6><b><i class="fas fa-envelope"></i> Email</b></h6></label>
                <input type="text" class="form-control" name="studentaff_email" id="email" placeholder="Enter Email"  required>
                        <div class="valid-feedback">good</div>
            </div>
        </div>

        <div class="row mt-3">
            <!-- Phone Input -->
            <div class="form-group mt-2 col-md-6 col-sm-12">
                <label for="email"><h6><b><i class="fas fa-envelope"></i> Phone No</b></h6></label>
                <input type="phone" class="form-control" name="studentaff_phone" id="email" placeholder="Enter Phone Number" required>
                        <div class="valid-feedback">good</div>
            </div>
        </div>

        
        

    <div class="row mt-3">
        <!-- Password Input -->
        <div class="form-group mt-2 col-md-6 col-sm-12">
            <label for="email"><h6><b><i class="fas fa-envelope"></i> Password</b></h6></label>
            <input type="password" class="form-control" name="studentaff_password" id="email" placeholder="Enter Password" required>
                    <div class="valid-feedback">good</div>  
        </div>

        <!-- Confirm Password Input -->
        <div class="form-group col-md-6 col-sm-12">
            <label for="mob_no" class="form-label"><h6><b><i class="fas fa-phone"></i> Confirm Your Password</b></h6></label>
            <input type="password" class="form-control" name="confirm_studentaff_password" for="mob_no" placeholder="Confirm Your Password" maxlength="10" required>

                    <div class="valid-feedback">good</div> 
        </div>
    </div>

<div class="row">
    <div class="col-md mt-3 mb-3">
        <button type="submit" name="Submit" class="btn btn-primary btn-large col-md-12" value="Submit">Add Student Affairs</button>
    </div> 
</div>    

</form>










    
    
    
    
                <!-- Jquery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>


    <script src="icon/svg-with-js/js/fontawesome-all.js"></script>       
    <script src="js/bootstrap.bundle.min.js"></script>   
    <script src="js/main.js"></script>
</body>