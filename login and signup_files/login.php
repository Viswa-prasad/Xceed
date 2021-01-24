<?php
include("config.php");
extract($_POST);

$email = mysqli_real_escape_string($conn, $_POST["email"]);  
$password = mysqli_real_escape_string($conn, $_POST["password"]); 
$sql = mysqli_query($conn,"SELECT * FROM USER where email='$email'");

if(mysqli_num_rows($sql)>0) {
    while($row = mysqli_fetch_array($sql)) { 
        if(password_verify($password, $row["pass_word"])) { 
            session_start();
            $_SESSION["kid"] = $row["kid"];  
            $_SESSION["paid"] = 0;
            
            if(isset($_SESSION["kid"])) {
                //echo $_SESSION["kid"];
                header("location: ../index.html");    
                //exit();
            } 
        }
        else {  
            
            header("location: login and signup.html?incrt=1"); 
            exit();
        }  
    }
}
else {  
    
    header("location: login and signup.html?error=1"); 
    exit();
}  
$conn->close();  
?>