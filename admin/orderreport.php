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
		<strong>Order Report</strong><br>
		<br><br/>
 <?php
echo "Report Date : " . date("d/m/Y") . "<br>";
 ?>
</div>
<br><br/>
  
  
<table width="635" border="1" align="center" cellpadding="0" cellspacing="0">
          <thead>
            <tr bgcolor="#cccccc" style="margin-bottom:10px;">
              		<th width="90"><div align="center">Order ID</div></th>
					<th width="80"><div align="center">Customer ID</div></th>
					<th width="200"><div align="center">Order Time</div></th>
					<th width="60"><div align="center">Book ID</div></th>
					<th width="60"><div align="center">Book Name</div></th>
					<th width="60"><div align="center">Book Quantity</div></th>
            </tr>
          </thead>
          <tbody>
         <?php
			   session_start();
			   include('../include/connection.php');
								
					$result = mysqli_query($con,"SELECT * FROM `order` INNER JOIN orderdetail ON `order`.`order_id`=orderdetail.order_id INNER JOIN book ON orderdetail.book_id = book.book_id");	
								
					while($row = mysqli_fetch_array($result))
					 {					
									echo '<td><div align="center">'.$row['order_id'].'</div></td>';
									echo '<td><div align="center">'.$row['customer_id'].'</div></td>';
									echo '<td><div align="center">'.$row['order_at'].'</div></td>';
									echo '<td><div align="center">'.$row['book_id'].'</div></td>';
									echo '<td><div align="center">'.$row['book_name'].'</div></td>';
									echo '<td><div align="center">'.$row['book_quantity'].'</div></td>';
									echo '</tr>';
								}
								  
			  
			  ?>
			   
          </tbody>
</table><br>
 </div>