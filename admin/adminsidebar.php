<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styleBoo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
</head>
<body>
    
  <div class="mainhead">
      <div class="overlay">
        <div class="vertical-nav" id="sidebar">
            <div class="pl-5 ml-3 mb-4">
                <div class="media d-flex align-items center mt-3">
                    <img src="img/Prima1.jpg" alt="" class="mr-3 rounded-circle img-thumbnail shadow-sm" style="height:5rem; width: 5rem;">
                    <div class="media-body text-white"><h4 class="mb-3 pt-1" >
                    PrimaFaculty
                    </h4>
                    <p class="text-white mb-0" style="font-size: 20px;">
                        Admin
                    </p>
                </div>
                </div>
            </div>
    
            
                <h4 class="text-gray font-weight-bold text-uppercase px-3 pb-2 small" style="font-size: 2rem;">
                    Dashboard
                </h4>
            
    
            <ul class="nav flex-column mb-0" style="font-size: larger; margin-top: -10px;margin-bottom: -30px;">
                <li class="nav-item" style="margin-bottom:5px">
                    <a href="AdminBoo.php" class="nav-link text-white">
                        <i class="fa fa-home mr-3 text-white fa-2x"></i>
                        <span style="padding-left: 30px;">Home</span>
                    </a>
                </li>
    
                <li class="nav-item" style="margin-bottom:-24px;">
                    <a href="#" class="nav-link text-white" data-toggle="collapse" data-target="#dept">
                        <i class="fa fa-building mr-3 text-white fa-2x"></i>
                        <span  style="padding-left: 30px;">Departments</span>
                        <span><i class="fa fa-caret-down" style="margin-left: 20%;"s></i></span>
                    </a>
    
                    <div class="collapse" id="dept"  style="padding-left: 90px;font-size:1rem;">
                        <ul class="flex-column text-white">
                            <li class="under" style="margin-bottom: -10px;">
                                <a href="ASdep.php" class="nav-link text-white" style="font-weight:400;font-style: italic;;font-size: 15px;">
                                    Applied Sciences
                                </a>
                            </li>
                            <li class="under" style="margin-bottom: -10px;">
                                <a href="Humanities.php" class="nav-link text-white" style="font-weight:400;font-style: italic;font-size: 15px;">
                                    Humanities
                                </a>
                            </li>
                            <li  class="under" style="margin-bottom: -10px;">
                                <a href="Department.php" class="nav-link text-white" style="font-weight:400;font-style: italic;;font-size: 15px;">
                                    Engineering
                                </a>
                            </li>
                            <!-- <li class="under" style="margin-bottom:20px">
                                <a href="Management.php" class="nav-link text-white" style="font-weight:400;font-style: italic;;font-size: 15px;">
                                    Management Technology
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </li>
             
                <li class="nav-item" style="margin-bottom:5px">
                    <!-- <a href="adminfac.php" class="nav-link text-white">
                        <i class="fa fa-user mr-3 text-white fa-2x"></i>
                        <span style="padding-left:35px;">Faculties</span> -->
                    <!-- </a> -->
                    <a href="" class=" nav-link text-white" data-toggle="modal" data-target="#Facultymodal"> <i class="fa fa-user mr-3 text-white fa-2x"></i><span style="padding-left:35px;">Faculties</span></a>
                </li>
    <!-- Modal section -->
    <div class="modal fade" id="Facultymodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title mx-3 px-5">WELCOME TO FACULTY PANEL!!!</h5>
                    <button class="close text-right" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                        <div class="mx-5 px-5 my-3">
                          <h1 class="lead">Select What You Want To Do....</h1>
                        </div>
                        

                          <div class="text-center">
                              <a href="adminfac.php" class="btn btn-success">Add</a>
                              <a href="delfac.php" class="btn btn-danger btn-inline">Delete</a>
                              <a href="upfac.php" class="btn btn-warning btn-inline">Update</a>
                              <a href="viewfac.php" class="btn btn-info btn-inline">View</a>
                          </div>
                        
                </div>
            </div>
        </div>
    </div>

    <!-- modal section end -->
                <li class="nav-item" style="margin-bottom: 5px;">
                    <!-- <a href="Subject.php" class="nav-link text-white">
                        <i class="fa fa-book mr-3 text-white fa-2x"></i>
                        <span  style="padding-left: 27px;">Subjects</span>
                    </a> -->
                    <a href="" class=" nav-link text-white" data-toggle="modal" data-target="#subjectmodal"> <i class="fa fa-user mr-3 text-white fa-2x"></i><span style="padding-left:35px;">Subject</span></a>
                </li>
                <!-- modal for subject -->
                <div class="modal fade" id="subjectmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title mx-3 px-5">WELCOME TO Subject PANEL!!!</h5>
                    <button class="close text-right" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                        <div class="mx-5 px-5 my-3">
                          <h1 class="lead">Select What You Want To Do....</h1>
                        </div>
                        

                          <div class="text-center">
                              <a href="subject.php" class="btn btn-success">Add</a>
                              <a href="delsub.php" class="btn btn-danger btn-inline">Delete</a>
                              <a href="upsub.php" class="btn btn-warning btn-inline">Update</a>
                              <a href="viewsub.php" class="btn btn-info btn-inline">View</a>
                          </div>
                        
                </div>
            </div>
        </div>
    </div>

    <!-- modal end for subject -->


    
                <!-- <li class="nav-item" style="margin-bottom: 5px;">
                    <a href="#" class="nav-link text-white">
                        <i class="fa fa-graduation-cap mr-3 text-white fa-2x"></i>
                        <span  style="padding-left: 13px;">Classes</span>
                    </a>
                </li> -->
    
                <li class="nav-item" style="margin-bottom: 5px;">
                    <a href="Leave.php" class="nav-link text-white">
                        <i class="fa fa-paper-plane mr-3 text-white fa-2x"></i>
                        <span  style="padding-left: 24px;">Leaves</span>
                    </a>
                </li>
    
                <li class="nav-item" style="margin-bottom: 5px;">
                    <a href="adminchangepswd.php" class="nav-link text-white">
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