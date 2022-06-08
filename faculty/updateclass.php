<?php
session_start();
include "conn.php";
include "sidebarfac.php";
if(count($_POST)>0){
    
    if(isset($_POST['submit'])){
        $cname = $_POST['cname'];
        $branch = $_POST['branch'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $fname=$_POST['fname'];
        
    $query = "UPDATE class set cname='$cname',fname='$fname',cbranch='$branch',cdate='$date',time='$time' where  id='".$_GET['id']."'";
    $res = mysqli_query($conn,$query);
    if($res){
        echo "<script type='text/javascript'> alert('Sucess...'); 
		history.back();
		</script>";
    }
    else{
        echo "<script type='text/javascript'> alert('Failed'); 
		history.back();
		</script>";
    }
    }


}
$result = mysqli_query($conn,"SELECT * FROM class WHERE id='".$_GET['id']."'");
$row =mysqli_fetch_array($result);
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
              <div class="user">
          </div>
      </div>

    <br><br><br>
    <center>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="upclass.php">Class List</a>
</div>
<div class="form-group">
<label for="username" style="color:white;">Name:</label>   
<br>
<input type="hidden"  name="cname" class="txtField" value="<?php echo $row['cname']; ?>">
<input type="text" name="cname"  value="<?php echo $row['cname']; ?>">
</div>

<br>
<div class="form-group">
<label for="username" style="color:white;">Faculty Name:</label>  <br>
<input type="text" name="fname" id="name" value="<?php echo $_SESSION['facultyuser'];?>" readonly>
<br>
</div>
<div class="form-group">
<label for="username" style="color:white;">Branch:</label>  <br>
<!-- <input type="text" name="dept" class="txtField" value="<?php //echo $row['cbranch']; ?>"> -->

<select name="branch" id="">
            <option value="Applied Sciences">Applied Sciences</option>
            <option value="Humanities">Humanities</option>
            <option value="Engineering">Engineering</option>
            <option value="Management Technology">Management Technology</option>
        </select>
<br>
</div>
<div class="form-group">
<label for="username" style="color:white;">Date:</label>  <br>
<input type="date" name="date" id="" value="<?php echo $row['cdate']; ?>">
<br>
</div>
<div class="form-group">
<label for="username" style="color:white;">Time:</label>  <br>
<input type="time" name="time" id="" value="<?php echo $row['time']; ?>">
<br>
</div>
<input type="submit" name="submit" value="update" class="btn btn-primary">


</form>
</center>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script src="mainBoo.js"></script>
</body>
</html>