<?php

 session_start();
ob_start();

include "connection.php";

if (isset($_POST['submit'])){
    
    $username= $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password';";



    $result = mysqli_query($conn , $query);
 if(isset($_POST['rememberme'])){
     setcookie('usercokkie',$username,time()+86400);
     setcookie('pswdcokkie',$password,time()+86400);
 }
    

    if(mysqli_num_rows($result)> 0) 
    {
        while ($row = mysqli_fetch_assoc($result)){

            if($row["role"] == "admin"){
                $_SESSION['Loginuser'] = $row["username"];
                $_SESSION['role'] = $row["role"];
                header('Location:./admin/AdminBoo.php');
                echo "<h1> error</h1>";
            }
            elseif ($row["role"]=="faculty") {
                $_SESSION['facultyuser'] = $row["username"];
                $_SESSION['role'] = $row["role"];
                header('Location:./faculty/facultyhome.php');
            }
            else{
                $_SESSION['userlogin'] = $row["username"];
                $_SESSION['role'] = $row["role"];
                header('Location: user/user.php');
            }

        }
    }
    else{
        echo "<script type='text/javascript'> alert('Wrong Username Or Password'); 
		history.back();
		</script>";
    }
  
    
}

?>