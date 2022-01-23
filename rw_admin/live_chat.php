<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
        <div class="grid_10">
            <div class="box round first grid row">
              <h2 id="massag">Live Chat</h2>
                <div class="grid_8">
                  <div class="massage_box">
                  <input id="massage" type="text" placeholder="massage"><i id="send" class="fas fa-arrow-alt-circle-right"></i>
                  </div>
                  <div class="scroll">
                  <?php 
                    if (isset($_GET['cleant_id'])) {
                      $_SESSION['cleant_id']=$_GET['cleant_id'];
                      $_cleant_id=$_GET['cleant_id'];
                        $_select_massage="SELECT * from live_chat where cleant_id='$_cleant_id' order by chat_id desc";
                        if($conne_massage=$db->select($_select_massage)){
                        while ($massage_result=$conne_massage->fetch_assoc()) {
                          # code...
                    
                  ?>
                   <div class="single_massage">
                    <?php if($massage_result['sender']=='admin'){?>
                      <div class="cliend_chat">
                        <small>you</small>
                        <div>
                          <p class="cliend_massage"><?php echo $massage_result['massage']?></p>
                        </div> 
                      </div>
                      <?php }else{?>
                      <div class="admin_chat">
                        <small><?php echo $massage_result['sender']?></small>
                        <div>
                          <p class="admin_massage"><?php echo $massage_result['massage']?></p>
                        </div> 
                      </div>
                    <?php }?>
                    </div>
                   <?php }}}?>
                  
                    
                 
                    </div>
                    
                </div>
                <div class="grid_4">
                   <div class="massage_list">
                    <?php 
                          $defarend_date="SELECT DISTINCT sender FROM live_chat";
                          if($conn_clat_list=$db->select($defarend_date)){
                            while ($result_date=$conn_clat_list->fetch_assoc()) { 
                              if($result_date['sender']!="admin"){
                                $sender=$result_date['sender'];

                              $defarend_info="SELECT * FROM live_chat where sender='$sender' order by chat_id desc limit 1"; 
                              if($conn_clat_info=$db->select($defarend_info)){
                                while ($result_info=$conn_clat_info->fetch_assoc()){
                                   

                               
                        ?>
                      <div class="single_massage">
                        <a href="?cleant_id=<?php echo $result_info['cleant_id'] ?>"><h5><?php echo $result_date['sender']?></h5></a>
                        <a href="?cleant_id=<?php echo $result_info['cleant_id'] ?>"><p> <?php echo $result_info['massage']?> <span style="float: right;"><?php echo $result_info['chat_date'] ?></span></p></a>
                      </div>
                    <?php }}}}}?>
                   </div>
              </div>
                
        </div>
      </div>
<?php include 'inc/footer.php';?>

<script>
  $(document).ready(function(){
    $("#send").click(function(){
      var massage = $("#massage").val();
       $.ajax({
          url:"classes/check_usur_name.php",
          data:"massage="+massage,
          success:function(data){
              $("#massag").html(data);
          }
        });
    });
  });
</script>