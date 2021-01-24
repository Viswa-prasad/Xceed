<?php
session_start();
extract($_POST);
include("config.php");

if(isset($_POST['submit-1'])){
    
    $stmt = $conn->prepare("INSERT INTO queries (f_name,l_name,email,msg) VALUES(?,?,?,?)");
    $stmt->bind_param("ssss",$fname, $lname, $email, $msg);

        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $fname = mysqli_real_escape_string($conn,$_POST['fname']);
        $lname = mysqli_real_escape_string($conn,$_POST['lname']);
        $msg = mysqli_real_escape_string($conn,$_POST['msg']);

        $stmt->execute();

        $stmt->close();
        header("location: index.html?query=1#query");
        exit();

}
?>