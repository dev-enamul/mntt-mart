<?php include 'lib/Database.php';
  $db = new Database;

  if(isset($_GET['u_id'])){
  	$p_id=$_GET['u_id'];
  	$block_usur="UPDATE usur_info set block=1 where u_id='$p_id'";
  	if($db->update($block_usur)){
  		header('location:usurlist.php');
  	}
  }

   if(isset($_GET['b_id'])){
  	$p_id=$_GET['b_id'];
  	$block_usur="UPDATE usur_info set block=0 where u_id='$p_id'";
  	if($db->update($block_usur)){
  		header('location:usurlist.php');
  	}
  }

    ?>