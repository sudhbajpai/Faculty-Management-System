<?php
include "connection.php";
 session_start();

if(isset($_POST['submit'])){
    $newpswd = $_POST['newpswd'];
    $user = $_POST['username'];
    $qu = "UPDATE user SET  password='$newpswd' where username='$user';";

    $result = mysqli_query($conn , $qu);
    //  $row1 = mysqli_fetch_assoc($result);

    //   print_r($row1);
    //    exit();
        if ($result == NULL){
            echo "<script type='text/javascript'> alert('please try again'); 
                history.back();
                </script>";
        }else{
            echo "<script type='text/javascript'> alert('Sucess please login'); 
                window.location.href='login.php';
                </script>";
        }



}
// else{
//     echo "<script type='text/javascript'> alert('No username found'); 
//                 history.back();
//                 </script>";


// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <script src="/Assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="login.css">
    <title>Sign in</title>
</head>

<body>
    <div class="loginbg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mx-auto py-4 px-0">
                    <div class="card p-0 ">
                        <div class="card-title text-center">
                            <h5 class="mt-5">No, Worries!</h5> <small class="para">Reset Your Passowrd Now!.</small>
                        </div>


                        <form class="signup" action="changepswd.php" method="POST">
                             <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" name="username"
                                    id="username" required="true">
                            </div>
                             
                            <div class="form-group">
                                <label for="freind name">Enter New password</label><br>
                                <br>
                                <input type="text" class="form-control" placeholder="Enter Password" name="newpswd"
                                    id="username" required="true">
                            </div>
                            <br>
                            

                            <button class="btn1 btn-primary" type="submit" name="submit" id="submit">Reset</button>
                            <div class="row text-align-center text-center">
                                <div class="col-12 col-sm-12"> <a href="login.php">
                                        <p class="text-left pt-2 ml-1">Back to login</p>
                                    </a> </div>
                            </div>
                            <br>
                            
                            <br> 



                    </div>
                </div>

                </form>
            </div>
        </div>
    </div>
    </div>




</body>

</html>
