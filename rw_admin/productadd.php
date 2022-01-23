<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Product</h2>
        <div class="block"> 
        <?php 
            if(isset($_POST['add_product'])){
                $author_id  =$_SESSION['id'];
                $p_name     =$_POST['p_name'];
                $p_cat      =$_POST['p_cat'];
                $p_sub_cat  ="non";
                $p_brand    =$_POST['p_brand'];
                $p_des      =$_POST['p_des'];
                $p_price    =$_POST['p_price'];
                $date       = date('Y-m-d h:i');

                $permited   = array('jpg', 'jpeg', 'png', 'gif');
                $file_name  = $_FILES['p_pic']['name'];
                $file_size  = $_FILES['p_pic']['size'];
                $file_temp  = $_FILES['p_pic']['tmp_name'];

                $div = explode('.', $file_name);
                $file_ext = strtolower(end($div));
                $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                $uploaded_image = "upload/".$unique_image;


                $query="INSERT into product_list(is_approved,author_id,p_name,p_cat,p_brand,p_des,p_price,p_img,upload_date,sub_category) values (1,'$author_id','$p_name','$p_cat','$p_brand','$p_des','$p_price','$uploaded_image','$date','$p_sub_cat')";
                if($db->insert($query)){
                    if(move_uploaded_file($file_temp,$uploaded_image)){
                       echo "Your product Upload success"; 
                    }
                    
                }

            }
        ?>              
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="text" name="p_name" placeholder="Enter Product Name..." class="medium" required />
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Category</label>
                    </td>
                    <td>
                        <select id="select_cat" name="p_cat" onchange="myFunction()" required>
                            <option value="">Select Category</option>
                            <?php 
                                $select_cat="SELECT * from category";
                                if($conn_cat = $db->select($select_cat)){
                                    while ($cat_res=$conn_cat->fetch_assoc()) {  
                            ?>
                            <option value="<?php echo $cat_res['categorys']?>"><?php echo $cat_res['categorys']?></option>
                        <?php }} ?>
                        </select>
                    </td>
                </tr>
              
				<tr>
                    <td>
                        <label>Brand</label>
                    </td>
                    <td>
                       <input type="text" placeholder="Enter brand Name..." name="p_brand" class="medium" />  
                    </td>
                </tr>
				
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                        <textarea class="tinymce" name="p_des"></textarea>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Price</label>
                    </td>
                    <td>
                        <input type="text" placeholder="Enter Price..." class="medium" name="p_price" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>GST</label>
                    </td>
                    <td>
                        <input type="text" name="gst" placeholder="Enter product discount" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Min Collect Offer</label>
                    </td>
                    <td>
                        <input type="number" name="offer" placeholder="Enter product offer" class="medium" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Offer price</label>
                    </td>
                    <td>
                        <input type="text" name="offer_price" placeholder="Enter product offer" class="medium" />
                    </td>
                </tr>
            
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
                        <input type="submit" name="add_product" Value="Save" />
                    </td>
                </tr>
            </table>
            </form>
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

<script>
function myFunction() {
    var x = document.getElementById("select_cat").value;
    $.ajax({
            url:'check/check_cat.php',
            data:'category='+x,
            success:function(data){
                $('#demo').html(data);
            }
    });
    
}
</script>

<!-- Load TinyMCE -->
<?php include 'inc/footer.php';?>


