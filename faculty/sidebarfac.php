
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styleBoo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
</head>
<body>

  <div class="mainhead">
    <div class="overlay">
      <div class="vertical-nav" id="sidebar">
          <div class="pl-5 ml-4 mb-4">
              <div class="media d-flex align-items center mt-3">
                  <img src="img/Prima1.jpg" alt="" class="mr-3 rounded-circle img-thumbnail shadow-sm" style="height:5rem; width: 5rem;">
                  <div class="media-body text-white"><h4 class="mb-3 pt-1" >
                  PrimaFaculty
                  </h4>
                  <p class="text-white mb-0" style="font-size: 20px;">
                      Faculty
                  </p>
              </div>
              </div>
          </div>
  
          
              <h4 class="text-gray font-weight-bold text-uppercase px-3 pb-2 small" style="font-size: 2rem;">
                  Dashboard
              </h4>
          
  
          <ul class="nav flex-column mb-0" style="font-size: larger; margin-top: -10px;margin-bottom: -30px;">
              <li class="nav-item" style="margin-bottom:5px">
                  <a href="facultyhome.php" class="nav-link text-white">
                      <i class="fa fa-home mr-3 text-white fa-2x"></i>
                      <span style="padding-left: 30px;">Home</span>
                  </a>
              </li>
  
              <li class="nav-item" style="margin-bottom:-24px;">
              <a href="" class=" nav-link text-white" data-toggle="modal" data-target="#classmodal"> <i class="fa fa-user mr-3 text-white fa-2x"></i><span style="padding-left:35px;">Classes</span></a><br>
            </li>
                 <!-- modal for classes -->
                 <div class="modal fade" id="classmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title mx-3 px-5">WELCOME TO CLASS PANEL!!!</h5>
                    <button class="close text-right" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                        <div class="mx-5 px-5 my-3">
                          <h1 class="lead">Select What You Want To Do....</h1>
                        </div>
                        

                          <div class="text-center">
                              <a href="addclass.php" class="btn btn-success">Add</a>
                              <a href="delclass.php" class="btn btn-danger btn-inline">Delete</a>
                              <a href="upclass.php" class="btn btn-warning btn-inline">Update</a>
                              <a href="viewclass.php" class="btn btn-info btn-inline">View</a>
                          </div>
                        
                </div>
            </div>
        </div>
    </div>

              <li class="nav-item" style="margin-bottom:5px">
              <a href="" class=" nav-link text-white" data-toggle="modal" data-target="#certificationmodal"> <i class="fa fa-user mr-3 text-white fa-2x"></i><span style="padding-left:35px;">Certfication</span></a>
                  
              </li>
              <!-- modal for class -->

              <div class="modal fade" id="certificationmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title mx-3 px-5">WELCOME TO Certfication PANEL!!!</h5>
                    <button class="close text-right" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                        <div class="mx-5 px-5 my-3">
                          <h1 class="lead">Select What You Want To Do....</h1>
                        </div>
                        

                          <div class="text-center">
                              <a href="addcerti.php" class="btn btn-success">Add</a>
                              <a href="delcerti.php" class="btn btn-danger btn-inline">Delete</a>
                              <a href="upcerti.php" class="btn btn-warning btn-inline">Update</a>
                              <a href="viewcerti.php" class="btn btn-info btn-inline">View</a>
                          </div>
                        
                </div>
            </div>
        </div>
    </div>

  
              <li class="nav-item" style="margin-bottom: 5px;">
                  <a href="facprofile.php" class="nav-link text-white">
                      <i class="fa fa-book mr-3 text-white fa-2x"></i>
                      <span  style="padding-left: 27px;">Update Profile</span>
                  </a>
              </li>
  
              <li class="nav-item" style="margin-bottom: 5px;">
              <a href="" class=" nav-link text-white" data-toggle="modal" data-target="#achievenmodal"> <i class="fa fa-user mr-3 text-white fa-2x"></i><span style="padding-left:35px;">Achievement</span></a>
              </li>


 <!-- modal for class -->

 <div class="modal fade" id="achievenmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title mx-3 px-5">WELCOME TO Achievement PANEL!!!</h5>
                    <button class="close text-right" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                        <div class="mx-5 px-5 my-3">
                          <h1 class="lead">Select What You Want To Do....</h1>
                        </div>
                        

                          <div class="text-center">
                              <a href="achieve.php" class="btn btn-success">Add</a>
                              <a href="delachieve.php" class="btn btn-danger btn-inline">Delete</a>
                              <a href="upachieve.php" class="btn btn-warning btn-inline">Update</a>
                              <a href="viewachieve.php" class="btn btn-info btn-inline">View</a>
                          </div>
                        
                </div>
            </div>
        </div>
    </div>

              <li class="nav-item" style="margin-bottom: 5px;">
                  <!-- <a href="leave.php" class="nav-link text-white">
                      <i class="fa fa-paper-plane mr-3 text-white fa-2x"></i>
                      <span  style="padding-left: 24px;">Leaves</span>
                  </a> -->
                  <a href="" class=" nav-link text-white" data-toggle="modal" data-target="#leavemodal"> <i class="fa fa-paper-plane mr-3 text-white fa-2x"></i><span style="padding-left:35px;">Leaves</span></a>
              </li>
              
 <!-- modal for class -->

 <div class="modal fade" id="leavemodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title mx-3 px-5">WELCOME TO Leave PANEL!!!</h5>
                    <button class="close text-right" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                        <div class="mx-5 px-5 my-3">
                          <h1 class="lead">Select What You Want To Do....</h1>
                        </div>
                        

                          <div class="text-center">
                              <a href="leave.php" class="btn btn-success">Apply</a>
                              <a href="leavestat.php" class="btn btn-warning">Check Status</a>
                              <a href="deleteleave.php" class="btn btn-danger">Delete</a>
                              
                          </div>
                        
                </div>
            </div>
        </div>
    </div>

  
              <li class="nav-item" style="margin-bottom: 5px;">
                  <a href="changepswd.php" class="nav-link text-white">
                      <i class="fa fa-key mr-3 text-white fa-2x"></i>
                      <span  style="padding-left: 20px;">Change Password</span>
                  </a>
              </li>
  
              <li class="nav-item ">
                  <a href="../logout.php" class="nav-link text-white">
                      <i class="fa fa-sign-out mr-3 text-white fa-2x"></i>
                      <span  style="padding-left: 24px;">Logout</span>
                  </a>
              </li>
          </ul>
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