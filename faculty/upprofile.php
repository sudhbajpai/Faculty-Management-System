<?php

include "conn.php";
if(isset($_POST['submit'])){

    $fname = $_POST['fname'];
    $mob_no=$_POST['mob_no'];
    $add1=$_POST['add1'];
    $add2=$_POST['add2'];
    $postcode=$_POST['postcode'];
    $state=$_POST['state'];
    $area=$_POST['area'];
    $email =$_POST['email'];
    $edu=$_POST['edu'];
    $country=$_POST['country'];
    $jd =$_POST['jd'];
    $exp=$_POST['exp'];

    $query = "INSERT INTO userinfo(name,mob_no,add1,add2,postcode,joined_on,area,email,education,country,state,exp) VALUES ('$fname','$mob_no','$add1','$add2','$postcode','$jd','$area','$email','$edu','$country','$state','$exp')";

    $result=mysqli_query($conn,$query);
    if($result){

        echo "<script type='text/javascript'> alert('Sucess'); 
         history.back();
     </script>";
    }

    }
    else{
        
        echo "<script type='text/javascript'> alert('Please try again :('); 
         history.back();
     </script>";
    }




?>