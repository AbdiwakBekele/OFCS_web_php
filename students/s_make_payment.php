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


    <center>


<?php

// Database Update PHP Code 


if(isset($_POST['Submit'])){
    $student_id = $_POST['student_id'];
    $month = $_POST['payment_month'];

    $payment_name = $_FILES['payment']['name'];
    $target_dir = "payments/";
    $target_file = $target_dir . basename($_FILES["payment"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Valid file extensions
    $extensions_arr = array("pdf","docx","zip","rar", "png", "jpeg", "jpg");
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){
    // Insert record

    // Upload file
    move_uploaded_file($_FILES['payment']['tmp_name'],$target_dir.$payment_name);
    }

    if($month != "Choose..."){
        $query = "INSERT INTO payment (student_id, month, payment_photo)
                                                VALUES ('$student_id', '$month', '$payment_name')";

        if(mysqli_query($con, $query)){
            $msg = "You have Successfully Uploaded a Payment Receipt!";
            echo $msg;
        } 
    }else{
        echo "<br><br> <h4>Please Verify your inputs....</h4>";
    }
    
     
    
}

        ?>           

        <form class="was-validated bg-light border shadow p-3" action="s_make_payment.php" method="POST" enctype="multipart/form-data" name="form">

                <!-- Upload Receipt  -->
                <div class="row mt-3">
                    <div class="form-group col-md-12">
                        <label for="payment" class="form-label"><h6><b><i class="fas fa-user"></i> Upload Payment Receipt</b></h6></label>
                        <input type="file" class="form-control" name="payment" id="payment" placeholder="Upload Material" required>

                                <div class="valid-feedback">good</div>
                    </div>
                </div>


                <!-- Month Receipt  -->
                <div class="row mt-3">
                    <div class="form-group col-md-12">
                        <label for="payment_month" class="form-label"><h6><b><i class="fas fa-user"></i> Payment Month</b></h6></label>
                        <select class="form-control" name="payment_month" id="payment_month"  required> 
                            <option value="Choose..."> Choose... </option>
                            <option value="January"> January </option>
                            <option value="February"> February </option>
                            <option value="March"> March </option>
                            <option value="April"> April </option>
                            <option value="May"> May </option>
                            <option value="June"> June </option>
                            <option value="July">  July</option>
                            <option value="August"> August </option>
                            <option value="September">September </option>
                            <option value="October">October </option>
                            <option value="November">November </option>
                            <option value="December">December </option>
                        </select>

                                <div class="valid-feedback">good</div>
                    </div>
                </div>
                

                    <div class="row">
                        <div class="col-md mt-3 mb-3">
                            <Input type="hidden" name="student_id" value="<?php echo $array['student_id']; ?>">
                            <button type="submit" name="Submit" class="btn btn-primary btn-large col-md-12" value="Submit">Upload Receipt</button>
                        </div> 
                    </div>   
                    </form>
                <?php
                
    ?>       

</center>






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