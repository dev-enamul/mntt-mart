<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Order details </h2>
                <div class="block"> 
       
                    <div class="cumstomer_details">
                    	<?php
                    	if(isset($_GET['u_id'])){
                    		$u_id=$_GET['u_id'];
                    		$confirm_id=$_GET['confirm_id'];
                    		$date=$_GET['date'];
                    		$select_usur_info="SELECT * from usur_info where u_id='$u_id'";
			             if($conn_usur_info=$db->select($select_usur_info)){
			              while($result_usur_info=$conn_usur_info->fetch_assoc()){


			           
                    	?>
                    	<table>
                    		<tr>
                    			<td >Name</td>
                    			<td>:</td>
                    			<td><?php echo $result_usur_info['u_name']?></td>
                    		</tr>
                    		<tr>
                    			<td>Mobile</td>
                    			<td>:</td>
                    			<td><?php echo $result_usur_info['m_number']?></td>
                    		</tr>
                    		<tr>
                    			<td>Email</td>
                    			<td>:</td>
                    			<td><?php echo $result_usur_info['email']?></td>
                    		</tr>
                    		<tr>
                    			<td>Gender</td>
                    			<td>:</td>
                    			<td><?php echo $result_usur_info['gender']?></td>
                    		</tr>
                    		<tr>
                    			<td>Zip code</td>
                    			<td>:</td>
                    			<td><?php echo $result_usur_info['zip_code']?></td>
                    		</tr>
                    		<tr>
                    			<td>Address</td>
                    			<td>:</td>
                    			<td><?php echo $result_usur_info['city']?></td>
                    		</tr>
                    		<tr>
                    			<td>Address</td>
                    			<td>:</td>
                    			<td><?php echo $result_usur_info['address']?></td>
                    		</tr>

                    	</table>
                    <?php }}}?>
                    </div>
                    <div class="cumstomer_details">
                	  <div class="cash_voucher">
                	  	<h3>Bornali stationery</h3>
                	  </div>
                	  
                	  <div class="company_address">
                	  	<div class="company_logo">
                	  		<img src="../images/Stationery Dhaka Logo copy.png" alt="" width="50%">
                	  		 <p>V.No. 0044</p>
                	  	</div>
                	  	<div class="company_logo">
                	  		 <table>
                	  		 	<tr>
                	  		 		<td>Mobile</td>
                	  		 		<td>:</td>
                	  		 		<td>01914628404</td>
                	  		 	</tr>
                	  		 	<tr>
                	  		 		<td>Gmail</td>
                	  		 		<td>:</td>
                	  		 		<td>enamul807849@gmail.com</td>
                	  		 	</tr>
                	  		 	<tr>
                	  		 		<td>Address</td>
                	  		 		<td>:</td>
                	  		 		<td>Bornali stationery,42 ,Dilkusha Dhaka-1214</td>
                	  		 	</tr>
                	  		 </table>
                	  	</div>
                	  </div>
                	  <div class="main_voucher">
                	  	<table width="100%">
                	  		<tr width="100%">
                	  			<td width="62%">Discription</td>
                	  			<td width="13%">QTY</td>
                	  			<td colspan="2" width="25%">Amount</td>
                	  		</tr>
                	  		<?php
                            $admin_id=$_SESSION['id'];
                	  	$select_order="SELECT * from card where u_id='$u_id' && compleate_order='$confirm_id' && c_date='$date' && author_id='$admin_id'";

                	  	if($con_order=$db->select($select_order)){
                	  		$sub_total=0;
                	  		$vat=0;
                	  		$i=0;
			             while ($result_order=$con_order->fetch_assoc()){
			             	$sub_total=$sub_total+($result_order['p_price']*$result_order['quantity']);
			             	 $i++;

			           
                	  ?>
                	  		<tr>
                	  			<td><?php echo $result_order['p_name'];?></td>
                	  			<td><?php echo $result_order['quantity'];?></td>
                	  			<td>৳<?php echo $result_order['p_price'];?></td>
                	  			<td>৳<?php echo $result_order['p_price']*$result_order['quantity'];?></td>
                	  		</tr>
                	  	<?php }}?> 
                	  		<tr>
                	  			<td colspan="2">Total</td>
                	  			<td></td>
                	  			<td>৳<?php echo $sub_total?></td>
                	  		</tr>
                	  	</table>
                        <a href="print.php?u_id=<?php echo $u_id;?>?&& confirm_id=<?php echo $confirm_id?>?&& date=<?php echo $date?>">Print</a> 
                	  </div>
                    </div>
               </div>
            </div>
        </div>
<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();

        $('.datatable').dataTable();
        setSidebarHeight();
    });
</script>
<?php include 'inc/footer.php';?>
