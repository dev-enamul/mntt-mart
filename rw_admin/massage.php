<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Post List</h2>
        <div class="block">  
            <table class="data display datatable" id="example">
            	<style>
            		tr,td,th{
						border: 1px solid #ddd;
            		}
            	</style>
			<thead>
				<tr>
					<th width="5%">si.</th>
					<th width="10%">name</th>
					<th width="10%">Gender</th>
					<th width="10%">Email</th>
					<th width="10%">Company</th>
					<th width="10%">Mobile No</th>
					<th>desc</th>
					<th width="10%">Action</th>
			</thead>
			<tbody>
				<?php
						$query = "SELECT * from massage";
						if($conn_query = $db->select($query)){
							$i=0;
						while($res_query =$conn_query->fetch_assoc()){
							$i++;
						
					?>
				<tr class="odd gradeX">
					<td width="5%"><?php echo $i;?></td>
					<td width="10%"><?php echo $res_query['con_name'] ?></td>
					<td width="10%"><?php echo $res_query['con_gen'] ?></td>
					<td width="10%"><?php echo $res_query['con_email'] ?></td>
					<td width="10%"><?php echo $res_query['con_company_name'] ?></td>
					<td width="10%"><?php echo $res_query['con_mobile_no'] ?></td>
					<td><?php echo $res_query['con_massage'] ?></td>
					 
					<td width="10%"><a href="updact_product.php?p_id=<?php echo $res_query['p_id']?>"> </a>  <a href="delete_massage.php?del_massage=<?php echo $res_query['massage_id']?>">Delete</a></td>
				</tr>
				<?php }}?>
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
