<?php
session_start();
 include "sidebarfac.php";
include "conn.php";
$facname =$_SESSION['facultyuser'];
$query = "SELECT * FROM user WHERE username='$facname'";
$res =mysqli_query($conn,$query);
$row =mysqli_fetch_array($res);
$role= $row['role'];
$name=$row['name'];

$query2 ="SELECT * FROM userinfo";
$res1= mysqli_query($conn,$query2);
$row1 = mysqli_fetch_array($res1);

$id=$row1['id'];
$mob_no=$row1['mob_no'];
$add1=$row1['add1'];
$add2=$row1['add2'];
$postcode=$row1['postcode'];
$joined_on=$row1['joined_on'];
$area=$row1['area'];
$email=$row1['email'];
$education=$row1['education'];
$country=$row1['country'];
$state=$row1['state'];
$exp=$row1['exp'];


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
    <link rel="stylesheet" href="css/faculty.css">
    <title>Faculty</title>
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
              <div class="user">
          </div>
      </div>


      <!-- profile content starts -->

      <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo $facname ?></span><span class="text-black-50"><?php echo $role?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form action="upprofile.php" method="POST">
                <div class="row mt-2 form-group">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value="<?php echo $name?>" name ="fname"></div>
                    
                </div>
                <div class="row mt-3 form-group">
                    <div class="col-md-12 form-group"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value="<?php echo $mob_no?>" name="mob_no"></div>
                    <div class="col-md-12 form-group"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" value="<?php echo $add1 ?>" name="add1"></div>
                    <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="enter address line 2" value="<?php echo $add2 ?>" name="add2"></div>
                    <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" value="<?php echo $postcode?>" name="postcode"></div>
                    <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter address line 2" value="<?php echo $state?>" name="state"></div>
                    <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="area name" value="<?php echo $area?>" name="area"></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value="<?php echo $email?>" name="email"></div>
                    <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value="<?php echo $education?>" name="edu"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value="<?php echo $country?>" name="country"></div>
                    <div class="col-md-6"><label class="labels">Joining Date</label><input type="date" class="form-control" value="<?php echo $joined_on?>" placeholder="joining date" name="jd"></div>
                    <div class="col-md-6"><label class="labels">Experince in year</label><input type="text" class="form-control" value="<?php echo $exp?>" placeholder="Experience" name="exp"></div>
                </div>
               
            <div class="mt-5 text-center">
            <button type="submit" id="button" name="submit"class="btn btn-primary profile-button">Save Profile</button>
        </div>
        
    </div>
</div>
</div>
</div>
</form>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script src="mainBoo.js"></script>
</body>
</html>