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

            <!-- Change Language -->
        
            <a id="a1" class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dpMLink" data-bs-toggle="dropdown" aria-expanded="false"><i ></i>&nbsp;<label>Change Language</label></a>

            <ul class="dropdown-menu" aria-labelledby="dpMLink">
                <li class="dropdown-item"><a href=""><i class="fas fa-user-graduate"></i> English </a></li>
                <li class="dropdown-item"><a href=""><i class="fas fa-chalkboard-teacher"></i> Afan Oromo</a></li>
                <li class="dropdown-item"><a href=""><i class="fas fa-chalkboard-teacher"></i> Amharic</a></li>
            </ul>
        </div>
    </div>

    
    </div>


    <!-- === cards === -->
    <section class="mt-5 padding">
                    <div class="row g-4">
                      <!--Manage Student-->
                        <div class="col-md-3">
                            <a href="a_manage_student.php" class="col-md-3" style="text-decoration: none;">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        <h4><i class="fas fa-users"></i> Manage Student</h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Manage Teachers -->

                        <a href="a_manage_teacher.php" class="col-md-3" style="text-decoration: none;">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <h4><i class="fas fa-chalkboard-teacher"></i> Manage Teacher</h4>
                                </div>
                            </div>
                        </a>

                        <!-- Manage Health Officers -->

                        <a href="a_manage_ho.php" class="col-md-3" style="text-decoration: none;">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <h4><i class="fas fa-user-graduate"></i> Manage Health Officer</h4>
                                </div>                      
                            </div>
                            
                        </a>

                        <!-- Manage Registrals -->
                        <a href="a_manage_reg.php" class="col-md-3" style="text-decoration: none;">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <h4><i class="fas fa-user-graduate"></i> Manage Registrals</h4>
                                </div>                      
                            </div>
                            
                        </a>
                    </div>

                    <br>
                    <br>



                    <div class="row g-4">
                      <!--Manage Student Affairs-->
                        <div class="col-md-3">
                            <a href="a_manage_studentaff.php" class="col-md-3" style="text-decoration: none;">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        <h4><i class="fas fa-users"></i> Manage Student Affairs</h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Manage Parents -->

                        <a href="a_manage_parent.php" class="col-md-3" style="text-decoration: none;">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <h4><i class="fas fa-chalkboard-teacher"></i> Manage Parents</h4>
                                </div>
                            </div>
                        </a>

                        <!-- Post Notice -->

                        <a href="a_post_news.php" class="col-md-3" style="text-decoration: none;">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <h4><i class="fas fa-user-graduate"></i> Post Notice</h4>
                                </div>                      
                            </div>
                            
                        </a>

                        
                    </div>
                </section>



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