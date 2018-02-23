<?php


include "../include/connection.php";

$sql="INSERT INTO admin (admin_name, admin_username, admin_password)

VALUES

('$_POST[admin_name]','$_POST[admin_username]','$_POST[admin_password]')";

if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
mysqli_close($con);
?>

<script text="text/javascript">
alert("record added!");
window.location.replace("staff.php");
</script>