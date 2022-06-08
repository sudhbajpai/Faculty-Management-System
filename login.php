<?php

include "redirect.php";
$msg = "Invalid username or password"
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
                            <h5 class="mt-5">HEY, THERE</h5> <small class="para">Login to your account below.</small>
                        </div>


                        <form class="signup" action="redirect.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" name="username"
                                    id="username" required="true" value= "<?php  if (isset($_COOKIE['usercokkie'])){
                                        echo $_COOKIE['usercokkie']; } ?>">
                            </div>
                            <div class="form-group"><input type="password" class="form-control" placeholder="password"
                                    name="password" required="true" value= "<?php  if (isset($_COOKIE['usercokkie'])){
                                        echo $_COOKIE['usercokkie'];
                                    } ?>">
                            </div>

                            <!-- <input type="submit" class="btn1 btn-primary" name="submit" value="submit"> -->
                            <button class="btn1 btn-primary" type="submit" name="submit" id="submit">Login</button>
                            <div class="row text-align-center text-center">
                                <div class="col-12 col-sm-12"> <a href="fpswd.php">
                                        <p class="text-left pt-2 ml-1">Forgot password?</p>
                                    </a> </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="checkbox"  name="rememberme" id="">Remember me
                            </div>
                             <!-- <div class="row text-align-center text-center">
                                <div class="col">
                                    <input  class="btn-check" namtype="radie="options-outlined" id="primary-outlined"
                                        autocomplete="off" value="admin" name="role">
                                    <label class="btn btn-outline-primary" for="primary-outlined">Admin</label>
                                </div>
                                <div class="col">
                                    <input type="radio" class="btn-check" name="options-outlined" id="warning-outlined"
                                        autocomplete="off" value="faculty" name="role">
                                    <label class="btn btn-outline-warning" for="warning-outlined">Faculty</label>
                                </div>
                                <div class="col">
                                    <input type="radio" class="btn-check" name="options-outlined" id="success-outlined"
                                        autocomplete="off" value="user" name="role">
                                    <label class="btn btn-outline-success" for="success-outlined">User</label>
                                </div>
                            </div>  -->
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


