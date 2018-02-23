<?php


include "../include/connection.php";

$sql="INSERT INTO bookorder (book_name, book_id, book_quantity,notice,publisher_email,publisher_id,publisher_name)

VALUES

('$_POST[book_name]','$_POST[book_id]','$_POST[book_quantity]','$_POST[notice]','$_POST[publisher_email]','$_POST[publisher_id]','$_POST[publisher_name]')";

if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}



mysqli_close($con);
?>

<script text="text/javascript">
alert("Email sent!");
window.location.replace("sorder.php");
</script>