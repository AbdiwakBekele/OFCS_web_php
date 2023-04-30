<?php

include "../db.php";
SESSION_START();

if(!isset($_COOKIE['logged'])){
    
    header('location: ../student_login.php');
}


if(isset($_SESSION['email'])) { 
    $student_email = $_SESSION['email']; 
    
            $array = array();
            $q = "SELECT * FROM students WHERE student_email = '$student_email'";
            $q_result = mysqli_query($con,$q);
    
            while ($r = mysqli_fetch_assoc($q_result )){
            $array['student_id'] = $r['id'];
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

        <h3> Jimma Community School </h3>
        <a href="#default" class="logo"></a>
        <div class="header-right dropdown myac">
            <a href="../student_login.php">Logout</a>

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

                        <!-- View News -->

                        <a href="s_view_news.php" class="col-md-2" style="text-decoration: none;">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <h4><i class="fas fa-user-graduate"></i> View Notices</h4>
                                </div>                      
                            </div>
                            
                        </a>

                        <!-- View Grade-->
                        <a href="s_view_grade.php?id=<?php echo $array['student_id']; ?>" class="col-md-2" style="text-decoration: none;">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <h4><i class="fas fa-user-graduate"></i> View Grade</h4>
                                </div>                      
                            </div>
                            
                        </a>


                        <!-- View Status-->
                        <a href="s_view_status.php?id=<?php echo $array['student_id']; ?>" class="col-md-2" style="text-decoration: none;">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <h4><i class="fas fa-user-graduate"></i> View Status</h4>
                                </div>                      
                            </div>
                            
                        </a>


                    </div>
                </section>

<?php 

}

?>

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