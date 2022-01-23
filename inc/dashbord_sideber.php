 <?php 
  if(!isset($_SESSION['usur_id'])){?>
<script>
  location = "log.php";
</script>
  <?php  }
 ?>

 <?php
 if(isset($_GET['log_id'])){
  session_destroy();?>
  <script>
  location = "log.php";
</script>
 <?php }

 ?>

<?php
    $u_id=$_SESSION['usur_id'];
    $select_usur_data="SELECT * from usur_info where u_id='$u_id'";
    if($con_select_usur=$db->select($select_usur_data)){
      while($result_usur_info=$con_select_usur->fetch_assoc()){
      }
    }
 ?>
 <div class="panel panel-default">
              <div class="panel-heading"><h2>Account</h2></div>
          <div class="panel-body">
            <ul class="list-group">
              <li class="list-group-item"><a href="profile.php" style="display: block;">Dashbord</a></li>
              <li class="list-group-item"><a href="order_list.php" style="display: block;">Order List</a></li>
              <li class="list-group-item"><a href="sell_product.php" style="display: block;">Sell Product</a></li>
               <li class="list-group-item"><a href="usur_account.php" style="display: block;">My account</a></li>
              <li class="list-group-item"><a href="upload_list.php" style="display: block;">Upload product List</a></li>
              <li class="list-group-item"><a href="buy_list.php" style="display: block;">Buy Product</a></li>
              <li class="list-group-item"><a href="upload_painding.php" style="display: block;">Upload Painding </a></li>
              <li class="list-group-item"><a href="usur_add_product.php" style="display: block;">Add New Product</a></li>
              <li class="list-group-item"><a href="seeting.php" style="display: block;">Setting</a></li>
              <li class="list-group-item"><a href="?log_id=<?php echo $_SESSION['usur_id']?>" style="display: block;">Log out</a></li>
              
            </ul>
          </div>
        </div>