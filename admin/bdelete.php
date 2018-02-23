<?php
include "../include/connection.php"; 
//intval — Get the integer value of a variable
$book_id = intval($_GET['id']);
$result = mysqli_query($con,"DELETE FROM book  WHERE book_id=$book_id");
mysqli_close($con); //close database connection
header('Location: sindex.php');
?>
