<div class="top-bar animate-dropdown">
        <div class="container">
          <div class="header-top-inner">
            <div class="cnt-account">
              <ul class="list-unstyled">

              <?php
 if(isset($_GET['log_id'])){
  session_destroy();?>
  <script>
  location = "log.php";
</script>
 <?php }?>

 
                <?php if (!isset($_SESSION['usur_id'])) {
                  # code...
              ?>
                 <li><a href="nolog.php"><i class="icon fa fa-plus"></i>Register</a></li>
                <li><a href="log.php"><i class="icon fa-sign-in"></i>Log in</a></li>
              <?php }else{?>
                <li><a href="profile.php"><i class="icon fa fa-user"></i>Profile</a></li>
                
                <li><a href="?log_id=<?php echo $_SESSION['usur_id']?>"><i class="icon fa-sign-out"></i>Log Out</a></li>

              <?php }?>
              </ul>
            </div>

         <div class="cnt-block">
              <ul class="list-unstyled list-inline">
                
                <li class="dropdown dropdown-small">
                  <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">Language </span><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Bangla</a></li>
                    <li><a href="#">English</a></li>
                    
                  </ul>
                </li>
              </ul>
            </div> 
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="main-header">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
              <div class="logo">
                <a href="index.php">
                  <h2 style="color: #fff; font-weight: bold; margin-top: -3px;">Mntt-Group</h2>
               <!-- <img src="assets/images/logo.png" alt="">-->
                </a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
              <div class="search-area">
                <form action="searchpage.php" method="GET">
                  <div class="control-group">
                    
                    <input name="res_search" class="search-field" placeholder="Search" />
                    <input class="search-button" type="submit" value="search" style="width: 89px; padding: 10px;">
                     
                  </div>
                </form>
              </div>
              <!-- SEARCH AREA : END -->        
            </div>

      <?php if(isset($_SESSION['usur_id'])){ ?>

          <?php
    $u_id=$_SESSION['usur_id'];
    $i=0;
    $price=0;
    $select_usur_data="SELECT * from card where u_id=0 && buy_usur_id='$u_id'";
    if($con_select_usur=$db->select($select_usur_data)){
      while($result_usur_info=$con_select_usur->fetch_assoc()){
        $i++;
        $price=($result_usur_info['p_price']*$result_usur_info['quantity'])+$price;
      }}
     
  
 ?>



            <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
              <!-- SHOPPING CART DROPDOWN -->
              <div class="dropdown dropdown-cart">
                <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                  <div class="items-cart-inner">
                    <div class="basket">
                      <i class="glyphicon glyphicon-shopping-cart"></i>
                    </div>
                    <div class="basket-item-count"><span class="count"><?php echo $i;?></span></div>
                    <div class="total-price-basket">
                      <span class="lbl">Cart -</span>
                    </div>
                  </div>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="cart-item product-summary">
                      <div class="row">
                        <div class="col-xs-4">
                          <div class="image">
                            <a href="detail.html"><img src="assets/images/Pigeon.png" alt=""></a>
                          </div>
                        </div>
                        <div class="col-xs-7">
                          <h3 class="name"><a href="index8a95.html?page-detail">নতুন কবুতর</a></h3>
                          <div class="price"><?php echo $price;?></div>
                        </div>
                        <div class="col-xs-1 action">
                          <a href="#"><i class="fa fa-trash"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <div class="clearfix cart-total">
                      <div class="pull-right">
                        <span class="text">মোট :</span><span class='price'><?php echo $price;?></span>
                      </div>
                      <div class="clearfix"></div>
                      <a href="cart.php" class="btn btn-upper btn-primary btn-block m-t-20">চেক করুন</a> 
                    </div>
                  </li>
                </ul>
              </div>
              <!-- SHOPPING CART DROPDOWN : END -->       
            </div>
            <?php }?>
          </div>
        </div>
      </div>
      