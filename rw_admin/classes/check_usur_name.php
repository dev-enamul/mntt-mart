 <?php include '../lib/Database.php';
    $db = new Database;

    include '../helpers/format.php';
    $fm = new formatclass;
session_start();
if(isset($_GET['massage'])){
	$reciver=$_SESSION['cleant_id'];
	$massage=$_GET['massage'];
	date_default_timezone_set('Asia/Dhaka');
	$today = date("Y.m.d h:i:sa");
	$insert_massage="INSERT into live_chat(sender,reciver,massage,chat_date,cleant_id)values('admin','$reciver','$massage','$today','$reciver')";
		 $db->insert($insert_massage);	}?>


