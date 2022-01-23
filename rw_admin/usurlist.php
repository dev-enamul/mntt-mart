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
					<th width="8%">Name</th>
					<th width="8%">Mobile</th>
					<th width="8%">Email</th>
					<th >Address</th>
					<th width="8%">Gender</th>
					<th width="8%">Zip code</th>
					<th width="8%">City</th>
					<th width="10%">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
						$query = "SELECT * from usur_info order by u_id desc";
						if($conn_query = $db->select($query)){
							$i=0;
						while($res_query =$conn_query->fetch_assoc()){
							$i++;
						
					?>
				<tr class="odd gradeX">
					<td width="5%"><?php echo $i;?></td>
					<td width="8%"><?php echo $res_query['u_name']?></td>
					<td width="8%"><?php echo $res_query['m_number'] ?></td>
					<td width="8%"><?php echo $res_query['email'] ?></td>
					<td><?php echo $res_query['address'] ?></td>
					<td width="8%"><?php echo $res_query['gender'] ?></td>
					<td width="8%"><?php echo $res_query['zip_code'] ?></td>
					<td width="8%"><?php echo $res_query['city'] ?></td>
					<td width="15%"><?php if($res_query['block']==0){
						?>
						<a href="usur_block.php?u_id=<?php echo $res_query['u_id']?>">Block</a>
					<?php }else{?>
						<a href="usur_block.php?b_id=<?php echo $res_query['u_id']?>">Unblock</a>
					<?php }?>

					 || <a alert(are you sure delete) href="del_usur.php?u_id=<?php echo $res_query['u_id']?>">Delete</a></td>
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
