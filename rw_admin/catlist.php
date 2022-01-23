<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead style="border: 1px solid">
						<tr>
							<th>Serial No.</th>
							<th>cat Id</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbodystyle="border: 1px solid">
					<?php
						$query = "SELECT * FROM category order by id DESC";
						$insert_category = $db->select($query);
						if ($insert_category) {
							$i=0;
						while ( $result = $insert_category->fetch_assoc()) {
							$i++;
					?>
						<tr class="odd gradeX"style="border: 1px solid">
							<td style="border: 1px solid"><?php echo $i; ?></td>
							<td style="border: 1px solid"><?php echo $result['id']?></td>
							<td style="border: 1px solid"><?php echo $result['categorys']?></td>
							<td style="border: 1px solid"><a href="editcat.php?catid=<?php echo $result['id'] ?>">Edit</a> || <a href="del_cat.php?catid=<?php echo $result['id'] ?>">Delete</a></td>
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

