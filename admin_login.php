<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="login.css" rel="stylesheet">



<title>JImma Community School</title>


<link href="style.css" rel="stylesheet">

<link href="css/responsive/responsive.css" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="images/Logo-Icons.png"/>
<!--<link href="https://alx-apply.hbtn.io/level2/school.css" rel="stylesheet">-->
<link  href="icon/svg-with-js/css/fa-svg-with-js.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/forms.css" rel="stylesheet">

<style>
  body {font-family: Arial, Helvetica, sans-serif;}
  form {border: 3px;}

  input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }

  button:hover {
    opacity: 0.8;
  }

  .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }

  .imgcontainer {
    text-align: center;
    margin: 10px;

  }

  img.avatar {
    width: 10%;
    border-radius: 50%;
  }

  .container {
    padding: 16px;
  }

  span.psw {
    float: right;
    padding-top: 16px;
  }


  @media screen and (max-width: 300px) {
    span.psw {
      display: block;
      float: none;
    }
    .cancelbtn {
      width: 100%;
    }
  }
</style>


</head>
<body>
   
    <div class="top_header_area">
        <div class="container">
            <div class="row">
                <div class="col-5 col-sm-6">
                   
                    <div class="top_social_bar">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                    </div>
                </div>
                
               
            </div>
        </div>
    </div>

    <div class="header ">
      
        <h4 >Jimma Community School</h4>
          <a href="#default" class="logo"></a>
          <div class="header-right">
            <a href="home.php">Home</a>


            <!-- Change Language -->
        
            <a id="a1" class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dpMLink" data-bs-toggle="dropdown" aria-expanded="false"><i ></i>&nbsp;<label>Change Language</label></a>

            <ul class="dropdown-menu" aria-labelledby="dpMLink">
                <li class="dropdown-item"><a href="#"><i class="fas fa-user-graduate"></i> English </a></li>
                <li class="dropdown-item"><a href="#"><i class="fas fa-chalkboard-teacher"></i> Afan Oromo</a></li>
                <li class="dropdown-item"><a href="#"><i class="fas fa-chalkboard-teacher"></i> Amharic</a></li>
            </ul>
           
          </div>
        </div>

<h2>Admin Login Form</h2>

<form class="was-validated border p-4 mb-4 bg-light border shadow the_logo_form" action="admin_login_ctrl.php" method="post" name="form" onsubmit="return validated()">

                    <div class="mt-3 mb-3">
                        <label for="mail" class="form-lable"><i ></i> Email</label>
                        <input type="email" class="form-control" name="admin_email" id="mail" placeholder="Enter Your Email" required="required">
                            <div class="valid-feedback">good</div>
                            <div id="email_error">email should be eight or greater than</div> 
                    </div>

                    <div class="mb-3">
                        <label for="pswd" class="form-label"><i></i> Password</label>
                        <input type="password" class="form-control" name="admin_password" id="pswd" placeholder="Enter Your Password" required="required">
                            <div class="valid-feedback">good</div>   
                            <div id="pass_error">Password must be six or greater than</div>
                    </div>



                    <button type="submit" class="btn-lg btn-success mb-3 col-sm-12">Login</button>

                    <div class="row">
                        <div class="col-md">
                            <p class="mt-3 text-center text-secondary"><strong>Forget Password?<a href="s_sys_gen_pass.html">&nbsp;Click Here</a></strong></p> 
                        </div>
                    </div>

                </form>


  <script src="icon/svg-with-js/js/fontawesome-all.js"></script>       
  <script src="js/bootstrap.bundle.min.js"></script>   
  <script src="js/main.js"></script>

</body>
</html>
