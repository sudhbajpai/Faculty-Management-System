<?php
session_start();
include "adminsidebar.php";
include "dbconn.php";

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
    <h2>Create Subject</h2>
    <form method="post" id="faculty" action="subject.php" method="POST">
        <label>Name </label>
        <br>
        <input type="text" name="name" id="name" placeholder="Subejct name">
        <br>
        <br>
        <label>Branch</label>
        <br>
        <!-- <input type="text" name="branch" id="name" placeholder="Branch"> -->
      <select name="branch" id="">
        <option value="phy">PHYSICS</option>
        <option value="chem">CHEMISTRY</option>
        <option value="math">MATHEMATICS</option>
        <option value="human">HUMANITIES</option>
        <option value="sport">SPORTS</option>
        <option value="CE">Civil Engineering</option>
        <option value="IT">Information Technology</option>
        <option value="CSE">Computer Science & Engineering</option>
        <option value="EE">Electrical Engineering</option>
        <option value="ME">Mechenical Engineering</option>
        <option value="ECE">Electronics & Communication Engineering</option>
      </select>

        <br>
        <br>
        <label class="form-label">Department</label>
        <br>
        <!-- <input type="text" name="dept" id="name" placeholder="Department"> -->
        <select name="dept" id="">
            <option value="Applied Science">Applied Science </option>
            <option value="Humanities">Humanities </option>
            <option value="Engineering">Engineering </option>

        </select>
        <br>
        <br>
        <label>Faculty Teaching</label>
        <br>
        <!-- <input type="text" name="frndname" id="name" placeholder="name"> -->
        <?php
          $sql = "SELECT name FROM user WHERE role='faculty'";
          if($result = mysqli_query($conn,$sql)){
            if(mysqli_num_rows($result)>0){
              while($row=mysqli_fetch_array($result)){
                $rs = $row['name'];
                echo "<input type='radio' id='html' name='facteach' value='$rs'>
                <label for='html'>$rs</label><br>";
             }

            }
          }
        
        ?>
        <br>
        <br>
        <button type="submit" id="button" name="submit"class="btn btn-primary" style="border-radius: 10px;">submit</button>

    </form>

    <?php
    
    if (isset($_POST['submit'])){

      $name = $_POST['name'];
      $branch = $_POST['branch'];
      $dept = $_POST['dept'];
      $facteach = $_POST['facteach'];

      $query = "INSERT INTO subject (name,branch,dept,facteach) VALUES('$name','$branch','$dept','$facteach')";
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
</div>
</div>
<section>
<div class="mainB" style = "display:flex;"> 
        <a href="delsub.php" class="btn btn-danger" type="button" style="border-radius: 10px;">Delete</a>
        <a href="upsub.php" class="btn btn-success" type="button" style="border-radius: 10px;">Update</a>
        <a href="viewsub.php" class="btn btn-warning" type="button" style="border-radius: 10px;">View</a>
 </div>
</section>


  


            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script src="mainBoo.js"></script>
</body>
</html>