<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock">
               <?php 
               if(isset($_POST['submit'])){
                $categorys = $_POST['add_category'];
                $cat_icon  = $_POST['cat_icon'];

                $catquery="SELECT * FROM category where categorys='$categorys'";
                  $category=$db->select($catquery);
                  if($category){
                    echo "This category is alrady exit";
                    } else{
                        $query = "INSERT into category(categorys,cat_icon) VALUES('$categorys','$cat_icon')";
                        if($db->insert($query)){
                            echo "Your Category is inserted";
                        }
                    }
               }
                 
 
               ?> 
                 <form action="" method="post">
                    <table class="form">
                        <tr>
                            <td>
                                <input type="text" placeholder="Enter your Catehpru Icon" class="medium" name="cat_icon" required/>
                            </td>
                        </tr>					
                        <tr>
                            <td>
                                <input type="text" placeholder="Enter Category Name..." class="medium" name="add_category" required/>
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