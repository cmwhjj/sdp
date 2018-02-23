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
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$sql = "UPDATE bookorder SET
		order_load='$_POST[trust]'
		WHERE border_id=$_POST[id];";
		if (mysqli_query($con, $sql)) {
			mysqli_close($con);
		}

	
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
$result = mysqli_query($con,"SELECT * FROM admin");
?> 

    <!-- End Left Column -->
    </div>

 <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
     
<form action="soinsert.php" method="post" enctype="multipart/form-data">
              <center>
             
              <table>
              <tr>
              <td style="height: 38px">Book Name</td>
              <td style="height: 38px"><input name="book_name" type="text" contenteditable="true" class="w3-border w3-padding" required="required"/></td>
              </tr>
              <tr>
              <td>Book ID</td>
              <td><input name="book_id" type="text" contenteditable="true" class="w3-border w3-padding" required="required"/></td>
              </tr>
              <tr>
              <td >Book Quantity</td>
              <td><input name="book_quantity" type="text" contenteditable="true" class="w3-border w3-padding" required="required"/></td>
              </tr>
			  <tr>
              <td>Marked</td>
              <td><form method="post">
				  <textarea cols="20" name="notice" rows="2" contenteditable="true" class="w3-border w3-padding" required="required" ></textarea>
				  </form>
				  </td>
              </tr>
              <tr>
              <td >Publisher Email</td>
              <td><input name="publisher_email" type="email" contenteditable="true" class="w3-border w3-padding" required="required"/></td>
              </tr>
              <tr>
              <td >Publisher ID</td>
              <td><input name="publisher_id" type="text" contenteditable="true" class="w3-border w3-padding" required="required"/></td>
              </tr>
              <tr>
              <td >Publisher Name</td>
              <td><input name="publisher_name" type="text" contenteditable="true" class="w3-border w3-padding" required="required"/></td>
              </tr>
              


              



              </table>
              
              	  <input name="bookorder" type="submit" value="Order" class="w3-button w3-theme" /> 
				               </center> 
              </form>
            </div>
          </div>
        </div>
      </div>
       <div class="w3-container w3-card-2 w3-white w3-round w3-margin">   
  <table>
 <tr>
 <th>
 <p>Order ID</p>
 </th>
 <th>
 <p>Book Name</p>
 </th>
 <th>
 <p>Quantity</p>
 </th>
 <th>
 <p>Notice</p>
 </th>
 <th>
 <p>Loading</p>
 </th>
 <th>
 <p>Publisher ID</p>
 </th>
 
 <th>
 <p>Publisher Name</p>
 </th>
<th>
 <p>Order date</p>
 </th>

 </tr>
 
   
           
<?php
include "../include/connection.php";
$sql="SELECT * FROM bookorder";	
$result=mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result))
{


echo "<tr>";

echo "<td>";
echo "<h4>";
echo $row['border_id'];
echo "</h4>";
echo "</td>";

echo "<td>";
echo "<h4>";
echo $row['book_name'];
echo "</h4>";
echo "</td>";

echo "<td>";
echo "<h4>";
echo $row['book_quantity'];
echo "</h4>";
echo "</td>";

echo "<td>";
echo "<h4>";
echo $row['notice'];
echo "</h4>";
echo "</td>";

echo "<td>";
echo "<h4>";
echo '<form method="post" id="form'.$row['border_id'].'"><select name="trust" onChange="submit('.$row['border_id'].')">
		<option value="Non"';if($row['order_load']=="Non"){echo'selected';}echo'>Non</option>
		<option value="Get"';if($row['order_load']=="Get"){echo'selected';}echo'>Get</option></select>
		<input type="hidden" name="id" value="'.$row['border_id'].'"></form>';
echo "</h4>";
echo "</td>";

echo "<td>";
echo "<h4>";
echo $row['publisher_id'];
echo "</h4>";
echo "</td>";


echo "<td>";
echo "<h4>";
echo $row['publisher_name'];
echo "</h4>";
echo "</td>";

echo "<td>";
echo "<h4>";
echo $row['order_at'];
echo "</h4>";
echo "</td>";

echo "</tr>";

}
mysqli_close($con); //to close the database connection
?>
</table>
      </div>
      </div>
      </div>
     
</div>
</body>

</html>
