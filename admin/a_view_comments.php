<?php

include "../db.php";
SESSION_START();

if(!isset($_COOKIE['logged'])){
    
    header('location: ../admin_login.php');
}


// $q_teacher = "SELECT * FROM teacher";
// $q_teacher_result = mysqli_query($con,$q_teacher);
// $teacher_count = mysqli_num_rows($q_teacher_result);

// $q_student = "SELECT * FROM student";
// $q_student_result = mysqli_query($con,$q_student);
// $student_count = mysqli_num_rows($q_student_result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ADMAS UNIVERSITY</title>


    <link rel="icon" href="img/core-img/ADMAS-5.jpg">

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

        <img class="normal_logo" src="https://www.admasuniversity.com/wp-content/uploads/2019/08/Logoo.png"
            alt="Admas University" title="Admas University">
        <a href="#default" class="logo"></a>
        <div class="header-right dropdown myac">
            <a href="home.php">Home</a>
            <a href="news.php">News</a>
            <a href="contact.php">Contact us</a>
            <a href="about.php">About</a>
            <a href="../admin_login.php">Logout</a>
        </div>
    </div>    
    </div>



    <center>

    <br>
    <br>

    <h2> Comments </h4>

    <br>
    <br>
    


           <?php

// Database Update PHP Code 

    include '../db.php';


  //////// Request from Manage student Page //////

        $array = array();
        $q = "SELECT * FROM comment";
        $q_result = mysqli_query($con,$q);

        while ($r = mysqli_fetch_assoc($q_result )){
            echo $r['comments'];
            echo "<hr> <br>";
        
        }
?>                

    </center>







   
    
    
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