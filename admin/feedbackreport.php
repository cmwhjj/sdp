<style >
.up {
  width: 800px;
  border: 2px solid black;
  margin: 30 auto;
  height: 500px auto;
  text-align:center auto;
  }
</style>
<div class="up">
<div align="center" style="margin-top:40px;"><strong>TPM Book Store</strong><br /> 
<br><br/>
		<img src='create-your-own-book.png' alt='logo' />
		<br>
		<strong>Feedback Report</strong><br>
		<br><br/>
 <?php
echo "Report Date : " . date("d/m/Y") . "<br>";
 ?>
</div>
<br><br/>
  
  
<table width="635" border="1" align="center" cellpadding="0" cellspacing="0">
          <thead>
            <tr bgcolor="#cccccc" style="margin-bottom:10px;">
              		<th width="60"><div align="center">Feedback ID</div></th>
					<th width="60"><div align="center">Customer ID</div></th>
					<th width="60"><div align="center">Feedback Scale</div></th>
					<th width="200"><div align="center">Feedback Text</div></th>
					<th width="90"><div align="center">Feedback Time</div></th>
					<th width="60"><div align="center">Customer ID</div></th>


					
					
            </tr>
          </thead>
          <tbody>
         <?php
			   session_start();
			   include('../include/connection.php');
								
					$result = mysqli_query($con,"SELECT * FROM `feedback`");	
								
					while($row = mysqli_fetch_array($result))
					 {					
									echo '<td><div align="center">'.$row['feedback_id'].'</div></td>';
									echo '<td><div align="center">'.$row['customer_id'].'</div></td>';
									echo '<td><div align="center">'.$row['feedback_scale'].'</div></td>';
									echo '<td><div align="center">'.$row['feedback_text'].'</div></td>';
									echo '<td><div align="center">'.$row['feedback_left_at'].'</div></td>';
									echo '<td><div align="center">'.$row['customer_id'].'</div></td>';
									echo '</tr>';
								}
								  
			  
			  ?>
			   
          </tbody>
</table><br>
 </div>