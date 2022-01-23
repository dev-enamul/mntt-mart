<section class="live_chat">
    <div class="live_chat_head">
      
      <p><span id="show_chat_usur"><?php if(isset($_SESSION['chat_usur_name'])) {
        echo $_SESSION['chat_usur_name'];
      }else{echo "Contact us";} ?></span><a class="fas fa-angle-double-up" id="slide_togle"></a></p>
    </div>
    <div class="massage_box" id="massage_box" class="finished_info">
       <div id="chat_now">
         
       </div>
      <?php if(!isset($_SESSION['chat_usur_name'])) {?>
    <div class="live_chat_information" id="none_style" style="">
      <input id="live_email" type="email" placeholder="Your email(requird)">
      <input type="submit" value="Start Chat" id="chat_start">
    </div>
  <?php }?>
    <div class="chat_box massanger">
      <input id="massage" type="text" placeholder="massage"><span  id="send_massage" class="glyphicon glyphicon-send"></span>
      <a href="#" class="fab fa-facebook-f"></a>
    </div>
    </div>
</section>
<footer id="footer" class="footer color-bg">
     
      <!--footer section is start here-->
        <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-7 fotter_home">
             <div class="footer_menuoption">
              <ul>
                <li><a href="#"><b style="color: #fff; font-size: 20px;">Mntt-group</b></a></li>
                 <li><a href="#"> আমাদের ঠিকানা</a></li>
                  <li><a href="#">হোম</a></li>
                   <li><a href="#">অর্ডার দেয়ার নিয়ম </a></li>
                    <li><a href="#">সাইট ম্যাপ</a></li>
                     <li><a href="#">আমাদের পার্টনার</a></li>
              </ul>
              </div>

              <hr>
              <div class="footer_menuoption">
              <ul>
                <li><a href="#"><b style="color: #fff; font-size: 20px;">পেমেন্ট</b></a></li>
                 <li><a href="#">পণ্য পরিবর্তন প্রক্রিয়া </a></li>
                  <li><a href="#">রিফান্ড পলিসি</a></li>
                   <li><a href="#">পরামর্শ/অভিযোগ</a></li>
                    
              </ul>
              </div>
              <hr>
                <div class="footer_menuoption">
              <ul>
                <li><a href="#"><b style="color: #fff; font-size: 20px;">পেমেন্ট মাধ্যম</b></a></li>
                 <li><a href="#">ক্যাশ অন</a></li>
                 <img src="assets/images/footer-cod.png" alt="cash">
                 <img src="assets/images/footer-bkash.png" alt="cash">
                 <img src="assets/images/footer-bdbl.png" alt="cash">
                 <img src="assets/images/footer-visa.png" alt="cash">
                 <img src="assets/images/footer-mastercard.png" alt="cash">
                 <!--<img src="assets/images/footer-ipay.png" alt="cash">-->
                   
              </ul>
              </div>
              <hr>
                <div class="footer_menuoption">
              <ul>
                <p style="color: #ddd;">Mntt এ্যাপ ডাউনলোড করুন, যেখানে আপনি কয়েকটি ক্লিকের মাধ্যমে
                  আপনার অর্ডার সম্পূর্ন করুন।</p>
                  <img src="assets/images/download.png" alt="cash">
                   
              </ul>
              </div>


             
            </div>
            <style type="text/css">
                form.example input[type=text] {
                  padding: 10px;
                  font-size: 17px;
                  border: 1px solid grey;
                  float: left;
                  width: 80%;
                  background: #f1f1f1;
              }

              form.example button {
                  float: left;
                  width: 20%;
                  padding: 10px;
                  background: #2196F3;
                  color: white;
                  font-size: 17px;
                  border: 1px solid grey;
                  border-left: none;
                  cursor: pointer;
              }

              form.example button:hover {
                  background: #0b7dda;
              }

              form.example::after {
                  content: "";
                  clear: both;
                  display: table;
              }
            </style>>
            <div class="col-md-5 side_footer">
             <h2 style="color: #fff;font-weight: bold;margin-left: 75px;">নিউজলেটার</h2>
             <p style="color: #ddd; font-weight: bold; margin-left: 75px;">প্রতিদিন ১০০০ এর বেশি পণ্য যুক্ত হচ্ছে।<br><br>
                MNTT-Group-এ। 
              আমাদের নতুন পণ্যের আপডেট পেতে এখনই সাবস্ক্রাইব করুন।</p>
              <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
                <input type="text" placeholder="Subscribe.." name="search2">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
              <!--stylesheet is running here-->
             
              <!--stylesheet is end here-->
              <div class="footer_menuoption_qus">
              <ul>
                 <img src="assets/images/footer-ques.png" alt="cash">
                 <li><a href="#">প্রশ্ন</a></li>
                 <img src="assets/images/footer-opinion.png" alt="cash">
                 <li><a href="#">মতামত</a></li>
                 <img src="assets/images/footer-complain.png" alt="cash">
                 <li><a href="#">অভিযোগ</a></li>
                
            </div>
            <div class="cont">
              <p>ফোন : ০৯৬১২-০০৭-০০৭, ০১৮৪ ৪১৫২ ০৮৮</p>
             <p> ইমেইল: example@gmail.com</p>
             <p>ইনবক্স: https://www.facebook.com/Mntt-Group</p>
            </div>
            <div class="icon_panel">
              <img src="assets/images/footer-fb.png">
               <img src="assets/images/footer-google-plus.png">
                <img src="assets/images/footer-linked.png">
                 <img src="assets/images/footer-twitter.png">
                 <img src="assets/images/footer-beshto.png">
            </div>
            <p style="color: #fff;font-weight: bold;margin-left: 75px;">&copy;কপিরাইট:Mntt-Group</p>

          </div>
        </div>
      </div>


      <!--footer section is end here-->
      <div class="copyright-bar">
        <div class="container">
          <div class="col-xs-12 col-sm-6 no-padding social">
            <ul class="link">
              <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#" title="Facebook"></a></li>
              <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
              <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a></li>
              <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#" title="RSS"></a></li>
              <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#" title="PInterest"></a></li>
              <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="#" title="Linkedin"></a></li>
              <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6 no-padding">
            <div class="clearfix payment-methods">
              <ul>
                <li><img src="assets/images/payments/1.png" alt=""></li>
                <li><img src="assets/images/payments/2.png" alt=""></li>
                <li><img src="assets/images/payments/3.png" alt=""></li>
                <li><img src="assets/images/payments/4.png" alt=""></li>
                <li><img src="assets/images/payments/5.png" alt=""></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/echo.min.js"></script>
    <script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/scripts.js"></script>

    <script>
      $(document).ready(function(){
        var a=0;
        $("#slide_togle").click(function(){
          if($("#massage_box").toggle("slow")){
            if(a==0){
              $("#slide_togle").css("transform", "rotate(180deg)");
            }else{
              $("#slide_togle").css("transform", "rotate(0deg)");
            }
            if(a==1){
              a=0;
            }else{
              a=1;
            }
          }
        });


        $("#chat_start").click(function(){
        var a = $("#live_email").val();
        $.ajax({
          url:"classes/check_usur_name.php",
          data:"chat_email="+a,
          success:function(data){
              $().html(data);
          }
        });
    });


      $("#send_massage").click(function(){
        var massage = $("#massage").val();
        $.ajax({
          url:"classes/check_usur_name.php",
          data:"massage="+massage,
          success:function(data){
              $("#massage").val(" ");
          }
        });
    });
        $("body").click(function(){
           $.ajax({
          url:"classes/check_usur_name.php",
          success:function(data){
            data:"massage";
              $("#chat_now").html(data);
          }
        });

        });
        $("#massage").blur(function(){
           $.ajax({
          url:"classes/check_usur_name.php",
          success:function(data){
            data:"massage";
              $("#chat_now").html(data);
          }
        });

        });
      });
    </script>
  </body>
</html>

