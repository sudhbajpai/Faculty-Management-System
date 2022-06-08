<?php
include "connection.php";
session_start();

if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $frndname = $_POST['frndname'];
    $q = "SELECT * FROM user WHERE username='$user';";

    $result = mysqli_query($conn , $q);
    if(mysqli_num_rows($result)> 0) {
        // $row = mysqli_fetch_assoc($result);

        //   print_r($row);
        //  exit();
        while ($row = mysqli_fetch_assoc($result)){

            if($row['sansw'] == $frndname)
            {
                header('Location: changepswd.php');
            }
            else{
                echo "<script type='text/javascript'> alert('Wrong Answer'); 
                history.back();
                </script>";
            }
        }

    }else{
        echo "<script type='text/javascript'> alert('No username found'); 
                history.back();
                </script>";

    }


}

?>
