<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta -->
    <?php include 'inc/link.php'?>
  </head>
<?php if (isset($_GET['p_id'])) {
   $p_id=$_GET['p_id'];

          $new_product="SELECT * from product_list  where p_id='$p_id'";
          if($con_new_product=$db->select($new_product)){
            while ($new_product_select=$con_new_product->fetch_assoc()){

     ?>
  <body class="cnt-home">
    <!--  HEADER  -->
    <header class="header-style-1">
       <?php include 'inc/search.php'?>
      <!--  NAVBAR -->
      <?php include 'inc/nav.php'?>
    </header> 
    <?php include 'inc/under_menu.php'?>

<style type="text/css">
  	.main_head_sec{

  	}
  	.main_head_sec p{
  		font-size: 25px;
  		color: red;
  		font-family: SolaimanLipi,Helvetica,Verdana,sans-serif;
  		margin-top: 16px;
  	}
  	.main_head_sec ul li{
  		display: inline;
  	}
  	.main_head_sec ul li a{
  		font-size: 13px;

  	}
  	.top-rating-separator{
  	font-family: SolaimanLipi,Helvetica,Verdana,sans-serif;
      font-size: 14px;
      float: right;
      line-height: 20px;
      max-width: 600px;
      text-align: right;
      padding: 8px 8px 0px 0px;
      color: #333333;
      margin-top: 27px;


  	}
  	.header_sec{
  		height: 70px;
  		width: 100%;
  		background: #ddd;
	}
</style>
<div class="container">
        <div class="row">
        	<div class="header_sec">
        	<div class="col-md-8 main_head_sec">
        		<p>কবুতর বা পায়রা বা পারাবত এক প্রকারের জনপ্রিয় গৃহপালিত পাখি। </p>
        </div>

        <div class="col-md-4 main_head_sec">
        	<div class="top-rating-separator">

        		<ul>
        			<li><a href="#">সর্বমোট অর্ডার:0</a></li>
        			<li><a href="#">রেটিং:0</a></li>
        			<li><a href="#">রিভিউ:0</a></li>
        			<li><a href="#">রিভিউ লিখুন:0</a></li>
        			<li><a href=""><img src="assets/images/QAPC.png"></a></li>
        			<li><a href="#">০</a></li>
        		</ul>
        	</div>
        </div>
    </div>
</div>
</div>



<style type="text/css">
* {box-sizing: border-box;}
    .img-zoom-container {
      position: relative;
    }
    .img-zoom-lens {
      position: absolute;
      border: 1px solid #d4d4d4;
      /*set the size of the lens:*/
      width: 40px;
      height: 40px;
    }
    .img-zoom-result {
      border: 1px solid #d4d4d4;
      /*set the size of the result div:*/
      width: 400px;
      height: 239px;
}
</style>

<script>
function imageZoom(imgID, resultID) {
  var img, lens, result, cx, cy;
  img = document.getElementById(imgID);
  result = document.getElementById(resultID);
  /*create lens:*/
  lens = document.createElement("DIV");
  lens.setAttribute("class", "img-zoom-lens");
  /*insert lens:*/
  img.parentElement.insertBefore(lens, img);
  /*calculate the ratio between result DIV and lens:*/
  cx = result.offsetWidth / lens.offsetWidth;
  cy = result.offsetHeight / lens.offsetHeight;
  /*set background properties for the result DIV:*/
  result.style.backgroundImage = "url('" + img.src + "')";
  result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
  /*execute a function when someone moves the cursor over the image, or the lens:*/
  lens.addEventListener("mousemove", moveLens);
  img.addEventListener("mousemove", moveLens);
  /*and also for touch screens:*/
  lens.addEventListener("touchmove", moveLens);
  img.addEventListener("touchmove", moveLens);
  function moveLens(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image:*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    /*calculate the position of the lens:*/
    x = pos.x - (lens.offsetWidth / 2);
    y = pos.y - (lens.offsetHeight / 2);
    /*prevent the lens from being positioned outside the image:*/
    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
    if (x < 0) {x = 0;}
    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
    if (y < 0) {y = 0;}
    /*set the position of the lens:*/
    lens.style.left = x + "px";
    lens.style.top = y + "px";
    /*display what the lens "sees":*/
    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
  
</script>
<style>
	.count_sec{
		border: 1px solid #24B193;
	}
	.mid_opp{
		margin-top: 56px;
	}
	.button_left{
		padding-left: 51px;

	}
	.but_left{
		padding-left: 51px;
	}
	.last_opp{
		margin-top: 20px;
	}
	.img_ord img{
cursor: pointer;
	}
  .close_alert p{
    position: relative;

  }
  .close_alert p i{
    position: absolute;
    right: 0px;
    top: -15px;
  }


</style>
<div class="container">
	<div class="row">
		<div class="col-md-6 img_zoom_sec">
			<div class="img-zoom-container">
			  <img id="myimage" src="rw_admin/<?php echo $new_product_select['p_img']?>" width="400" height="300">
			  <div id="myresult" class="img-zoom-result"></div>
			</div>
		</div>


<?php
                                 
      if(isset($_POST['add_now'])){
      if(!isset($_SESSION['usur_id'])){ ?>
        <script>
          window.location.assign("log.php");
        </script>
    <?php  }else{
      $u_id       = $_SESSION['usur_id'];
      $quantity   = $_POST['qty'];
      $author_id  = $new_product_select['author_id'];
      $p_id       = $new_product_select['p_id'];
      $p_name     = $new_product_select['p_name'];
      $p_des      = $new_product_select['p_des'];
      $p_price    = $new_product_select['p_price'];
      $p_image    = $new_product_select['p_img'];
      $c_date     = date('Y-m-d');

    $query="INSERT into card(
    buy_usur_id,u_id,quantity,author_id,p_id,p_name,p_des,p_price,p_image,c_date) values ('$u_id','$u_id','$quantity','$author_id','$p_id','$p_name','$p_des','$p_price','$p_image','$c_date')";

      if($db->insert($query)){?>
         <div class="alert alert-success close_alert" id="alert">
              <?php echo $p_name.' Order success'?></a><p><i class="glyphicon glyphicon-remove" id="close" onclick="aleart()"></i></p>
          </div>
        <?php }
     }}

  if(isset($_POST['good'])){
      if(!isset($_SESSION['usur_id'])){ ?>
        <script>
          window.location.assign("log.php");
        </script>
    <?php  }else{
      $u_id       = $_SESSION['usur_id'];
      $quantity   = $_POST['qty'];
      $author_id  = $new_product_select['author_id'];
      $p_id       = $new_product_select['p_id'];
      $p_name     = $new_product_select['p_name'];
      $p_des      = $new_product_select['p_des'];
      $p_price    = $new_product_select['p_price'];
      $p_image    = $new_product_select['p_img'];
      $c_date     = date('Y-m-d');

    $query="INSERT into card(
    buy_usur_id,quantity,author_id,p_id,p_name,p_des,p_price,p_image,c_date) values ('$u_id','$quantity','$author_id','$p_id','$p_name','$p_des','$p_price','$p_image','$c_date')";

      if($db->insert($query)){?>
        <script>
           
        </script>
         <div class="alert alert-success close_alert" id="alert">
              <?php echo $p_name.' is add success'?></a><p><i class="glyphicon glyphicon-remove" id="close" onclick="aleart()"></i></p>
          </div>
        <?php }
     }}

      ?> 
      <form action="" method="post">
		<div class="col-md-6 count_sec">
			
			<div class="row">
				<div class="col-md-6">
					<h2 style=" font-weight: bold; color: #F15A2B;  font-family: 'Atomic Age';font-size: 22px;"><?php echo $new_product_select['p_price']?>৳</h2>
				</div>
				<div class="col-md-6 img_ord">
					<img src="assets/images/apporder.png" >
				</div>
			</div>


			<div class="row">
				<div class="mid_opp">
				<div class="col-md-6">
					<li style="list-style: none; font-family: 'Bungee Inline'; font-size: 18px"><img src="assets/images/gift-box (1).png"> &nbsp; ডিল কোড: 000-000</li>
				</div>
				<div class="col-md-6 button_left">
					<button type="submit" name="add_now" class="btn btn-danger" style="font-weight: bold;">এখনি র্অডার দিন</button>
				</div>
			</div>
		</div>

  <style type="text/css">
  </style>
<div class="l_sec">
		<div class="row">
				<div class="last_opp">
				<div class="col-md-6">
          
          <div class="row">
            <div class="col-md-5 amount_sec">
              <p style="font-size: 20px;">পরিমান:</p>
            </div>
            <div class="col-md-7">
               <input name="qty" type="number" value="1" style="border:1px solid #999;">
            </div>
          </div>

					
				</div>


				<div class="col-md-6 but_left">
					<button name="good" type="submit" class="btn btn-danger"><img src= "assets/images/deal_details_button_cart_icon.png"><a style="color: #fff; font-weight: bold;"> কার্ট- এ যোগ দিন </a><img src= "assets/images/arrow-2nd-page (1).png"></button>
					<div>
						<h2></h2>
					</div>

				</div>
			</div>
      </form>
		</div>
    </div>
		</div>
	</div>
</div>

<script>
// Initiate zoom effect:
imageZoom("myimage", "myresult");
</script>


<style type="text/css">
  
.payra_pic{
  height: 200px;
  width: 200px;
}

</style>

<div class="container">
  <div class="row">
  <div class="col-md-6 img_sub_para">  
  </div>
<div class="col-md-6">
    <img src="assets/images/product_details_phone_order02 (1).png">
  </div>
</div>
</div>
<style type="text/css">
  .heading_sec{
    height: 42px;
    width: 100%;
    background: #0072B1;
  }
  .border{
    border: 2px solid #CFCFCF;
  }
  .important_heading{
    padding: 53px;
    margin: 2px;
  }
  .point_head{
    padding:15px;
  }
  .point_head ul li{
    font-size: 18px;
  }

</style>
<div class="container">
  <div class="border">
  <div class="col-md-12 heading_sec">
   <li style="list-style: none; font-size: 20px; margin-top: 3px; font-family: vardana; font-weight: bold; color: #fff;"> <img src="assets/images/product-details (1).png">   পন্যের বিবরণ</li>
  </div>
  <div class="row">
    <div class="important_heading">
    <div class="col-md-8 point_head">
       <p><?php echo $new_product_select['p_des'];?></p>
      <p style="color:#009EDA; line-height: 22px; font-size: 14px; ">
        <b style="color: #009EDA;">দ্রষ্টব্যঃ </b><br><br>
        ১। প্রোডাক্টের অর্ডার স্টক থাকা সাপেক্ষে ডেলিভারি করা হবে। অনিবার্য কারনে পন্যের ডেলিভারিতে বিক্রেতা প্রতিশ্রুত ডেলিভারী সময়ের বেশী সময় লাগতে পারে। <br>
        
        ২। ক্যাশ অন ডেলিভারিতে প্রোডাক্ট অর্ডার করার পর রিফান্ড হলে রিফান্ডের টাকা ফেরতের জন্য আপনার দেয়া বিকাশ নম্বরের ক্ষেত্রে ১৫ কার্যদিবস ও রকেট নম্বরের ক্ষেত্রে ১৫ কার্যদিবসের থেকে বেশি সময়ের মধ্যে টাকা ফেরত দেয়া হবে।<br>
        
        ৩। অর্ডার কনফার্মেশনের পরেও অনিবার্য কারনবশত যেকোনো সময়ে আজকেরডিল আপনার অর্ডার বাতিল করার ক্ষমতা রাখে। এক্ষেত্রে অগ্রিম মুল্য প্রদান করা হলে রিফান্ডের প্রয়োজনীয় তথ্য (বিকাশ নং/রকেট নং/কার্ড নং ও অন্যান্য) দেওয়ার পরে সর্বোচ্চ ১৫ কার্যদিবসের মধ্যে টাকা ফেরত দেয়া হবে। <br>
       
        ৪। আমরা তৃতীয় পক্ষ কুরিয়ার সার্ভিস এর মাধম্যে প্রোডাক্ট আপনাদের কাছে ডেলিভারি করে থাকি। কুরিয়ার থেকে প্রোডাক্ট গ্রহণ করার সময় অনুগ্রহ করে প্রোডাক্ট পরখ করে গ্রহণ করবেন। পরবর্তীতে ভাঙা প্রোডাক্ট সংক্রান্ত কোনো অভিযোগ গ্রহণযোগ্য হচ্ছে না। কুরিয়ার প্রোডাক্ট খুলে দেখতে না দিলে অনুগ্রহ করে আমাদের সাথে যোগাযোগ করুন।
        

      </p>
      <style type="text/css">
        .sell_box{
              height: 200px;
              width: 50%;
              background: #ddd;
              padding: 10px;
              margin: -3px;
              margin-top: 20px;
        }
        .header_news{
          height: 30px;
          background: #ddd;
          width: 900px;
        }
      </style>

      <div class="row">
      <div class="col-md-6 sell_box">
       <li style="list-style: none; font-size: 18px; font-weight: bold;"><img src="assets/images/inside-dhaka-product-charge.png" style="height: 40px; width: 40px;"> ঢাকার মধ্যে ডেলিভারী চার্জ-</li>
       <p>• ক্যাশ অন ডেলিভারী ক্ষেত্রে - ১ টি কিনলে <span style="color: #F15B2C; font-size: 18px;">৫০ </span>টাকা । </p>
       <p>•অগ্রিম মুল্য প্রদান করলে অথবা একের অধিক প্রোডাক্ট কিনলে <span style="color: #F15B2C; font-size: 18px;">২৫ </span>টাকা । </p>
       <p> •ঢাকাতে ফ্রী ! (App অর্ডারে)। </p>
      </div>
       <div class="col-md-6 sell_box">
        <li style="list-style: none; font-size: 18px; font-weight: bold;"><img src="assets/images/inside-dhaka-product-charge.png" style="height: 40px; width: 40px;"> ঢাকার বাইরে ডেলিভারী চার্জ-</li>
         <p>• ক্যাশ অন ডেলিভারী ক্ষেত্রে - ১ টি কিনলে <span style="color: #F15B2C; font-size: 18px;">৯৫ </span>টাকা । </p>
          <p>• অগ্রিম মুল্য প্রদান করলে অথবা একের অধিক প্রোডাক্ট কিনলে  <span style="color: #F15B2C; font-size: 18px;">৪৫ </span>টাকা । </p>
           <p>• ক্যাশ অন ডেলিভারী ক্ষেত্রে - ১ টি কিনলে <span style="color: #F15B2C; font-size: 18px;">৪৫ </span>টাকা । </p>
      </div>
    </div>
    <style type="text/css">
      .some_text h4:hover{
        color: #999C9E;
        transition: 0.2s;
      }
      .some_text{
        margin-top: 15px;
      }
    </style>
    <div class="some_text">
    <div class="col-md-12">
      
      <h4 style="list-style: none; font-weight: bold;"><img src="assets/images/refundiconplus.png">  রিফান্ড পলিসি</h4>
      <p style="    line-height: 20px;font-family: monospace;color: #676767;">পণ্য গ্রহনের পর যে কোন কারনে ক্রয়কৃত পণ্যের সম্পূর্ণ মূল্য আপনি ফেরত পেতে পারেন। সেক্ষেত্রে পণ্য গ্রহনের পর সর্বোচ্চ ৪৮ ঘণ্টার মধ্যে আপনাকে example@.com এ ই মেইল করতে হবে অথবা আমাদের হটলাইন নাম্বার 00000-000000 এ কল করে ৩ চেপে আমাদের অবহিত করতে হবে। পণ্যের পুরো টাকা ফেরত নেবার ক্ষেত্রে পণ্যটি সম্পূর্ণ অক্ষত/ ত্রূটিমুক্ত অবস্থায় থাকতে হবে এবং আপনাকে উক্ত পণ্যটি আজকেরডিল এর অফিসে পাঠাতে হবে, উল্লেখ্য যে ফেরত পাঠানোর সকল পরিবহন খরচ আপনাকে বহন করতে হবে। কোন অতিরিক্ত চার্জ সংযুক্ত থাকলে আপনি পন্য গ্রহন না করে ফেরত দিতে পারবেন।</p>
      
      
    </div>
    </div>

    <div class="">
      <h2></h2>
    </div>



    </div>
     <style type="text/css">
       .table_sec{
        
        height: auto;
        background: #ddd;

       }
       .table_sec h4{
           text-align: center;
          font-family: cursive;
          font-size: 18px;
          color: #403434;
          font-weight: bold;
       }
       .dash_body{
        height: 40px;
        background: #35BEAE;
        padding: 1px;
        margin: 10px;
       }
       .dash_body h4 a{
          color: #fff;
       }
       .dash_body h4 a:hover{
          color: #000;
       }
       .rating_box{
        height: 170px;
        width: 200px;
        background: #fff;
        padding: 45px;
        margin-left: 60px;
       }
       .rating_box_star{
        height: 120px;
        width: 200px;
        background: #fff;
        padding: 30px;
        margin-left: 60px;
        margin-top: 5px;
       }
       .rating_box_star img{
        height: 18px;
       }
       .delyvary{
        height: auto;
        background: #fff;
        padding: 10px;
        margin-top: 10px;
        margin:10px;
       }
       .delyvary img{
        width: 100%;
       }
       .map img{
        height: 50px;
        width: 40px;
       }
       .para_graf{
        height: 50px;
        background: #fff;
        padding: 10px;
       }

     </style>
    <div class="col-md-4 table_sec">
     <h4>মার্চেন্ট রেটিং ও র‌্যাঙ্কিং</h4>
     <div class="dash_body">
      <h4><a href="#">MNTT TECHNOLOGY BD</a></h4>
     </div>
     <p style="text-align: center;"><a href="">মার্চেন্টের সব প্রোডাক্ট দেখতে এখানে ক্লিক করুন</a></p>
     <p style="text-align: center;"><a href="#" style="color: #4872BD;">(৪৪ টি প্রোডাক্ট)</a></p>
     <div class="rating_box">
       <h2 style="color: #38B449; font-weight: bold;">১০০%</h2>
       <p>পজেটিভ রিভিউ</p>
       <li style="list-style: none; letter-spacing: 5;"><img src="assets/images/green-like.png" style="height: 20px; cursor: pointer;"><span style="color: red;"><a href="#"> ৪</a></span>  <img src="assets/images/red-like.png" style="height: 20px; cursor: pointer;"><span style="color: black;"><a href="#"> 0</a></span></li>
     </div>


     <div class="rating_box_star">
       <h4>আরো রেটিং</h4>
       <p>প্রোডাক্ট কোয়ালিটি  <img src="assets/images/Star.png"></p>
       
     </div>

     <div class="delyvary">
      <img src="assets/images/delivery_speed.png">
     
     <div class="row">
      <div class="col-md-8">
        <p ><span style="color: red; font-weight: bold;">ঢাকা : </span>২-৫ দিন</p>
        <p>(০% ডেলিভারী ২-৫ দিনের মধ্যে)</p>
      </div>
      
      <div class="col-md-4 map">
        <img src="assets/images/map.png" alt="map" height="50px;" width="50px;">
      </div>


     </div>

     <div class="row">
      <div class="col-md-8">
        <p>ঢাকা : ২-৫ দিন</p>
        <p>(০% ডেলিভারী ২-৫ দিনের মধ্যে)</p>
      </div>
      
      <div class="col-md-4 map">
        <img src="assets/images/map_all.png" alt="map" height="50px;">
      </div>
     </div>


     </div>
     <div class="para_graf">
      <p style="color: red; text-align: justify;">এই মার্চেন্ট ১৭ই মে ২০১৭ থেকে ‍আমাদের সাথে আছেন
মোট অর্ডার পেয়েছেন : ২২১</p>
</div>
  <div class="last_para">
    <div class="">
    </div>

  </div>
      


     <div>
       <h2></h2>
     </div>
     <style type="text/css">
       .header_dash{
        height: 30px;
        background: #35BEAE;
        
       }
       .news p{
border: 1px solid #35BEAE;
       }
     </style>
    
      <div class="row">
    <div class="col-md-12 header_dash">
      
    </div>
    </div>

    
   

     </div>
  
     
     <p style="">এই মার্চেন্ট ১৭ই মে ২০১৭ থেকে ‍আমাদের সাথে আছেন<br>
<b style="color: blue;">মোট অর্ডার পেয়েছেন : ২২১</b></p>

    </div>

  </div>
  </div>
</div>



</div>
<div class="">
  <h2></h2>
</div>

<style type="text/css">
  .border_rekha{
    border: 1px solid #5A5A5C;
  }
  .img_class img{
    height: 150px;
    width: 150px;
  }
  .img_class {
    padding: 5px;
    border: 1px solid #F2F2F2;
    margin-top: 10px;
  }
  .img_class_one{
    padding: 5px;
    border: 1px solid #F2F2F2;
    margin-top: 10px;
  }
  .img_class_one img{
    height: 180px;
    width: 180px;
  }
  .recent_view_price{
            float: right;
    background-color: #f16e52;
    color: rgb(255, 255, 255);
    margin-top: -30px;
    z-index: 1000000;
    position: absolute;
    width: 73px;
    left: 42%;
    border-top-left-radius: 2px;
    height: 145px;
    height: 29px;
    padding: 5px;
  }
</style>
<br>
<style type="text/css">
  .product{
    margin-top: 50px;
  }
</style>

<div class="container">
  <div class="product">
<div class="row">
  <div class="col-md-4 border_rekha">

  </div>

  <div class="col-md-4 some_title">
    <h4 style="margin-top: -8px; font-weight: bold; margin-left: 85px; color: #5A5A5C;">একই রকম প্রোডাক্ট</h4>
  </div>
    <div class="col-md-4 border_rekha">

  </div>
</div>
</div>
</div>
<div class="container">
<div class="row">

  <?php
  $p_name=$new_product_select['p_name'];
  $p_des=$new_product_select['p_des'];
  $new_same_product="SELECT * from product_list  where p_name like '%$p_name%' OR p_des like '%$p_des%' limit 15";
        if($con_same_product=$db->select($new_same_product)){
          while ($same_product_result=$con_same_product->fetch_assoc()){

     ?>

<div class="col-md-2 img_class_one">
<a href="?p_id=<?php echo $same_product_result['p_id'];?>"><img src="rw_admin/<?php echo $same_product_result['p_img']?>">
<div class="recent_view_price"><?php echo $same_product_result['p_price']?>৳</div></a>
</div>
 
  <?php }}?>
 
 
</div>
</div>
<script> 
    function aleart(){
    document.getElementById("alert").style.display = "none";
  }
</script>
<?php }}}?>



<?php include "inc/footer.php";?>