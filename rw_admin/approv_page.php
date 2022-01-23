<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php
	if (isset($_GET['approve_id'])) {
		$approve_id=$_GET['approve_id'];
		$update_approve="UPDATE product_list set is_approved=1 where p_id='$approve_id'";
		$db->update($update_approve);

	}
?>
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
					<th width="8%">Author Id</th>
					<th width="8%">name</th>
					<th width="8%">Category</th>
					<th width="8%">brand</th>
					<th >desc</th>
					<th width="8%">prise</th>
					<th width="8%">Image</th>
					<th width="10%">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$admin_id=$_SESSION['id'];
						$query = "SELECT * from product_list where author_id!='$admin_id' && is_approved=0";
						if($conn_query = $db->select($query)){
							$i=0;
						while($res_query =$conn_query->fetch_assoc()){
							$i++;
						$author_id=$res_query['author_id'];
						$query_block = "SELECT * from usur_info where u_id='$author_id' && block=0";
						if($conn_query_block = $db->select($query_block)){

						while($res_query_block =$conn_query_block->fetch_assoc()){

						
					?>
				<tr class="odd gradeX">
					<td width="5%"><?php echo $i;?></td>
					<td width="8%"><?php echo $res_query_block['u_name'] ?></td>
					<td width="8%"><?php echo $res_query['p_name'] ?></td>
					<td width="8%"><?php echo $res_query['p_cat'] ?></td>
					<td width="8%"><?php echo $res_query['p_brand'] ?></td>
					<td><?php echo $fm->textShorten($res_query['p_des'],100) ?></td>
					<td width="8%"><?php echo $res_query['p_price'] ?></td>
					<td width="8%"><img src="<?php echo $res_query['p_img'] ?>" alt="" width="80%;"></td>
					<td width="10%"><a href="?approve_id=<?php echo $res_query['p_id']?>">Approve</a> || <a href="del_product.php?approbe_product_id=<?php echo $res_query['p_id']?>">Delete</a></td>
				</tr>
				<?php }}}}?>
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
