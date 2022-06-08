<?php
include "logincheck.php";
session_start();
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


    <link rel="stylesheet" href="css/styleBoo.css">
    <title>Admin</title>
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

            <h2 class="display-2 tp text-white text-center" style="margin-bottom:3rem;margin-top: 10%;">Welcome <?php echo $_SESSION['Loginuser'];?></h2>
            <div class="separator"></div>
            <div class="row mt-5">
                <div class="col-lg-4 col-md-4">
                    <div class="card bg-light text-dark rounded">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                              <div class="flex-column">
                                <h3 style="font-size: 3rem;">20</h3>
                                <p class="lead">Departments</p>  
                              </div>  
                              <div class="flex-column"><span><i class="fa fa-building fa-3x" style="color: #111;margin-top: 15px;"></i></span></div>  
                            </div>                     
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="card bg-light text-dark">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                          <div class="flex-column">
                            <h3 style="font-size: 3rem;">100</h3>
                            <p class="lead">Faculties</p>  
                          </div>  
                          <div class="flex-column pl-5"><span><i class="fa fa-user fa-3x" style="color: #111;margin-top: 15px;"></i></span></div>  
                        </div>                     
                    </div>
                  </div>
              </div>
                <div class="col col-lg-4 col-md-4 ">
                    <div class="card bg-light text-dark rounded">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                              <div class="flex-column">
                                <h3 style="font-size: 3rem;">20</h3>
                                <p class="lead">Leaves</p>  
                              </div>  
                              <div class="flex-column pl-5"><span><i class="fa fa-paper-plane fa-3x" style="color: #111;margin-top: 15px;"></i></span></div>  
                            </div>                     
                        </div>
                        
                    </div>
                  </div>
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


</script>
</body>
</html>