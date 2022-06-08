<?php
session_start();
include "conn.php";
include "usersidebar.php";

if(isset($_POST['submit'])){

    $fname=$_POST['fname'];
    $query1 = "SELECT * FROM userinfo WHERE name='$fname'";
    $query2 = "SELECT * FROM user WHERE name='$fname'";
    $query3 = "SELECT * FROM subject where facteach='$fname'";
    $query4 = "SELECT * FROM class where fname='$fname'";
    $query5 = "SELECT * FROM certification where fname='$fname'";
    $query6 = "SELECT * FROM achieve where fname='$fname'";


    $res1= mysqli_query($conn,$query1);
    $res2= mysqli_query($conn,$query2);
    $res3= mysqli_query($conn,$query3);
    $res4= mysqli_query($conn,$query4);
    $res5= mysqli_query($conn,$query5);
    $res6= mysqli_query($conn,$query6);

      $userinfotabele = mysqli_fetch_assoc($res1);
      $usertable = mysqli_fetch_assoc($res2);
     // $facteaching = mysqli_fetch_assoc($res3);
      $classtable = mysqli_fetch_assoc($res4);
      $certtable = mysqli_fetch_assoc($res5);
      $achtable = mysqli_fetch_assoc($res6);
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


<br><br>
            <table style="color:white;" class="table table-dark">
                <tr>
                    <th>Name</th>
                    <th>Experience</th>
                    <th>Email</th>
                    <th>Subject Teaching</th>
                    <th>Achievements</th>
                    <th>certification name</th>
                </tr>
                 <?php //while( 
                   // $userinfotabele = mysqli_fetch_assoc($res1) && $usertable = mysqli_fetch_assoc($res2) && 
                   // $facteaching = mysqli_fetch_assoc($res3) &&  $classtable = mysqli_fetch_assoc($res4) &&  
                   // $certtable = mysqli_fetch_assoc($res5)&& 
                    //$achtable = mysqli_fetch_assoc($res6)){   ?> 
                <?php while ($facteaching =mysqli_fetch_array($res3)) { ?>
                    <tr>
                        <td>
                            <?php echo $userinfotabele['name'] ?>
                </td>
                <td>
                            <?php echo $userinfotabele['exp'] ?>
                            </td>
                            <td>
                            <?php echo $userinfotabele['email'] ?>
                            </td>
                            <td>
                            <?php echo $facteaching['name'] ?>
                        </td>
                            <td>
                            <?php echo $achtable['atype'] ?>
                        </td>
                            <td>
                            <?php echo $certtable['cername'] ?>
                        </td>
                         
                    </tr>
                    <?php  }  ?>
            </table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script src="mainBoo.js"></script>
</body>
</html>