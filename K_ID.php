<?php
include("config.php");
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {

    $to = $row['email'];
    $name = $row['first_name'];
    $k_id = $row['kid'];
    $subject = "Xceed:Signup Completed!";
    $txt = "Hello $name Greetings from team Xceed and Karnival, K!urukshetra.
    You have successfully signed-up!!Your K!ID is: $k_id.
    Look into our events and workshops and start registering.Note down your K-id for later use.
    Thank you!";
       $headers = "From: xceedteam2020@gmail.com" . "\r\n" ;
    // "CC: meets@example.com";
    mail($to,$subject,$txt,$headers);
    


  }

}else {
    echo "0 results";
  }
?>