
<!DOCTYPE html>
<html>
<title>Welcome TPM BookStore</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../assignment/w3.css">
<link rel="stylesheet" href="../../assignment/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="../../assignment/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4">Admin</a>&nbsp;&nbsp;&nbsp;
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
   
         Log in
         
         </h4>
         <hr/>
          <h1><p><b>Welcome to TPM
          Bookstore
           </b></p></h1>
           
          
         
         
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
   <form method="post">
 <table position="center">

<tr class="signin">
<td colspan="2" style="height: 25px">
<b>
Sign in
</b>
</td>
</tr>

<tr>
<td style="height: 30px">
Username
</td>
<td >
<input name="username" type="text" required="required" style="width:150px"/>
</td>
</tr>

<tr>
<td>
Password
</td>
<td style="width: 148px">
<input name="password" type="password" required="required" style="width:150px"/>
</td>
</tr>

<tr>
<td colspan="2">
<input name="login" type="submit" value="Log in" />
</td>
</tr>
</table>
</form>

<!--log in coding-->

<?php
include "../include/connection.php";

   if($_SERVER["REQUEST_METHOD"] == "POST") 
   { 
   // username and password sent from Form 
  $username=mysqli_real_escape_string($con,$_POST['username']); 
  $password=mysqli_real_escape_string($con,$_POST['password']); 
  //$password=md5($password);// Encrypted Password
$sql="SELECT * FROM admin WHERE admin_name='$username' and admin_password='$password'";

if ($result=mysqli_query($con,$sql)) 
{ 
// Return the number of rows in result set 
$rowcount=mysqli_num_rows($result);
    echo $rowcount;
// Free result set
 mysqli_free_result($result); 
 }
 
mysqli_close($con);

if($rowcount==1)
 { 
 session_start();
  $_SESSION['mySession']=$username;
   header("location: sindex.php");
    } 
    else 
    { 
    $error=printf("Your Login Name or Password is invalid. Please re login<br/><br/>");

     }
} ?>
<!--log in coding-->
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
