<?php

session_start();
include "../include/connection.php";
if (!isset($_SESSION['mySession']))
{
	header("location: login.php");
	
}
else
{
	$username= $_SESSION['mySession'];
	$sql="SELECT * FROM admin WHERE admin_username='$username'";	
	$result=mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	
   	$name=$row['admin_name'];
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="w3.css"/>
<link rel="stylesheet" href="w3-theme-blue-grey.css"/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'/>
<link rel="stylesheet" href="font-awesome.min.css"/>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>

<title>Update</title>
<?php
include "../include/connection.php";
?>
</head>

<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  
  <a href="sindex.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Admin</a>
  <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="logout" >Log Out</a>
  &nbsp;</div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>


<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">
   
         <?php echo $name;?>
         
         </h4>
         <hr/>
         <p><a href="sindex.php">Stock</a></p>
         <p><a href="supdate.php">Update</a></p>
         <p><a href="sreport.php">Report</a></p>
         <?php if($name !='lai'){
         echo '<p><a href="scustomer.php">Customer</a></p>';
         
         }
		?>

         <?php if($name =='lai'){
         echo '<p><a href="staff.php">Staff</a></p>';
         echo '<p><a href="sorder.php">Order</a></p>';
         }
         ?>
         
        </div>
      </div>
      <br/>
      
        
         
<?php
$result = mysqli_query($con,"SELECT * FROM book");
?> 

    <!-- End Left Column -->
    </div>

 <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
     
 <form action="sinsert.php" method="post" enctype="multipart/form-data">
              <center>
             
              <table>
              <tr>
              <td>Image</td>
              <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
              </tr>
              <tr>
              <td style="height: 38px">Book Name</td>
              <td style="height: 38px"><input name="book_name" type="text" contenteditable="true" class="w3-border w3-padding" required="required"/></td>
              </tr>
              <tr>
              <td>Genre ID</td>
              <td><input name="genre_id" type="text" contenteditable="true" class="w3-border w3-padding" required="required"/></td>
              </tr>
              <tr>
              <td >Book Price</td>
              <td><input name="book_price" type="text" contenteditable="true" class="w3-border w3-padding" required="required"/></td>
              </tr>
			  <tr>
              <td>Job Description</td>
              <td><form method="post">
				  <textarea cols="20" name="book_description" rows="2" contenteditable="true" class="w3-border w3-padding" required="required" ></textarea>
				  </form>
				  </td>
              </tr>
              <tr>
              <td >Book Publisher</td>
              <td><input name="book_publisher" type="text" contenteditable="true" class="w3-border w3-padding" required="required"/></td>
              </tr>
              <tr>
              <td >Book Year</td>
              <td><input name="book_year" type="text" contenteditable="true" class="w3-border w3-padding" required="required"/></td>
              </tr>
              <tr>
              <td >Book Stock</td>
              <td><input name="book_stock" type="text" contenteditable="true" class="w3-border w3-padding" required="required"/></td>
              </tr>



              </table>
              
              	  <input name="book" type="submit" value="Update" class="w3-button w3-theme" /> 
				               </center> 
              </form>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
      </div>
</body>

</html>
