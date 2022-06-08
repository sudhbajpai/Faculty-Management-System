<?php
session_start();
include "dbconn.php";
$query = "UPDATE fac_leave SET status='Apporved' WHERE id='".$_GET['id']."'";

$result = mysqli_query($conn,$query);

if($result){
    echo "<script type='text/javascript'> alert('Sucess...'); 
		history.back();
		</script>";
}else{
    echo "<script type='text/javascript'> alert('Failed'); 
    history.back();
    </script>";
}

?>