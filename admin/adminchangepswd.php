<?php
session_start();
include "adminsidebar.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/styleBoo.css">
</head>
<body>
<div class="page-content p-5" id="content">
            

            <div class="topbar fixed-top">
                <button id="sidebarCollapse" class="btn btn-light text-dark bg-light rounded-pill shadow-sm m-2 mb-4 fixed-top">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="toggle" ></div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search Here">
                        <i class="fa fa-search pt-2" aria-hidden="true"></i>
                    </label>
                </div>
                <div class="user"  >
                    
                    
                </div>
            </div>
    <!-- form card change password -->
    <hr class="mb-5">
    <div class="container col-md-4">
    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Change Password</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" action="adminchangepswd.php" role="form" autocomplete="on" method="POST"> 
                                <div class="form-group">
                                    <label for="inputPasswordOld">Username</label>
                                    <input type="text" class="form-control" id="inputPasswordOld" name = "username" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordOld">Current Password</label>
                                    <input type="password" class="form-control" id="inputPasswordOld" name = "oldpswd" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNew">New Password</label>
                                    <input type="password" class="form-control" id="inputPasswordNew" name="newpswd" required="">
                                    <span class="form-text small text-muted">
                                            The password must be minimum 5 characters, and must <em>not</em> contain spaces.
                                        </span>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="inputPasswordNewVerify">Verify</label>
                                    <input type="password" class="form-control" id="inputPasswordNewVerify"  name ="verifypswd "required="">
                                    <span class="form-text small text-muted">
                                            To confirm, type the new password again.
                                        </span>
                                </div> -->      
                                <div class="form-group">
                                    <button type="submit" name = "submit" class="btn btn-success btn-lg float-right">Save</button>
                                </div> 
                            </form>
                        </div>
                    </div>

                    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script src="mainBoo.js"></script>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $oldpswd = $_POST['oldpswd'];
    $newpswd = $_POST['newpswd'];
    // $verifypswd = $_POST['verifypswd'];

    $conn = mysqli_connect("localhost","root","","userdb");

    $select = "SELECT * FROM user WHERE username='$username';";
    $selectres = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($selectres);

    if($row['password'] == $oldpswd ){
        
            $updatequ = "UPDATE user SET password='$newpswd' WHERE username='$username'";
            $result = mysqli_query($conn , $updatequ);

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
    }else{
        echo "<script type='text/javascript'>  alert('Old password wrong'); 
        history.back();</script>";
    }
}

?>