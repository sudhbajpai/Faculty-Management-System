<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
$facname =$_SESSION['Loginuser'];

if($facname == NULL){
    echo "<script type='text/javascript'> alert('Please login'); 
		history.back();
		</script>";
    }else{

    }

?>


