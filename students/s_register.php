<?php

include "../db.php";
SESSION_START();

if(!isset($_COOKIE['logged'])){
    
    header('location: ../student_login.php');
}



if(isset($_SESSION['email'])) { 
    $student_email = $_SESSION['email']; 
    
            $array = array();
            $q = "SELECT * FROM student WHERE student_email = '$student_email'";
            $q_result = mysqli_query($con,$q);
    
            while ($r = mysqli_fetch_assoc($q_result )){
            $array['student_id'] = $r['student_id'];
            }


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
            <a href="../student_login.php">Logout</a>
                

        </div>
    </div>
    </div>



    <form action="s_register.php" method="POST" class="p-4 bg-light">
            <?php 
            include '../db.php';
                if(isset($_POST['Submit'])){
                    $department = $_POST['department'];
                    $class_semester = $_POST['class_semester'];
                    $class_year = $_POST['class_year'];
                    $student_id = $_POST['student_id'];

                    
                    if($department != 'Choose...' && $class_semester != 'Choose...' && $class_year != 'Choose...'){


                        $query_course = "SELECT * FROM courses WHERE course_year = '$class_year' AND course_semester = '$class_semester' ";
                        $q_course_result = mysqli_query($con,$query_course);
                        $count = 0;

                        while ($r = mysqli_fetch_assoc($q_course_result)){
                            $course_id = $r['courses_id'];

                            $query = "INSERT INTO result (student_id, course_id)
                                                    VALUES ('$student_id', '$course_id')";

                            if(mysqli_query($con, $query)){

                                $count ++;
                            }
                        
                        } 

                        if($count > 0){
                            $msg = "You have Successfully Registered for the Year!";
                            echo $msg;
                        }




                    }

                    


                        
                }
            
            
            ?>

                <!------  Select Department ------->
                <div class="row mt-3 mb-3">

                    <div class="form-group col-md">
                    <label for="select_class"><h6>Select Department</h6></label>

                    <select name="department"class='form-control' id='select_class'>
                        <option selected>Choose...</option>
                        <option >Computer Science</option>
                        <option >Accounting</option>
                        <option >Business Managment</option>
                    </select>          
                </div>


                <!------  Select Year ------->
                <div class="row mt-3 mb-3">

                    <div class="form-group col-md">
                    <label for="select_class"><h6>Select Class Year</h6></label>

                    <select name="class_year"class='form-control' id='select_class'>
                        <option selected>Choose...</option>
                        <option value="1" >Year 1</option>
                        <option value="2" >Year 2</option>
                        <option value="3" >Year 3</option>
                        <option value="4" >Year 4</option>
                    </select>          
                </div>


                            <!------  Select Semester ------->
                            <div class="row mt-3 mb-3">

                                <div class="form-group col-md">
                                <label for="select_class"><h6>Select Semester</h6></label>

                                <select name="class_semester"class='form-control' id='select_class'>
                                    <option selected>Choose...</option>
                                    <option value="1" >Semester 1</option>
                                    <option value="2" >Semester 2</option>
                                </select>          
                                </div>

            

            </div> 

            <div class="row">
        <div class="col-md mt-3 mb-3">
            <input type="hidden"  name="student_id" value="<?php echo $array['student_id']; ?>" >
            <button type="submit" name="Submit" class="btn btn-primary btn-large col-md-12" value="Submit">Assign Student</button>
        </div> 
    </div> 
    </form>


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