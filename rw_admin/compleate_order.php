<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Usur Id</th>
							<th>Total Order</th>
							<th>Total price</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						<?php
						$admin_id=$_SESSION['id'];
						$select_email="SELECT Distinct u_id, c_date from card where u_id!=0 && compleate_order=1 && author_id='$admin_id'";
			             if($conn_data=$db->select($select_email)){
			             	$i=0;
			              while($result_final=$conn_data->fetch_assoc()){
			              	$i++;

			              	$usur_id=$result_final['u_id'];
			              	$c_date=$result_final['c_date'];
			              	$select_order="SELECT * from card where u_id='$usur_id' && compleate_order=1 && c_date='$c_date' && author_id='$admin_id'";
			              	if($con_order=$db->select($select_order)){
			              		$j=0;
			              		$total_price=0;
			              	while ($result_order=$con_order->fetch_assoc()){
			              		$j=$j+1;
			              		$total_price=$total_price+($result_order['p_price']*$result_order['quantity']);
			              		}
			              	}
						?>
						<tr class="odd gradeX">
							<td><?php echo $i;?></td>
							<td><?php echo $usur_id;?></td>
							<td><?php echo $j;?></td>
							<td><?php echo $total_price;?></td>
							<td><a href="view_order.php?u_id=<?php echo $usur_id;?>?&& confirm_id=1?&& date=<?php echo $c_date?>">view</a> || <a href="?del_order_id=<?php echo $usur_id;?>">Delete</a></td>
						</tr>
					<?php }
					 } ?>
					</tbody>
				</table>
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
