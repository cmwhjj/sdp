<?php


include "../include/connection.php";

$sql="INSERT INTO book (book_name, genre_id, book_price,book_description,book_publisher,book_year,book_stock)

VALUES

('$_POST[book_name]','$_POST[genre_id]','$_POST[book_price]','$_POST[book_description]','$_POST[book_publisher]','$_POST[book_year]','$_POST[book_stock]')";

if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}

$id=mysqli_insert_id($con);
$target_dir = "../images/f";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["book"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        rename($target_file,"../images/$id.jpg");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

mysqli_close($con);
?>

<script text="text/javascript">
alert("record added!");
window.location.replace("supdate.php");
</script>