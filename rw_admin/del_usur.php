<?php include 'lib/Database.php';
  $db = new Database;

  if(isset($_GET['u_id'])){
  	$p_id=$_GET['u_id'];
  	$delete_query = "DELETE from usur_info where u_id='$p_id'";
  	if($db->delete($delete_query)){
  		header('location:usurlist.php');
  	}
  }

    ?>