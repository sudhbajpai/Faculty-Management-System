<?php
include "conn.php";
session_start();
$facname=$_SESSION['facultyuser'];

$query ="DELETE FROM fac_leave WHERE   id='".$_GET['id']."'";

$res=mysqli_query($conn,$query);
if($res){
    echo "<script type='text/javascript'> alert('Sucess...'); 
    history.back();
    </script>";
}else{
    echo "<script type='text/javascript'> alert('Failed'); 
    history.back();
    </script>";
}

?>