<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock">
               <?php 
               if(isset($_GET['catid'])){
                $catid = $_GET['catid'];
                 $select_cat = "SELECT * from category where id='$catid'";
                  $conn_cat = $db->select($select_cat);
                  if($conn_cat){
                  $select_res=$conn_cat->fetch_assoc();
            
               ?>
               <?php if(isset($_POST['update'])){
                $cat_name=$_POST['update_category'];
                $upd_query = "UPDATE category SET categorys='$cat_name' where id='$catid'";
                if($db->update($upd_query)){
                  echo 'your category update success';
                }
               }


                ?> 
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="update_category" value="<?php echo $select_res['categorys']; ?>" class="medium" name="add_category" />
                            </td>
                        </tr>
						            <tr> 
                            <td>
                                <input type="submit" name="update" Value="update cat" />
                            </td>
                        </tr>
                    </table>
                    </form>
                  <?php }}?>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>