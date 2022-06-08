<?php
include "adminsidebar.php";
$conn = mysqli_connect("localhost","root","","userdb");

$query = "SELECT * FROM user WHERE role='faculty'";
$result = mysqli_query($conn , $query);
// $db_row = mysqli_fetch_array($result);
$columname ="name";


if (isset($_POST['submit'])){
    $uname = $_POST['username'];
    $q1 = "DELETE FROM user WHERE username='$uname' and role='faculty';";

    $result1 = mysqli_query($conn,$q1);

    if($result1 == NULL){
        echo "<script type='text/javascript'> alert('Please try again..'); 
		history.back();
		</script>";
    }
    else{
        echo "<script type='text/javascript'> alert('Sucess..'); 
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
    <title>Delete Faculty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- <br><br><br><br><br>
    <h1 class="text-center" style="color:White;margin: 0 0 25px 105px;">Delete Faculty</h1>
    <br> -->
      
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
    <center>

<div class="main"> 
    <div class="faculty">
    <h2>Delete Faculty</h2>
    <form method="post" id="faculty" action="delfac.php" method="POST">
        <label>Enter  Username.. </label>
        <br>
        <input type="text" name="username" id="name" placeholder="username">
      
        <br>
        <br>
        
        <button type="submit" id="button" name="submit"class="btn btn-danger" style="border-radius: 10px;">Delete</button>

    </form>

 
</div>
</div>
</body>

</html>