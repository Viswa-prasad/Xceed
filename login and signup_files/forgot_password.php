<?php
session_start();
include("config.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot password</title>
    <link rel="icon" href="../home page_files/icon-xceed.png" sizes="32x32">
	<link rel="icon" href="../home page_files/icon-xceed.png" sizes="192x192">
	<link rel="apple-touch-icon" href="../home page_files/icon-xceed.png">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
<style>
@media only screen and (min-width: 0px) and (max-width: 600px) {
	body{
    background-image:linear-gradient(45deg, #00008b 0%, #6e0270 100%);
   opacity: 0.9;
   background-repeat: no-repeat;
		background-size:600px 1000px;
	}
}
@media only screen and (min-width: 600px) and (max-width: 768px) {
	body{
    background-image:linear-gradient(45deg, #00008b 0%, #6e0270 100%);
   opacity: 0.9;
   background-repeat: no-repeat;
		background-size:768px 1000px;
	}
}
@media only screen and (min-width: 768px) and (max-width: 992px) {
	body{
    background-image:linear-gradient(45deg, #00008b 0%, #6e0270 100%);
   opacity: 0.9;
   background-repeat: no-repeat;
		background-size:992px 1000px;
	}
}
@media only screen and (min-width: 992px) and (max-width: 1200px) {
	body{
    background-image:linear-gradient(45deg, #00008b 0%, #6e0270 100%);
   opacity: 0.9;
   background-repeat: no-repeat;
		background-size:1200px 1000px;
	}
}
@media only screen and (min-width: 1200px) {
	body{
    background-image:linear-gradient(45deg, #00008b 0%, #6e0270 100%);
   opacity: 0.9;
   background-repeat: no-repeat;
		background-size:2016px 1000px;
	}
}
.header img
    {
        height: 60px;
        width: 120px;
        margin-top: 30px;
        margin-left: 30px;

    }
</style>
</head>
<body>
    <div class="header">
        <img src="./images/xceed-logo-white.png">
        <a href ="login and signup.html"><img src="./images/delete.png" style="float:right; height: 25px; width:30px; padding-right:50px;
      margin-top: 40px; "></a>

    </div>

        <section class="sign-in" id="login" style="padding:30px; height: 500px;">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-form">
                        <h2 class="form-title">Forgot password</h2>
                        <form method='post'  action='' class="register-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="mail" name="email_id" id="email" placeholder="Email" required/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signin" class="form-submit" value="Submit" style="background-color: #800080;">

                                <?php
                                if(isset($_POST['submit']))
                                {
                                    $email_id = mysqli_real_escape_string($conn,$_POST['email_id']);
                                    $result = mysqli_query($conn,"SELECT * FROM user where email='" . $email_id . "'");
                                    if(mysqli_num_rows($result)>0){
                                        while($row = mysqli_fetch_array($result)){  
                                            $fetch_email_id=$row["email"];
                                            $password=$row["pass_word"];
                                            
                                            if($email_id==$fetch_email_id) {
                                                $to = $email_id;
                                                $subject = "Reset-Password";
                                                $txt = "Reset your password  : http://localhost/lander/login%20and%20signup_files/reset_password.php";
                                                $headers = "From: xceedteam2020@gmail.com" . "\r\n" ;
                                                // "CC: meets@example.com";
                                                mail($to,$subject,$txt,$headers);
                                                echo '<p style=color:green; align="center">*We have mailed a link to reset your password</p>';
                                                
                                            }
                                            else{
                                                echo '<p style="color:red;" align="center">*Invalid email ID</p>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<p style="color:red;" align="center">*Invalid email ID</p>';
                                    }
                                }
                                $conn->close();
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
