<?php
include "../include/connection.php"; 
//intval â€” Get the integer value of a variable
$id = intval($_GET['id']);
$result = mysqli_query($con,"DELETE from admin WHERE admin_id=$id");
mysqli_close($con); //close database connection
header('Location: staff.php');
?>
