<?php
include("config.php");
$sql = "SELECT * FROM workshops";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {

    $to = $row['email'];
    $workshop = $row['workshop_name'];
    if($workshop=="w1") $ws="React JS";
    if($workshop=="w2") $ws="Electrical Vehicles and Industry 4.0";
    $k_id = $row['kid'];
    $subject = "Xceed:Workshop Registration Completed!";
    $txt = "Greetings from team Xceed and Karnival, K!urukshetra.
    You have successfully registered for the $ws workshop dated 13/02/2021.
    A mail regarding the payment for workshops will be generated in few days. 
    Kindly check the registered mail for further information. Use your K-id for payment
    Thank you!";
    $headers = "From: xceedteam2020@gmail.com" . "\r\n" ;
    // "CC: meets@example.com";
    mail($to,$subject,$txt,$headers);
    


  }

}else {
    echo "0 results";
  }
?>