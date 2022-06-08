<?php
include "dbconn.php";
include "adminsidebar.php";
if(count($_POST)>0){
    
    if(isset($_POST['submit'])){
        $branch = $_POST['branch'];
        $name = $_POST['name'];
        $dept =$_POST['dept'];
        $facteach = $_POST['facteach'];
        
    $query = "UPDATE subject set name='$name',branch='$branch',dept='$dept',facteach='$facteach' where  id='".$_GET['id']."'";
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
$result = mysqli_query($conn,"SELECT * FROM subject WHERE id='".$_GET['id']."'");
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
<a href="upsub.php">Subject List</a>
</div>
<div class="form-group">
<label for="username" style="color:white;">Name:</label>   
<br>
<input type="hidden"  name="name" class="txtField" value="<?php echo $row['name']; ?>">
<input type="text" name="name"  value="<?php echo $row['name']; ?>">
</div>

<br>
<div class="form-group">
<label for="username" style="color:white;">Branch:</label>  <br>
<!-- <input type="text" name="branch" class="txtField" value="<?php //echo $row['branch']; ?>"> -->
<select name="branch"  id="">
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
</div>
<div class="form-group">
<label for="username" style="color:white;">Department:</label>  <br>
<!-- <input type="text" name="dept" class="txtField" value="<?php //echo $row['dept']; ?>"> -->
<select name="dept" id="">
            <option value="Applied Science">Applied Science </option>
            <option value="Humanities">Humanities </option>
            <option value="Engineering">Engineering </option>

        </select>
<br>
</div>
<div class="form-group">
<label for="username" style="color:white;">Faculty Teaching:</label>  <br>
<!-- <input type="text" name="dept" class="txtField" value="<?php //echo $row['facteach']; ?>"> -->
<?php
          $sql = "SELECT name FROM user WHERE role='faculty'";
          if($result = mysqli_query($conn,$sql)){
            if(mysqli_num_rows($result)>0){
              while($row=mysqli_fetch_array($result)){
                $rs = $row['name'];
                echo "<input type='radio' id='html' name='facteach' value='$rs'>
                <label for='html' style='color:white;'>$rs</label><br>";
             }

            }
          }
        
        ?>
<br>
</div>
<input type="submit" name="submit" value="update" class="btn btn-primary">


</form>
</center>
</body>
</html>