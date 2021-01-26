<?php
include("config.php");
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  
<title>Payment Processing</title>
<link rel="icon" href="../home page_files/icon-xceed.png" sizes="32x32">
<link rel="icon" href="../home page_files/icon-xceed.png" sizes="192x192">
<link rel="apple-touch-icon" href="../home page_files/icon-xceed.png">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">
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
          margin-top: 30px;
        }
        p {
          color: #404F5E;
          font-family: "Poppins";
          font-size:13px;
          margin-top: 0;
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
        padding-bottom: 0px;
        border-radius: 10px;
        box-shadow: 0 2px 3px #C8D0D8;
        margin-top: 115px;
        margin-left: 30px;
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
      .button input{
      	border-radius:5px; 
      	padding:10px;
      	height:13px; 
      	width:100px; 
      	font-size: 11px;
      	background: #800080; 
      	margin:0 auto;
      	
      	color: white;
      	margin-top: 10px;
        padding-top: 12px;
        padding-bottom: 25px;
        padding-left:12px;
        padding-right: 20px;
      }

      .button input:hover{
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
      .button input{
      	border-radius:5px; 
      	padding:20px;
      	height:18px; 
      	width:150px; 
      	font-size: 19px;
      	background: #800080; 
      	margin:0 auto;
      
      	color: white;
      	margin-top: 50px;
        padding-top: 12px;
        padding-bottom: 25px;
        padding-left:12px;
        padding-right: 20px;
      }

      .button input:hover{
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
      .button input{
      	border-radius:5px; 
      	padding:20px;
      	height:18px; 
      	width:150px; 
      	font-size: 19px;
      	background: #800080; 
      	margin:0 auto;
      
      	color: white;
      	margin-top: 50px;
        padding-top: 12px;
        padding-bottom: 30px;
        padding-left:12px;
        padding-right: 20px;
      }

      .button input:hover{
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
      .button input{
      	border-radius:5px; 
      	padding:20px;
      	height:18px; 
      	width:150px; 
      	font-size: 19px;
      	background: #800080; 
      	margin:0 auto;
      	
      	color: white;
      	margin-top: 50px;
        padding-top: 12px;
        padding-bottom: 30px;
        padding-left:12px;
        padding-right: 20px;
      }

      .button input:hover{
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
        margin-left: 425px;
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
      .button input{
      	border-radius:5px; 
      	height:15px; 
      	width:140px; 
      	font-size: 15.5px;
      	background: #800080; 
      	margin:0 auto;
      
      	color: white;
      	margin-top: 50px;
        padding-top: 12px;
        padding-bottom: 30px;
        padding-left:15px;
        padding-right: 20px;
      }

      .button input:hover{
      	background: #d1177d; 
      	text-decoration: underline;
        cursor: pointer;
      }


}
textarea{
  visibility:hidden;
}
		
</style>
<?php


//$MERCHANT_KEY = "K04q9iKT";
//$SALT = "fxP98FwsGI"; 
// $page_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
//                 "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
//                 $_SERVER['REQUEST_URI']; 
// if($_SESSION['reg']==5){
//   $amount = 10.0;
// }
// elseif($_SESSION['reg']==6){
//   $amount=20.0;
// }
// echo $_SESSION['kid'];
// echo $page_url;
//  echo $amount;
// $amount = 20.0;
// $txnid="";
// $productinfo="workshop payment";
// $surl="http://localhost/lander/payments/success.php";
// $furl="http://localhost/lander/payments/failure.php";
// $firstname="";
// $email="";
// $phone="";
//$service_provider="payu_paisa";//""for testing Payu_paisa for lve
//for now we are giving a static kid which we have in DB
// if(isset($_SESSION['kid'])){
//   $kid = $_SESSION['kid'];
//   $sql= "SELECT * FROM user WHERE kid ='$kid'";
//   $result=mysqli_query($conn,$sql);
//   if(mysqli_num_rows($result)>0){
//     while($row = mysqli_fetch_array($result)){  
//             $firstname = $row['first_name'];
//             $email = $row['email'];
//             $phone = $row['contact'];
//                 }
//   }
// }
// else{
//   echo "login to register";
// }
//$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

//$action = '';

// $posted = array();
// if(!empty($_POST)) {
//     //print_r($_POST);
//   foreach($_POST as $key => $value) {    
//     $posted[$key] = $value; 
	
//   }
// }

//$formError = 0;

//if(empty($posted['txnid'])) {
  // Generate random transaction id
  //$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
//} else {
  //$txnid = $posted['txnid'];
//}
//$hash = '';
// Hash Sequence
//$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
//if(empty($posted['hash']) && sizeof($posted) > 0) {
  //if(
  //         empty($posted['key'])
  //         || empty($posted['txnid'])
  //         || empty($posted['amount'])
  //         || empty($posted['firstname'])
  //         || empty($posted['email'])
  //         || empty($posted['phone'])
  //         || empty($posted['productinfo'])
  //         || empty($posted['surl'])
  //         || empty($posted['furl'])
  //     || empty($posted['service_provider'])
  //     || empty($posted['udf1'])
  // ) {
   // $formError = 1;
  //} else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
// 	$hashVarsSeq = explode('|', $hashSequence);
//     $hash_string = '';	
// 	foreach($hashVarsSeq as $hash_var) {
//       $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
//       $hash_string .= '|';
//     }

//     $hash_string .= $SALT;
//     $temp = hash('sha512',$hash_string);

//     $hash = strtolower($temp);
//     $action = $PAYU_BASE_URL . '/_payment';
//   }
// } elseif(!empty($posted['hash'])) {
//   $hash = $posted['hash'];
//   $action = $PAYU_BASE_URL . '/_payment';
// }
?>
<!-- <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script> -->
  </head>
  <body><!--onload="submitPayuForm()"-->
  
<div class="header" >
        <img src="xceed-logo-white.png" >
        <a href =<?php
        if(isset($_SESSION['reg'])){
        if($_SESSION['reg']==5){
          echo "../react_js.html";
          $workshop="w1";
          $work="REACT JS";
        }
        elseif($_SESSION['reg']==6){
          echo "../electrical_vehicles.html";
          $workshop="w2";
          $work="ELECTRICAL VEHICLES";
        }
      }
         ?> ><img src="delete.png" style="float:right; height: 20px; width:20px; padding-right:15px;
      margin-top: 40px; "></a>
</div>
<div class="card">
<?php
if(isset($_SESSION['reg'])){
  if($_SESSION['reg']==5){
    $workshop="w1";
    $work="REACT JS";
  }
  elseif($_SESSION['reg']==6){
    $workshop="w2";
    $work="ELECTRICAL VEHICLES";
  }
}
$kid = mysqli_real_escape_string($conn,$_SESSION["kid"]);
       //$sql2="INSERT INTO workshops(kid,email,workshop_name) VALUES($kid,$email,$workshop)";
       $sql = "SELECT * FROM user WHERE kid = '$kid'"; 
       $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $first_name = $row['first_name'];
        $email = $row['email'];
       
        $check="SELECT * FROM workshops WHERE kid ='$kid'";
        $answer = mysqli_query($conn,$check);
        if(mysqli_num_rows($answer)){
        $row1=mysqli_fetch_array($answer);
        if($row1['workshop_name']=="w1"){
          $work1="REACT JS";
        }
        elseif($row1['workshop_name']=="w2"){
          $work1="ELECTRICAL VEHICLES";
        }
            $display="HI ". strtoupper($first_name)."
            you've already registered for ".$work1.
            " workshop";
        }
        else{
	$query = "INSERT INTO workshops(kid,email,workshop_name) VALUES("sss",'$kid','$email','$workshop')";
        $res=  mysqli_query($conn,$query);
        
// 	$stmt = $conn->prepare("INSERT INTO workshops(kid,email,workshop_name) VALUES(?,?,?)");
//         $stmt->bind_param("sss",$kid,$email,$workshop); 
//         $stmt->execute();
        $stmt->close();
        // "HI ". strtoupper($first_name)."
        $display= "Your payment link will be sent to your mail.";
        //  for workshop  $work";
        /*$to = $email;
        $subject = "Greetings from team Xceed and Karnival, K!urukshetra.";
        $txt = "HI $first_name. You have successfully registered for the $work workshop dated on 13/02/2021. A mail regarding the payment for workshops will be generated in few days. Kindly check the registered mail for further information. Thank you! .";
        $headers = "From: xceedteam2020@gmail.com" . "\r\n" ;
        // "CC: meets@example.com";
        mail($to,$subject,$txt,$headers);*/
        }
      ?>
      <?php 
       echo "<div class='icon'>
       <i class=''>✓</i>
       </div>";?>
       <h1>SUCCESSFULLY REGISTERED <h1>
    <h2><?php 
    echo $display?></h2> 
    <p><?php echo  "<font-family: 'Raleway', sans-serif;>MAIL - ".$email ?></p><br>
    <p><?php echo  "WORKSHOP - ".$work ?></p><br>
    <p> Pay via the link </p>
        <!-- <p>We request you to retry the payment. </p> -->
        <!-- <p>Order - <br> Transaction ID - <br> Payment received - </p> -->


 <!-- <?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>-->
    <form action="../index.html" method="post" name="payuForm">
      <!-- <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" /> -->
      <!-- For testing purposes -->
      <!-- <table>
        
         <tr>
          <td><b></b></td>
        </tr> 
        <tr>
          <td> </td>
          <td><input   type="hidden" name="amount" value="<?php echo $amount ?>" /></td>
          <td></td>
          <td><input  type="hidden" name="firstname" id="firstname" value="<?php echo $firstname ?>" /></td>
        </tr>
        <tr>
          <td > </td>
          <td><input   type="hidden" name="email" id="email" value="<?php echo $email ?>" /></td>
          <td></td>
          <td><input  type="hidden" name="phone" value="<?php echo $phone ?>" /></td>
        </tr>
        <tr>
          <td> </td>
          <td ><textarea  name="productinfo" style="width:0px;height:0px"><?php echo $productinfo ?></textarea></td>
        </tr>
        <tr>
         <td>Success URI: </td>
          <td ><input type="hidden" name="surl" value="<?php echo $surl ?>" size="64" /></td>
        </tr>
        <tr>
         <td>Failure URI: </td>
          <td ><input type="hidden" name="furl" value="<?php echo $furl?>" size="64" /></td>
        </tr>

        <tr>
          <td ><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
        </tr>
           <tr>
           <tr>
          <td> </td>
          <td ><input  type="hidden" name="udf1" value="<?php echo $_SESSION['kid'] ?>" /></td>
        </tr>
        <tr>
          
<tr> -->
  <div class="button">
    <?php
     //if(!$hash) { 
      // ?>
      <input  type="submit" value="Home" />
    <?php 
    //} ?>
		
    </div>
    </div>
         
        </tr>
      </table>
    </form>
  </body>
</html>


</html>
