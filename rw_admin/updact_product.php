<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Product</h2>
        <div class="block"> 
        <?php 
            if(isset($_POST['add_product'])){
                $p_name     =$_POST['p_name'];
                $p_cat      =$_POST['p_cat'];
                $p_sub_cat  =$_POST['p_sub_cat'];
                $p_brand    =$_POST['p_brand'];
                $p_des      =$_POST['p_des'];
                $p_price    =$_POST['p_price'];
                $gst        =$_POST['gst'];
                $offer      =$_POST['offer'];
                $offer_price=$_POST['offer_price'];
                $date       = date('Y-m-d h:i');
                $p_id=$_GET['p_id'];

                $permited   = array('jpg', 'jpeg', 'png', 'gif');
                $file_name  = $_FILES['p_pic']['name'];
                $file_size  = $_FILES['p_pic']['size'];
                $file_temp  = $_FILES['p_pic']['tmp_name'];

                $div = explode('.', $file_name);
                $file_ext = strtolower(end($div));
                $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                $uploaded_image = "upload/".$unique_image;


                $update_query="UPDATE product_list set p_name='$p_name',p_cat='$p_cat', p_brand='$p_brand',p_des='$p_des',p_price='$p_price',p_discount='$gst',offer='$offer',sub_category='$p_sub_cat',offer_price='$offer_price',p_img='$uploaded_image',upload_date='$date' where p_id='$p_id'";
                if($db->update($update_query)){
                    if(move_uploaded_file($file_temp,$uploaded_image)){
                        echo "Your Product update success";
                    }
                }

            }

            if(isset($_GET['p_id'])){
                        $p_id=$_GET['p_id'];
                        $query_select = "SELECT * from product_list where p_id='$p_id'";
                        if($conn_query = $db->select($query_select)){
                        while($res_query =$conn_query->fetch_assoc()){
                        
        ?>            
        <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="text" name="p_name" value="<?php echo $res_query['p_name'];?>" class="medium" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Category</label>
                    </td>
                    <td>
                        <select id="select" name="p_cat" id="mySelect" onchange="myFunction()" required>
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
                        <label>Sub Category</label>
                    </td>
                    <td>
                        <select id="select" name="p_sub_cat" required>
                            <option>Select Sub Category</option>
                            <?php 
                                $category=$cat_res['categorys'];
                                $sub_select_cat="SELECT * from sub_category";
                                if($sub_conn_cat = $db->select($sub_select_cat)){
                                    while ($sub_cat_res=$sub_conn_cat->fetch_assoc()) {
                                         
                            ?>      
                        <option value="<?php echo $sub_cat_res['sub_category'];?>"><?php echo $sub_cat_res['sub_category'];?></option> 
                       
                            
                        <?php }} ?>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Brand</label>
                    </td>
                    <td>
                       <input type="text" value="<?php echo $res_query['p_brand'];?>"  name="p_brand" class="medium" />  
                    </td>
                </tr>
                
                 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                        <textarea class="tinymce" name="p_des"><?php echo $res_query['p_des'];?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Price</label>
                    </td>
                    <td>
                        <input type="text"  value="<?php echo $res_query['p_price'];?>"  class="medium" name="p_price" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>GST</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $res_query['p_discount'];?>" name="gst" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Min Collect Offer</label>
                    </td>
                    <td>
                        <input type="number" name="offer" value="<?php echo $res_query['offer'];?>"class="medium" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Offer price</label>
                    </td>
                    <td>
                        <input type="text" name="offer_price" value="<?php echo $res_query['offer_price'];?>" class="medium" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label></label>
                    </td>
                    <td>
                        <img style="width: 70px; height: auto;"src="<?php echo $res_query['p_img'];?>" alt="" >
                    </td>
                </tr>
            <?php if(isset($_GET['view_id'])){?>
                <tr>
                    <td></td>
                    <td><a href="usur_product_list.php">GO BACK</a></td>
                </tr>
                      <?php  }else{?>
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <input type="file" name="p_pic" required />
                    </td>
                </tr>
        
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="add_product" Value="Update" />
                    <?php }?>
                    </td>
                </tr>
            </table>
            </form>
        <?php }}}?>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
<?php include 'inc/footer.php';?>


