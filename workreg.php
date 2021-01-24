<?php
   include("config.php");
   session_start();
   
    $kid = mysqli_real_escape_string($conn,$_SESSION["kid"]);
    $sql = "SELECT * FROM user WHERE kid = '$kid'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $city = $row['college_city'];
    $email = $row['email'];

    if($city == "Madurai" || $city== "Thanjavur"){
        $to = $email;
        $subject = "Xceed";
        $txt = "WELCOME to XCEED. Wait till fourth week.";
        $headers = "From: xceedteam2020@gmail.com" . "\r\n" ;
        // "CC: meets@example.com";
        mail($to,$subject,$txt,$headers);
        //header("Location:index.html");
        echo "<script> alert('Kindly check your mail for more information!');
                        window.location.href='index.html';
                        </script>";
                        
    }
    else{
        if(isset($_SESSION['wk']))
        {
        if(($_SESSION['wk']==1)){
           
                        header("location: react_js.html?wk1=1#wk1_sub");
                    
                }
            }
            
        

        if(($_SESSION['wk']==2)){
            
                  
                header("location: electrical_vehicles.html?wk2=1#wk2_sub");
            }

    }

        exit();

    
?>
