<?php
session_start();
include "conn.php";
include "sidebarfac.php";
include "logincheck.php";

if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $atype =$_POST['atype'];
        $aname =$_POST['aname'];
        $dateach=$_POST['dateach'];



    
    $query = "INSERT INTO achieve (fname,atype,aname,dateach) VALUES('$fname','$atype','$aname','$dateach')";
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
    <link rel="stylesheet" href="css/style.css">
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

      
<!--main form starts-->

<div class="main"> 
    <div class="faculty">
    <h2>Achievement</h2>
    <form  id="faculty" action="achieve.php" method="POST">
        <label>Faculty Name </label>
        <br>
        <input type="text" name="fname" id="name" value="<?php echo $_SESSION['facultyuser'];?>" readonly>
        <br>
        <br>
        <label>Achievement type</label>
        <br>
        <input type="text" name="atype" id="name" placeholder="Achievement type">
        <br>
        <br>
        <label for="anmae">Achievement Name</label>
        <input type="text" name="aname" id="">
        <br>
        <br>
        <label class="form-label">Date Achieved</label>
        <br>
        <input type="date" name="dateach" id="">
        <br>
        <br>

        <button type="submit" id="button" name="submit"class="btn btn-primary" style="border-radius: 10px;">Add</button>

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