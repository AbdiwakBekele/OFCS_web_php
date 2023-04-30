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

        <h3 style="color: white" >Jimma Community School</h3>
        <a href="#default" class="logo"></a>
        <!-- Users  -->
        <div class="header-right dropdown myac">
            <a class="active" href="home.php">Home</a>
            <a id="a1" class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dpMLink" data-bs-toggle="dropdown" aria-expanded="false"><i ></i>&nbsp;<label>Users</label></a>

            <ul class="dropdown-menu" aria-labelledby="dpMLink">
                <li class="dropdown-item"><a href="admin_login.php"><i class="fas fa-user-graduate"></i> Admin </a></li>
                <li class="dropdown-item"><a href="student_login.php"><i class="fas fa-chalkboard-teacher"></i> Student</a></li>
                <li class="dropdown-item"><a href="finance_login.php"><i class="fas fa-chalkboard-teacher"></i> Health Officer</a></li>
                <li class="dropdown-item"><a href="finance_login.php"><i class="fas fa-chalkboard-teacher"></i> Teacher</a></li>
                <li class="dropdown-item"><a href="finance_login.php"><i class="fas fa-chalkboard-teacher"></i> Student Affairs</a></li>
                <li class="dropdown-item"><a href="finance_login.php"><i class="fas fa-chalkboard-teacher"></i> Registral</a></li>
            </ul>
        

            <!-- Change Language -->
        
            <a id="a1" class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dpMLink" data-bs-toggle="dropdown" aria-expanded="false"><i ></i>&nbsp;<label>Change Language</label></a>

            <ul class="dropdown-menu" aria-labelledby="dpMLink">
                <li class="dropdown-item"><a href=""><i class="fas fa-user-graduate"></i> English </a></li>
                <li class="dropdown-item"><a href=""><i class="fas fa-chalkboard-teacher"></i> Afan Oromo</a></li>
                <li class="dropdown-item"><a href=""><i class="fas fa-chalkboard-teacher"></i> Amharic</a></li>
            </ul>
        </div>
    </div>



    <center>
        <div style="padding-left: 50px; padding-top: 3px; max-width: 2000px;">
            <div class="image_slider" style="margin-top: 4px; padding-top: 0px; ">
                <div style="max-width:1000px">
                    <img class="mySlides" src="images/jucs.jpg" style="width: 1200px">
                    <img class="mySlides" src="images/jucs.jpg" style="width:1200px">
                    <img class="mySlides" src="images/jucs.jpg" style="width:1000px">
                </div>

            </div>
        </div>
        </div>
    </center>
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) { myIndex = 1 }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 3000); // Change image every 2 seconds
        }
    </script>
    
    <h2 style="margin-left: 400px;">WELCOME TO JIMMA COMMUNITY SCHOOL</h2>
    </div>




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