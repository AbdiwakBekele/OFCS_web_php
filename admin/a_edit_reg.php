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

        <h3 style= "color: white"> Jimma Community School </h3>
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



    <center>


           <?php

// Database Update PHP Code 

  
    if(isset($_POST['Submit'])){
        
        $registral_id = $_POST['registral_id'];
        $registral_fullname = $_POST['registral_fullname'];
        $registral_phone = $_POST['registral_phone'];
        $registral_email = $_POST['registral_email'];
        $registral_password = md5($_POST['registral_password']);
        $confirm_registral_password =  md5($_POST['confirm_registral_password']);
        
        if($registral_password == $confirm_registral_password){
            
           

            $query = "UPDATE registral SET registral_fullname = '$registral_fullname',  registral_phone = '$registral_phone',  registral_email = '$registral_email', registral_password = '$registral_password' WHERE registral_id = '$registral_id' ";

            if(mysqli_query($con, $query)){
                echo "<br> <br>";
                $msg = "You have Successfully Updated a Registral information!";
                echo $msg;
            }
            
        }else{
            $msg = "Password Don't match";
            echo $msg;
        }
    }

  //////// Request from Manage Health Officer Page //////

    if(isset($_REQUEST['id'])){
        $registral_id = intval($_REQUEST['id']);
        
        $array = array();
                $q = "SELECT * FROM registral WHERE registral_id = '$registral_id'";
                $q_result = mysqli_query($con,$q);
       
              while ($r = mysqli_fetch_assoc($q_result )){
                $array['registral_fullname'] = $r['registral_fullname'];
                $array['registral_phone'] = $r['registral_phone'];
                $array['registral_email'] = $r['registral_email'];
               }
?>           

<form class="was-validated bg-light border shadow p-3" action="a_edit_reg.php" method="POST" enctype="multipart/form-data" name="form">

        <!-- Full Name Input -->
        <br>
        <div class="row mt-3">
            <!-- Full Name Input -->
            <div class="form-group mt-2 col-md-6 col-sm-12">
                <label for="email"><h6><b><i class="fas fa-envelope"></i> Full Name</b></h6></label>
                <input type="text" class="form-control" name="registral_fullname" id="email" placeholder="Enter Full Name" value=" <?php echo $array['registral_fullname']; ?>" required>
                        <div class="valid-feedback">good</div>
            </div>
        </div>


        <div class="row mt-3">
            <!-- Phone Input -->
            <div class="form-group mt-2 col-md-6 col-sm-12">
                <label for="email"><h6><b><i class="fas fa-envelope"></i> Phone No</b></h6></label>
                <input type="phone" class="form-control" name="registral_phone" id="email" placeholder="Enter Phone Number" value=" <?php echo $array['registral_phone']; ?>" required>
                        <div class="valid-feedback">good</div>
            </div>
        </div>

        <div class="row mt-3">
            <!-- Email Input -->
            <div class="form-group mt-2 col-md-6 col-sm-12">
                <label for="email"><h6><b><i ></i> Email</b></h6></label>
                <input type="email" class="form-control" name="registral_email" id="email" placeholder="Enter Email Address" value=" <?php echo $array['registral_email']; ?>" required>
                        <div class="valid-feedback">good</div>
            </div>
        </div>
        

        <div class="row mt-3">
            <!-- Password Input -->
            <div class="form-group mt-2 col-md-6 col-sm-12">
                <label for="email"><h6><b><i class="fas fa-envelope"></i> Password</b></h6></label>
                <input type="password" class="form-control" name="registral_password" id="email" placeholder="Enter Password" required>
                        <div class="valid-feedback">good</div> 
            </div>

            <!-- Confirm Password Input -->
            <div class="form-group col-md-6 col-sm-12">
                <label for="mob_no" class="form-label"><h6><b><i class="fas fa-phone"></i> Confirm Your Password</b></h6></label>
                <input type="password" class="form-control" name="confirm_registral_password" for="mob_no" placeholder="Confirm Your Password" maxlength="10" required>

                        <div class="valid-feedback">good</div> 
            </div>
        </div>

    <div class="row">
        <div class="col-md mt-3 mb-3">
            <Input type="hidden" name="registral_id" value="<?php echo $registral_id; ?>">
            <button type="submit" name="Submit" class="btn btn-primary btn-large col-md-12" value="Submit">Edit Registral</button>
        </div> 
    </div>   
    </form>
<?php
        
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