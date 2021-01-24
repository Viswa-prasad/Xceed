<?php
   include("config.php");
   session_start();
   
    $kid = mysqli_real_escape_string($conn,$_SESSION["kid"]);
    $sql = "SELECT * FROM user WHERE kid = '$kid'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $city = $row['college_city'];
    $email = $row['email'];
    $paid=0;

if(isset($_SESSION['kid'])){
       $kid = $_SESSION['kid'];
$sql="SELECT * from payment where kid='$kid'";//.$_SESSION['kid'].
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_array($result)){  
    $paid=$row[3];
    }
}
}
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
        if(isset($_SESSION['reg']))
        {
        if(($_SESSION['reg']==1)){
            $sql = "SELECT * FROM events WHERE kid = '$kid'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0) {
                while($row = mysqli_fetch_array($result)){
                    if($row['kodoholic'] == 1){
                        header("location: event1.html?event1r=1#event1_sub");
                        exit();
                    }
                    else{
                        $query = "UPDATE events SET kodoholic=1 WHERE kid = '$kid'";
                        mysqli_query($conn,$query);
                       // header("Location:index.html");
                       
                        // echo "<script> alert('Thank you for registering!');
                        // window.location.href='index.html';
                        // </script>";
                        header("location: event1.html?event1=1#event1_sub");
                    }
                }
            }
            else{
                $query = "INSERT INTO events VALUES('$kid', 1,0,0,0)";
                $res=  mysqli_query($conn,$query);
                //header("Location:index.html");
                header("location: event1.html?event1=1#event1_sub");
            }
        }

        if(($_SESSION['reg']==2)){
            $sql = "SELECT * FROM events WHERE kid = '$kid'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0) {
                while($row = mysqli_fetch_array($result)){
                    if($row['techmaster'] == 1){
                        
                        header("location: event2.html?event2r=1#event2_sub");
                        break;
                    }
                    else{
                        $query = "UPDATE events SET techmaster=1 WHERE kid = '$kid'";
                        mysqli_query($conn,$query);
                       // header("Location:index.html");
                       header("location: event2.html?event2=1#event2_sub");
                    }
                }
            }
            else{
                $query = "INSERT INTO events VALUES('$kid', 0,0,1,0)";
                $res=  mysqli_query($conn,$query);
                //header("Location:index.html");
                header("location: event2.html?event2=1#event2_sub");
            }

        }

        if(($_SESSION['reg']==3)){
            $sql = "SELECT * FROM events WHERE kid = '$kid'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0) {
                while($row = mysqli_fetch_array($result)){
                    if($row['manager'] == 1){
                        header("location: event3.html?event3r=1#event3_sub");
                    }
                    else{
                        $query = "UPDATE events SET manager=1 WHERE kid = '$kid'";
                        mysqli_query($conn,$query);
                       // header("Location:index.html");
                       header("location: event3.html?event3=1#event3_sub");
                    }
                }
            }
            else{
                $query = "INSERT INTO events VALUES('$kid', 0,1,0,0)";
                $res=  mysqli_query($conn,$query);
                //header("Location:index.html");
                header("location: event3.html?event3=1#event3_sub");
            }
        }
        if(($_SESSION['reg']==4)){
            $sql = "SELECT * FROM events WHERE kid = '$kid'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0) {
                while($row = mysqli_fetch_array($result)){
                    if($row['event4'] == 1){
                        header("location: event4.html?event4r=1#event4_sub");
                    }
                    else{
                        $query = "UPDATE events SET event4=1 WHERE kid = '$kid'";
                        mysqli_query($conn,$query);
                       // header("Location:index.html");
                       
                       header("location: event4.html?event4=1#event4_sub");
                    }
                }
            }
            else{
                $query = "INSERT INTO events VALUES('$kid', 0,0,0,1)";
                $res=  mysqli_query($conn,$query);
                //header("Location:index.html");
                header("location: event4.html?event4=1#event4_sub");
            }
        }if(($_SESSION['reg']==5 && $paid==0)){
       
           
            header("location: ./payments/proccedtopay.php");
        
    
        }
         if(($_SESSION['reg']==6 && $paid==0)){

           
            header("location: ./payments/proccedtopay.php");
            
        }else if($_SESSION['reg']==5 && $paid==1){
           
        header("location: ./react_js.html?wksh1=1#wk_sh1");
            
        }else if($_SESSION['reg']==6 && $paid==1){
           
            header("location: ./electrical_vehicles.html?wksh2=1#wk_sh2");
        }    

    }


    }
    
    
   
   

    
?>
