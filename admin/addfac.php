<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $pswd = $_POST['pswd'];
    $frndname = $_POST['frndname'];
    $name = $_POST['name'];
    $conn = mysqli_connect("localhost","root","","userdb");
    $query = "INSERT INTO user (role,username,password,name,sansw) VALUES('faculty','$username','$pswd','$name','$frndname')";
    $result = mysqli_query($conn, $query);

    
    
     if($result == NULL){
         echo "<script type='text/javascript'> alert('please try again'); 
         history.back();
         </script>";
     }
    
     else{
   echo "<script type='text/javascript'> alert('Sucess'); 
         history.back();
     </script>";
     }     
    
}

?>