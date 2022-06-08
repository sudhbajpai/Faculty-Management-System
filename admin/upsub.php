<?php
include "adminsidebar.php";
include "dbconn.php";
$result = mysqli_query($conn,"SELECT id, name, branch, dept, facteach FROM subject");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
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
<br>
<br>
<center>
<h1 style="Color:White;">Update Subject</h1>
</center>
<br>
<?php
if(mysqli_num_rows($result)>0){
?>
<table class="table table-dark">
    <tr>
        <!-- <td>ID</td> -->
        <td>Name</td>
        <td>Branch</td>
        <td>Department</td>
        <td>Faculty Teaching</td>
        <td>Action</td>
    </tr>
    <?php
    
    $i =0;
    while($row=mysqli_fetch_array($result)){
    ?>
    <tr>
        <!-- <td><?php //echo $row["id"];   ?></td> -->
        <td><?php echo $row["name"];   ?></td>
        <td><?php echo $row["branch"];   ?></td>
        <td><?php echo $row["dept"];   ?></td>
        <td><?php echo $row["facteach"];   ?></td>
        <td><a  href="updatesub.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Update</a></td>
    </tr>
    <?php
    $i++;
    }   
    ?>
</table>
<?php
}
else{
    echo "No result found";
}
?>
    
</body>
</html>