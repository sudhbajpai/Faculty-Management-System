<?php
include "adminsidebar.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="css/ASdep.css">
    <title>Document</title>
</head>
<body>
  
    
    
        <!--PAGE CONTENT-->
        
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

            <div class="container">
                <h1 class="text-white text-center "style="margin-bottom:5rem;margin-top: 10%;" >Departments of Applied Sciences</h1>
                <div class="row">
                    <div class="col-lg-4">
                            <div class="card">
                                <h2 class="c-1 overlay-c text-center">
                                    <a href="phy.php" style="color: #fff;">PHYSICS</a>
                                </h2>
                                <img src="img/phy.jpeg" alt="" class="img-card">
                            </div>
                      
                        <br>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <h2 class="c-1 overlay-c text-center">
                                <a href="chem.php" style="color: #fff;">CHEMISTRY</a>
                            </h2>
                            <img src="img/chy.jpeg" alt="" class="img-card">
                        </div>
                        <br>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                                <h2 class="c-1 overlay-c text-center">
                                    <a href="math.php" style="color: #fff;">MATHEMATICS</a>
                            </h2>
                            <img src="img/maths.jpeg" alt="" class="img-card">
                        </div>
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