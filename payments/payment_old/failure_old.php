<html>
<head>
<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">
<link rel="icon" href="../home page_files/icon-xceed.png" sizes="32x32">
<link rel="icon" href="../home page_files/icon-xceed.png" sizes="192x192">


<link rel="apple-touch-icon" href="../home page_files/icon-xceed.png">
<style>
body{background-image:  linear-gradient(45deg, #00008b 0%, #6e0270 100%);}
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
        <img src="../login and signup_files/images/xceed-logo-white.png">
        <a href="..//index.html"><img src="../login and signup_files/images/delete.png" style="float:right; height: 25px; width:30px; padding-right:50px;
      margin-top: 40px; "></a>

    </div>
    <?php
include("config.php");
session_start();
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$workshop='';
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$kid=$_POST["udf1"];
$salt="fxP98FwsGI";

// Salt should be same Post Request 

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'||||||||||'.$kid.'|'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        $retHashSeq = $salt.'|'.$status.'||||||||||'.$kid.'|'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
		 $hash = hash("sha512", $retHashSeq);

      //  if ($hash != $posted_hash) {
	//        echo "Invalid Transaction. Please try again";
	// 	   } else {
      //    echo "<h3>Your order status is ". $status .".</h3>";
      //    echo "<h4>Your transaction id for this transaction is ".$txnid.". You may try making the payment by clicking the link below.</h4>";
      //        }
            //  $page_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
            //  "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
            //  $_SERVER['REQUEST_URI']; 
            if($amount==10.0){
                  $workshop = "w1";
                  }
                  elseif($amount==20.0){
                  $workshop="w2";
                  }

                  // echo $_SESSION["kid"];
   //if(issset($_SESSION['kid']){
   if($kid){

      
   $sql="SELECT * from payment where kid='$kid'";//.$_SESSION['kid'].

      $result=mysqli_query($conn,$sql);
       if(mysqli_num_rows($result)){

             $sql2="UPDATE payment SET paid = 0,workshop='$workshop' WHERE kid ='$kid'";
             mysqli_query($conn,$sql2);
      }
       else{
    
         $stmt = $conn->prepare("INSERT INTO payment (kid,transaction_id,workshop,paid) VALUES(?,?,?,?)");

      //    $date=date_create()->format('Y-m-d H:i:s')."";
         $num=0;
         $stmt->bind_param("sssi",$kid,$txnid,$workshop,$num);
         $stmt->execute();
         $stmt->close();

    
    
   }
}
$_SESSION['kid']=$kid;
  
    
?>	
<section class="fail" id="login" >
            <div class="container">
                <div class="signin-content">
                    <div class="signin-form">
                        <h2 class="form-title"><?php 
                         if ($hash != $posted_hash) {
                              echo "<img src='redcross.png' style='height: 100px; width: 100px; margin-left:250px;'>";
                              
                                } else {
                                    echo "<img src='redcross.png' style='height: 100px; width: 100px; margin-left:250px;'>";
                           
                       }?></h2>
                        
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <p><?php 
                                
                                
                                ?></p>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <p><?php 
                                if ($hash != $posted_hash) {
                                    echo "<h3 style='font-size:20px;'>Please try again</h3>";
                                   
                                      } else {
                                            
                                 
                             
                                          echo "<h3 style='font-size:23px;'>Order status :". $status ."</h3>";
                                          echo "<h3 style='font-size:23px;'> Transaction ID :".$txnid."</h3>";
                                          
                                      }
                                
                                ?></p>
                
                            <div class="form-group form-button">
                                <button   name="go" id="myButton" class="form-submit" style="background-color: #800080;">Go To Home Page </button>

                                

                                                                                            </div>
                           
                        
                    </div>
                </div>
            </div>
        </section>
        
        

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "../index.html";
    };
</script>
</body>

</html>
