<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="../assignment/w3.css"/>
<link rel="stylesheet" href="../assignment/w3-theme-blue-grey.css"/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'/>
<link rel="stylesheet" href="../assignment/font-awesome.min.css"/>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>

<title>Edit</title>
</head>

<body class="w3-theme-l5"><center>

<div class="w3-container">

<?php
include "../include/connection.php";
$book_id = intval($_GET['id']); //intval â€” Get the integer value of a variable
$result = mysqli_query($con,"SELECT * FROM book WHERE book_id=$book_id");
while($row = mysqli_fetch_array($result))
{
?>


<form action="updated.php" method="post">
              <center>
             
              <table>
              <tr>
              <td style="height: 38px">Book Name</td>
              <td style="height: 38px"><input name="book_name" type="text" contenteditable="true" class="w3-border w3-padding" required="required" value="<?php echo $row['book_name'] ?>"/></td>
              </tr>
              <tr>
              <td>Genre ID</td>
              <td><input name="genre_id" type="text" contenteditable="true" class="w3-border w3-padding" required="required" value="<?php echo $row['genre_id'] ?>"/></td>
              </tr>
              <tr>
              <td>Book Price</td>
              <td><input name="book_price" type="text" contenteditable="true" class="w3-border w3-padding" required="required" value="<?php echo $row['book_price'] ?>"/></td>
              </tr>
			  <tr>
              <td>Book Description</td>
              <td><form method="post">
				  <textarea cols="20" name="book_description" rows="2" contenteditable="true" class="w3-border w3-padding" required="required" ><?php echo $row['book_description'] ?></textarea>
				  </form>
				  </td>
				</tr>
				<tr>
              <td>Book Publisher</td>
              <td><input name="book_publisher" type="text" contenteditable="true" class="w3-border w3-padding" required="required" value="<?php echo $row['book_publisher'] ?>"/></td>
              </tr>
				<tr>
              <td>Book Year</td>
              <td><input name="book_year" type="text" contenteditable="true" class="w3-border w3-padding" required="required" value="<?php echo $row['book_year'] ?>"/></td>
              </tr>
              <tr>
              <td>Book Stock</td>
              <td><input name="book_stock" type="text" contenteditable="true" class="w3-border w3-padding" required="required" value="<?php echo $row['book_stock'] ?>"/></td>
              </tr>


              </table>
              
              	  <input name="book" type="submit" value="Edit" class="w3-button w3-theme" /> 
				               </center> 
<input type="hidden" name="id" value="<?php echo $row['book_id'] ?>"/>             
 </form>
 
 <?php
}
mysqli_close($con);
?>
</div>
</center></body>

</html>


