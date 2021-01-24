<?php
include("config.php");
session_start();

$MERCHANT_KEY = "K04q9iKT";
$SALT = "fxP98FwsGI"; 
// $page_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
//                 "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
//                 $_SERVER['REQUEST_URI']; 
if($_SESSION['reg']==5){
  $amount = 10.0;
}
elseif($_SESSION['reg']==6){
  $amount=20.0;
}
// echo $_SESSION['kid'];
// echo $page_url;
//  echo $amount;
// $amount = 20.0;
$txnid="";
$productinfo="workshop payment";
$surl="http://localhost/lander/payments/success.php";
$furl="http://localhost/lander/payments/failure.php";
$firstname="";
$email="";
$phone="";
$service_provider="payu_paisa";//""for testing Payu_paisa for lve
//for now we are giving a static kid which we have in DB
if(isset($_SESSION['kid'])){
  $kid = $_SESSION['kid'];
  $sql= "SELECT * FROM user WHERE kid ='$kid'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result)){  
            $firstname = $row['first_name'];
            $email = $row['email'];
            $phone = $row['contact'];
                }
  }
}
else{
  echo "login to register";
}
//$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
      || empty($posted['service_provider'])
      || empty($posted['udf1'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;
    $temp = hash('sha512',$hash_string);

    $hash = strtolower($temp);
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>
  <head>
  <style>
      textarea{
  visibility:hidden;
}

    </style>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  </head>
  <body onload="submitPayuForm()">
    <br/>
    <?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
    <form action="<?php echo $action ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <!-- For testing purposes -->
      <table>
        
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
          <td colspan="3"><textarea  name="productinfo"><?php echo $productinfo ?></textarea></td>
        </tr>
        <tr>
         <!-- <td>Success URI: </td>-->
          <td colspan="3"><input type="hidden" name="surl" value="<?php echo $surl ?>" size="64" /></td>
        </tr>
        <tr>
         <!-- <td>Failure URI: </td>-->
          <td colspan="3"><input type="hidden" name="furl" value="<?php echo $furl?>" size="64" /></td>
        </tr>

        <tr>
          <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
        </tr>
           <tr>
           <tr>
          <td> </td>
          <td colspan="3"><input  type="hidden" name="udf1" value="<?php echo $_SESSION['kid'] ?>" /></td>
        </tr>
        <tr>
          
<tr>
          <?php if(!$hash) { ?>
            <td colspan="4"><input type="submit" value="Submit" /></td>
          <?php } ?>
        </tr>
      </table>
    </form>
  </body>
</html>
