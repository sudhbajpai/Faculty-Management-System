<?php
include "dbconn.php";
include "adminsidebar.php";
if(count($_POST)>0){
   
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $name = $_POST['name'];
        
    $query = "UPDATE user set username='$username',name='$name' where  id='".$_GET['id']."'";
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
$result = mysqli_query($conn,"SELECT * FROM user WHERE id='".$_GET['id']."'");
$row =mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br><br>
    <center>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="upfac.php">Faculty List</a>
</div>
<div class="form-group">
<label for="username" style="color:white;">Username:</label>   
<br>
<input type="hidden"  name="username" class="txtField" value="<?php echo $row['username']; ?>">
<input type="text" name="username"  value="<?php echo $row['username']; ?>">
</div>

<br>
<div class="form-group">
<label for="username" style="color:white;">Name:</label>  <br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
</div>
<input type="submit" name="submit" value="update" class="btn btn-primary">


</form>
</center>
</body>
</html>