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
    <title>Admin</title>
    <link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
 crossorigin="anonymous">
</head>
<body>
    
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
                <div class="user">
                    

                
                
                
                    
                </div>
            </div>
            <!-- <h1 class="text-center" style="color:White;margin: 0 0 25px 105px;">Add Faculty</h1> -->


            <!-- form -->
            <div class="main"> 
    <div class="faculty">
    <h2>Create Faculty</h2>
    <form method="post" id="faculty" action="addfac.php" method="POST">
        <label>Name </label>
        <br>
        <input type="text" name="name" id="name" placeholder="name">
        <br>
        <br>
        <label>Username </label>
        <br>
        <input type="text" name="username" id="name" placeholder="Username">
        <br>
        <br>
        <label class="form-label">Password</label>
        <br>
        <input type="password" name="pswd" id="name" placeholder="password">
        <br>
        <br>
        <label> Enter friends name </label>
        <br>
        <input type="text" name="frndname" id="name" placeholder="name">
        <br>
        <br>
        <button type="submit" id="button" name="submit"class="btn btn-primary" style="border-radius: 10px;">submit</button>

    </form>
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