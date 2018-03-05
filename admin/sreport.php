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
		$sql = "UPDATE customers SET
		customer_trustworthy='$_POST[trust]'
		WHERE customer_id=$_POST[id];";
		if (mysqli_query($con, $sql)) {
			
		}

	
	}
		

?>

<!DOCTYPE html>
<html>
<title>Report</title>
<<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="w3.css"/>
<link rel="stylesheet" href="w3-theme-blue-grey.css"/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'/>
<link rel="stylesheet" href="font-awesome.min.css"/>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<script type="text/javascript">
 function submit(i){
 	var id = form + i;
 	document.getElementById(id).submit();
 }
</script>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
<a href="sindex.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Admin</a>
  <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="logout" >Log Out</a>
 </div>
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
      <br>
                        
          <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
   
    
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
            
            <!--order report-->
<?php

$aaa = mysqli_query($con,"SELECT * FROM `order` INNER JOIN orderdetail ON `order`.`order_id`=orderdetail.order_id INNER JOIN book ON orderdetail.book_id = book.book_id");


?>

  <table>
 <tr>
 <th>
 <p>Order ID</p>
 </th>
 <th>
 <p>Customer ID</p>
 </th>
 <th>
 <p>Order Time</p>
 </th>
 <th>
 <p>Book ID</p>
 </th>
 <th>
 <p>Book Name</p>
 </th>
 <th>
 <p>Book Quantity</p>
 </th>
 </tr>
 
   
           
<?php

while($rows = mysqli_fetch_array($aaa))
{


echo "<tr>";

echo "<td>";
echo "<h4>";
echo $rows['order_id'];
echo "</h4>";
echo "</td>";

echo "<td>";
echo "<h4>";
echo $rows['customer_id'];
echo "</h4>";
echo "</td>";

echo "<td>";
echo "<h4>";
echo $rows['order_at'];
echo "</h4>";
echo "</td>";

echo "<td>";
echo "<h4>";
echo $rows['book_id'];
echo "</h4>";
echo "</td>";

echo "<td>";
echo "<h4>";
echo $rows['book_name'];
echo "</h4>";
echo "</td>";

echo "<td>";
echo "<h4>";
echo $rows['book_quantity'];
echo "</h4>";
echo "</td>";

echo "</tr>";

}
 //to close the database connection
 mysqli_close($con);
?>
<tr>
 
 
 <th>
 <p></p>
 </th>
 <th>
 <p></p>
 </th>
 <th>
 <p></p>
 </th>
 
 <?php if($name=='lai'){
 echo "<th>";
echo '<div class="w3-button w3-theme">';
echo "<a href=\"orderreport.php?id=";
echo $rows['order_id'];
echo "\">Print</a>";
echo "</div>";
echo "</th>";
 } ?>



 </tr>


</table>

       <hr>
      
      
      
    <!-- End Middle Column -->
     	
    
    <!-- Middle Column -->
   
    
    
    

        <!--feedback report-->
          
            <div class="w3-container w3-padding">
<?php
include "../include/connection.php";
$sql="SELECT * FROM feedback WHERE admin_username='$username'";	
	$result=mysqli_query($con,$sql);

$fb = mysqli_query($con,"SELECT * FROM `feedback`");

?>

  <table>
 <tr>
 <th>
 <p>Feedback ID</p>
 </th>
 <th>
 <p>Customer ID</p>
 </th>
 <th>
 <p>Feedback Scale</p>
 </th>
 <th>
 <p>Feedback Text</p>
 </th>
 <th>
 <p>Feedback Time</p>
 </th>
 <th>
 <p>Book ID</p>
 </th>



 </tr>
 
   
           
<?php

while($rows = mysqli_fetch_array($fb))
{


echo "<tr>";

echo "<td>";
echo "<h4>";
echo $rows['feedback_id'];
echo "</h4>";
echo "</td>";

echo "<td>";
echo "<h4>";
echo $rows['customer_id'];
echo "</h4>";
echo "</td>";

echo "<td>";
echo "<h4>";
echo $rows['feedback_scale'];
echo "</h4>";
echo "</td>";

echo "<td>";
echo "<h4>";
echo $rows['feedback_text'];
echo "</h4>";
echo "</td>";

echo "<td>";
echo "<h4>";
echo $rows['feedback_left_at'];
echo "</h4>";
echo "</td>";

echo "<td>";
echo "<h4>";
echo $rows['book_id'];
echo "</h4>";
echo "</td>";




echo "</tr>";

}
 //to close the database connection
 mysqli_close($con);
?>
 <tr>
 <th>
 <p></p>
 </th>
 <th>
 <p></p>
 </th>
 <th>
 <p></p>
 </th>
 <th>
 <p></p>
 </th>
 <th>
 <p></p>
 </th>
 
 <?php if($name=='lai'){
 echo "<th>";
echo '<div class="w3-button w3-theme">';
echo "<a href=\"feedbackreport.php?id=";
echo $rows['customer_id'];
echo "\">Print</a>";
echo "</div>";
echo "</th>";
 } ?>



 </tr>


</table>

<hr>
<!--customer report-->

    <div class="w3-container w3-padding">
<?php
include "../include/connection.php";
$sql="SELECT * FROM customer WHERE admin_username='$username'";	
	$result=mysqli_query($con,$sql);

$custo = mysqli_query($con,"SELECT * FROM `customers`");

?>

  <table>
 <tr>
 <th>
 <p>Customer ID</p>
 </th>
 <th>
 <p>Name</p>
 </th>
 <th>
 <p>Username</p>
 </th>
 <th>
 <p>Trustworthy</p>
 </th>
  <th>
 <p>Phone</p>
 </th>
 <th>
 <p>Email</p>
 </th>
 <th>
 <p>Time</p>
 </th>






 </tr>
 
   
           
<?php

while($rows = mysqli_fetch_array($custo))
{


echo "<tr>";

echo "<td>";
echo "<h4>";
echo $rows['customer_id'];
echo "</h4>";
echo "</td>";

echo "<td>";
echo "<h4>";
echo $rows['customer_name'];
echo "</h4>";
echo "</td>";

echo "<td>";
echo "<h4>";
echo $rows['customer_username'];
echo "</h4>";
echo "</td>";

echo "<td>";
echo "<h4>";
echo $rows['customer_trustworthy'];
echo "</h4>";
echo "</td>";

echo "<td>";
echo "<h4>";
echo $rows['customer_phone'];
echo "</h4>";
echo "</td>";

echo "<td>";
echo "<h4>";
echo $rows['customer_email'];
echo "</h4>";
echo "</td>";


echo "<td>";
echo "<h4>";
echo $rows['customer_register_at'];
echo "</h4>";
echo "</td>";


echo "</tr>";

}
 //to close the database connection
 mysqli_close($con);
?>
 <tr>
 <th>
 <p></p>
 </th>
 <th>
 <p></p>
 </th>
 <th>
 <p></p>
 </th>
 <th>
 <p></p>
 </th>
 <th>
 <p></p>
 </th>

 <th>
 <p></p>
 </th>
 
 <?php if($name=='lai'){
 echo "<th>";
echo '<div class="w3-button w3-theme">';
echo "<a href=\"cusreport.php?id=";
echo $rows['customer_id'];
echo "\">Print</a>";
echo "</div>";
echo "</th>";
 } ?>
</tr>
</table>
<hr>
 </div>
</div>
      </div>
      </div>
      </div>
    <!-- End Middle Column -->
    </div>

    
    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card-2 w3-round w3-white w3-center">
        <div class="w3-container">
         
        </div>
      </div>
      <br>
      
          
           
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>



<footer class="w3-container w3-theme-d5">
  <p>Powered by TPM BookStore</p>
</footer>
 
<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html> 
