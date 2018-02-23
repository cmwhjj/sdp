<?php
include "../include/connection.php";
$sql = "UPDATE book SET
book_name='$_POST[book_name]',
genre_id='$_POST[genre_id]',
book_price='$_POST[book_price]',
book_description='$_POST[book_description]',
book_publisher='$_POST[book_publisher]',
book_year='$_POST[book_year]',
book_stock='$_POST[book_stock]'

WHERE book_id=$_POST[id];";

if (mysqli_query($con, $sql)) {
mysqli_close($con);
header('Location: sindex.php');
}
?>
