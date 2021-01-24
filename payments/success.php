<?php
include("config.php");
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Payment Success</title>
<link rel="icon" href="../home page_files/icon-xceed.png" sizes="32x32">
<link rel="icon" href="../home page_files/icon-xceed.png" sizes="192x192">
<link rel="apple-touch-icon" href="../home page_files/icon-xceed.png">
<style>

/* Extra small devices (phones, 600px and down) */
@media only screen and (min-width: 0px) and (max-width: 600px) {
	body{
		
        background-image:linear-gradient(45deg, #00008b 0%, #6e0270 100%);
        opacity: 0.8;
        background-size: 600px 1000px;
		}
		.header img
    	{
        height: 50px;
        width: 110px;
        margin-top: 30px;
    	}
    	h1 {
          
          font-family: "Poppins";
          font-weight: 600;
          font-size: 20px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Poppins";
          font-size:13px;
          margin: 0;
        }
      i {
        color: #ffffff;
        font-size: 25px;
        line-height: 70px;
        margin-left:-9px;
      }
      .card {
      	text-align: center;
        background: white;
        padding-left: 30px;
        padding-right: 30px;
        padding-top: 30px;
        padding-bottom: 30px;
        border-radius: 10px;
        box-shadow: 0 2px 3px #C8D0D8;
        margin-top: 120px;
        margin-left: 35px;
        width: 65%;
      }
      .icon{
      	border-radius:200px; 
      	height:60px; 
      	width:60px; 
      	background: #00b300; 
      	margin:0 auto;
      	box-shadow: 0 4px 4px #C8D0D8;
      }
      .button p{
      	border-radius:5px; 
      	padding:10px;
      	height:13px; 
      	width:100px; 
      	font-size: 11px;
      	background: #800080; 
      	margin:0 auto;
      	box-shadow: 0 4px 4px #C8D0D8;
      	color: white;
      	margin-top: 50px;
      }

      .button p:hover{
      	background: #d1177d; 
      	text-decoration: underline;
      }
}


/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 601px) and (max-width: 768px){
	body{
		
        background-image:linear-gradient(45deg, #00008b 0%, #6e0270 100%);
        opacity: 0.8;
        background-size: 1500px 1500px;

		}
		.header img
    	{
        height: 90px;
        width: 150px;
        margin-top: 40px;
    	}
    	h1 {
          
          font-family: "Poppins";
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Poppins";
          font-size:20px;
          margin: 0;
        }
      i {
        color: #ffffff;
        font-size: 70px;
        line-height: 100px;
        margin-left:-15px;
      }
      .card {
      	text-align: center;
        background: white;
        padding: 60px;
        border-radius: 15px;
        box-shadow: 0 2px 3px #C8D0D8;
        margin-left: 85px;
        margin-top: 180px;
        width: 60%;

      }
      .icon{
      	border-radius:200px; 
      	height:88px; 
      	width:88px; 
      	background: #00b300; 
      	margin:0 auto;
      	box-shadow: 0 4px 4px #C8D0D8;
      }
      .button p{
      	border-radius:5px; 
      	padding:20px;
      	height:18px; 
      	width:150px; 
      	font-size: 19px;
      	background: #800080; 
      	margin:0 auto;
      	box-shadow: 0 4px 4px #C8D0D8;
      	color: white;
      	margin-top: 50px;
      }

      .button p:hover{
      	background: #d1177d; 
      	text-decoration: underline;
      }
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) and (max-width: 992px){
	body{
		
        background-image:linear-gradient(45deg, #00008b 0%, #6e0270 100%);
        opacity: 0.8;
        background-size: 1500px 1500px;

		}
		.header img
    	{
        height: 90px;
        width: 150px;
        margin-top: 40px;
    	}
    	h1 {
          
          font-family: "Poppins";
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Poppins";
          font-size:20px;
          margin: 0;
        }
      i {
        color: #ffffff;
        font-size: 70px;
        line-height: 100px;
        margin-left:-15px;
      }
      .card {
      	text-align: center;
        background: white;
        padding: 60px;
        border-radius: 15px;
        box-shadow: 0 2px 3px #C8D0D8;
        margin-left: 85px;
        margin-top: 180px;
        width: 60%;

      }
      .icon{
      	border-radius:200px; 
      	height:88px; 
      	width:88px; 
      	background: #00b300; 
      	margin:0 auto;
      	box-shadow: 0 4px 4px #C8D0D8;
      }
      .button p{
      	border-radius:5px; 
      	padding:20px;
      	height:18px; 
      	width:150px; 
      	font-size: 19px;
      	background: #800080; 
      	margin:0 auto;
      	box-shadow: 0 4px 4px #C8D0D8;
      	color: white;
      	margin-top: 50px;
      }

      .button p:hover{
      	background: #d1177d; 
      	text-decoration: underline;
      }
}

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 993px) and (max-width: 1200px) {
	body{
		
        background-image:linear-gradient(45deg, #00008b 0%, #6e0270 100%);
        opacity: 0.8;
        background-size: 1500px 1500px;

		}
		.header img
    	{
        height: 90px;
        width: 150px;
        margin-top: 40px;
    	}
    	h1 {
          
          font-family: "Poppins";
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Poppins";
          font-size:20px;
          margin: 0;
        }
      i {
        color: #ffffff;
        font-size: 70px;
        line-height: 100px;
        margin-left:-15px;
      }
      .card {
      	text-align: center;
        background: white;
        padding: 60px;
        border-radius: 15px;
        box-shadow: 0 2px 3px #C8D0D8;
        margin-left: 145px;
        margin-top: 270px;
        width: 60%;

      }
      .icon{
      	border-radius:200px; 
      	height:88px; 
      	width:88px; 
      	background: #00b300; 
      	margin:0 auto;
      	box-shadow: 0 4px 4px #C8D0D8;
      }
      .button p{
      	border-radius:5px; 
      	padding:20px;
      	height:18px; 
      	width:150px; 
      	font-size: 19px;
      	background: #800080; 
      	margin:0 auto;
      	box-shadow: 0 4px 4px #C8D0D8;
      	color: white;
      	margin-top: 50px;
      }

      .button p:hover{
      	background: #d1177d; 
      	text-decoration: underline;
      }

}

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1201px) {
	body{
		
        background-image:linear-gradient(45deg, #00008b 0%, #6e0270 100%);
        opacity: 0.8;
        background-size: 2016px 2016px;

		}
		.header img
    	{
        height: 60px;
        width: 120px;
        margin-top: 30px;
    	}
    	h1 {
          
          font-family: "Poppins";
          font-weight: 900;
          font-size: 35px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Poppins";
          font-size:18px;
          margin: 0;
        }
      i {
        color: #ffffff;
        font-size: 70px;
        line-height: 100px;
        margin-left:-15px;
      }
      .card {
      	text-align: center;
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 2px 3px #C8D0D8;
        margin-left: 420px;
        margin-top: 50px;
        width: 40%;
      }
      .icon{
      	border-radius:200px; 
      	height:85px; 
      	width:85px; 
      	background: #00b300; 
      	margin:0 auto;
      	box-shadow: 0 4px 4px #C8D0D8;
      }
      .button p{
      	border-radius:5px; 
      	padding:20px;
      	height:15px; 
      	width:140px; 
      	font-size: 15.5px;
      	background: #800080; 
      	margin:0 auto;
      	box-shadow: 0 4px 4px #C8D0D8;
      	color: white;
      	margin-top: 50px;
      }

      .button p:hover{
      	background: #d1177d; 
      	text-decoration: underline;
        cursor: pointer;
      }


}

		
</style>
</head>
<?php


$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
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
      
      // $page_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
      //           "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
      //           $_SERVER['REQUEST_URI']; 
      if($amount==10.0){
            $workshop = "w1";
            }
            elseif($amount==20.0){
            $workshop="w2";
            }
      //if(issset($_SESSION['kid']){
      if($kid){
     
      $sql="SELECT * from payment where kid='$kid'";//.$_SESSION['kid'].
      $result=mysqli_query($conn,$sql);
       if(mysqli_num_rows($result)){
             
             $sql2="UPDATE payment SET paid = 1,workshop='$workshop' WHERE kid ='$kid'";
             mysqli_query($conn,$sql2);
      }
       else{
            $stmt = $conn->prepare("INSERT INTO payment (kid, transaction_id,workshop,paid) VALUES(?,?,?,?)");
            


            
            // $date=date_create()->format('Y-m-d H:i:s')."";
            $num=1;
            $stmt->bind_param("sssi",$kid,$txnid,$workshop,$num);
            $stmt->execute();
            $stmt->close();

       }
       
      }
      $_SESSION['kid']=$kid;
               
?>	

<body>
<div class="header" >
        <img src="xceed-logo-white.png" >
        <a href ="..//index.html"><img src="delete.png" style="float:right; height: 20px; width:20px; padding-right:15px;
      margin-top: 40px; "></a>
</div>
<div class="card"><?php
if ($hash != $posted_hash) {
  echo "<img src='fail.png' style='height:75px; 
  width:75px;'>";}
else {
  echo "<div class='icon'>
  <i class=''>✓</i>
  </div>";
  }?>
      
      <?php 
                                if ($hash != $posted_hash) {
                                    echo "<h1>Invalid Transaction</h1> <br>
                                    <p> Payment has not been received. </p>
                                    <p>We request you to retry the payment. </p>";
                                      } else {
                                            echo "<h1>Transaction successful</h1> <br><br>
                                            <p>Status - " .$status."<br><br> Transaction ID - " .$txnid. " <br><br> Payment received - " .$amount."</p>";
                                 
                             
                               
                                
                                      }
                                
                                ?>
        
        <div class="button" id="myButton" >
		<p id="myButton" >Return to Home</p>
	  </div>
</div>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "../index.html";
    };
</script>
</body>
</html>