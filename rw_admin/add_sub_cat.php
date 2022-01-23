<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock">
               <?php 
               if(isset($_POST['submit'])){
                $p_cat = $_POST['p_cat'];
                $s_cat = $_POST['sub_cat'];

                $query = "INSERT into sub_category(cat_id,sub_category) VALUES('$p_cat','$s_cat')";
                    if($db->insert($query)){
                        echo "Your Category is inserted";
                        } 
               }
               ?> 
                 <form action="" method="post">
                    <table class="form">
                        <tr>
                            <td>
                                <select id="select" name="p_cat" required>
                                  <option value="">Select Category</option>
                                  <?php 
                                      $select_cat="SELECT * from category";
                                      if($conn_cat = $db->select($select_cat)){
                                          while ($cat_res=$conn_cat->fetch_assoc()) {
                                  ?>
                                  <option value="<?php echo $cat_res['categorys'];?>"><?php echo $cat_res['categorys'];?></option>
                              <?php }} ?>
                              </select>
                            </td>
                        </tr>					
                        <tr>
                            <td>
                                <input type="text" placeholder="Enter Category Name..." class="medium" name="sub_cat" required />
                            </td>
                        </tr>
						            <tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>