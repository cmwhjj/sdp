<style >
.up {
  width: 1000px;
  border: 2px solid black;
  margin: 30 auto;
  height: 600px auto;
  text-align:center auto;
  }
</style>
<div class="up">
<div align="center" style="margin-top:40px;"><strong>TPM Book Store</strong><br /> 
<br><br/>
		<img src='create-your-own-book.png' alt='logo' />
		<br>
		<strong>Customers Report</strong><br>
		<br><br/>
 <?php
echo "Report Date : " . date("d/m/Y") . "<br>";
 ?>
</div>
<br><br/>
  
  
<table width="635" border="1" align="center" cellpadding="0" cellspacing="0">
          <thead>
            <tr bgcolor="#cccccc" style="margin-bottom:10px;">
              		<th width="60"><div align="center">Customer ID</div></th>
					<th width="60"><div align="center">Customer Name</div></th>
					<th width="60"><div align="center">Gender</div></th>
					<th width="60"><div align="center">Username</div></th>
					<th width="60"><div align="center">Password</div></th>
					<th width="60"><div align="center">Trustworthy</div></th>
            		<th width="60"><div align="center">Phone</div></th>
            		<th width="60"><div align="center">Email</div></th>
            		<th width="60"><div align="center">DOB</div></th>
            		<th width="60"><div align="center">Time</div></th>
            
            
            </tr>
          </thead>
          <tbody>
         <?php
			   session_start();
			   include('../include/connection.php');
								
					$result = mysqli_query($con,"SELECT * FROM `customers`");	
								
					while($row = mysqli_fetch_array($result))
					 {					
									echo '<td><div align="center">'.$row['customer_id'].'</div></td>';
									echo '<td><div align="center">'.$row['customer_name'].'</div></td>';
									echo '<td><div align="center">'.$row['customer_gender'].'</div></td>';
									echo '<td><div align="center">'.$row['customer_username'].'</div></td>';
									echo '<td><div align="center">'.$row['customer_password'].'</div></td>';
									echo '<td><div align="center">'.$row['customer_trustworthy'].'</div></td>';
									echo '<td><div align="center">'.$row['customer_phone'].'</div></td>';
									echo '<td><div align="center">'.$row['customer_email'].'</div></td>';
									echo '<td><div align="center">'.$row['customer_dob'].'</div></td>';
									echo '<td><div align="center">'.$row['customer_register_at'].'</div></td>';

									
									echo '</tr>';
								}
								  
			  
			  ?>
			  
          </tbody>
</table> <br>
 </div>