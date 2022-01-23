<?php include 'lib/Database.php';
  $db = new Database;

  if(isset($_GET['p_id'])){
  	$p_id=$_GET['p_id'];
  	$delete_query = "DELETE from product_list where p_id='$p_id'";
  	if($db->delete($delete_query)){
  		header('location:productlist.php');
  	}
  }

  if(isset($_GET['del_usur_product_id'])){
  	$p_id=$_GET['del_usur_product_id'];
  	$delete_query = "DELETE from product_list where p_id='$p_id'";
  	if($db->delete($delete_query)){
  		header('location:usur_product_list.php');
  	}
  }

    if(isset($_GET['approbe_product_id'])){
  	$p_id=$_GET['approbe_product_id'];
  	$delete_query = "DELETE from product_list where p_id='$p_id'";
  	if($db->delete($delete_query)){
  		header('location:approv_page.php');
  	}
  }

    ?>