<?php
extract($_POST);
include("config.php");
$email= mysqli_real_escape_string($conn,$_POST["email"]);
$sql = mysqli_query($conn,"SELECT * FROM USER where email='$email'");
//echo "HHEHE";
$pass = $_POST['password'];
$conf_pass = $_POST['confirm_password'];
if($pass != $conf_pass)
{
  header("location:login and signup.html?pass=1#collegecity");
}

else if(mysqli_num_rows($sql)>0)
{
    header("location:login and signup.html?exist=1#collegecity");
}
else{
    $stmt = $conn->prepare("INSERT INTO USER (kid, pass_word, first_name, last_name, email, contact, college_name, college_city, yr, dept) VALUES(?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssssis",$kid, $pass_word, $first_name, $last_name, $email, $contact, $college_name, $college_city, $yr, $dept);
    
    $contact = mysqli_real_escape_string($conn,$_POST["phone"]);
    
    $sql =  mysqli_query($conn,"SELECT prev FROM prev");
    if (mysqli_num_rows($sql)>0) {
        while($row = mysqli_fetch_array($sql)) {
            $prev1=$row['prev'];
            $date =  date("s");
            $num = (int)$date; 
            $temp=$row['prev']+$num;
            
            $query = "UPDATE prev SET prev=$temp WHERE prev = '$prev1'";
            $kid ="K".$temp;
            mysqli_query($conn,$query);   
        }
    }
    
    $pass_word = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $first_name = mysqli_real_escape_string($conn,$_POST["firstname"]);
    $last_name = mysqli_real_escape_string($conn,$_POST["lastname"]);
    $email= mysqli_real_escape_string($conn,$_POST["email"]);
    $college_name= mysqli_real_escape_string($conn,$_POST["college_name"]);
    $college_city= mysqli_real_escape_string($conn,$_POST["college_city"]);
    $yr= mysqli_real_escape_string($conn,$_POST["year"]);
    $dept= mysqli_real_escape_string($conn,$_POST["department"]);
    $stmt->execute();

    $stmt->close();
    
    
    session_start();
    $_SESSION["kid"] = $kid;  
    // $_SESSION["paid"] = 0;
    if(isset($_SESSION["kid"])){
        header("location: ../index.html");
    }
	$to = $email;
    $subject = "Xceed:Signup Completed!";
    $txt = "Greetings from team Xceed and Karnival, K!urukshetra. You have successfully signed-up. Your K! ID is: $kid, please take a note of it. Look into our events and workshops and start registering Thank you!";
    $headers = "From: xceedteam2020@gmail.com" . "\r\n" ;
    // "CC: meets@example.com";
    mail($to,$subject,$txt,$headers);
    $conn->close();
}
?>