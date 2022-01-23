<?php include 'lib/Database.php';
  $db = new Database;

  if(isset($_GET['del_massage'])){
  	$del_massage=$_GET['del_massage'];
  	$delete_query = "DELETE from massage where massage_id='$del_massage'";
  	if($db->delete($delete_query)){
  		header('location:massage.php');
  	}
  }

    ?>