<?php
 include 'lib/Database.php';
    $db = new Database;
if(isset($_GET['catid'])){
	$catid=$_GET['catid'];
	$query = "DELETE from category where id='$catid'";
	$db->delete($query);
	header('location:catlist.php');
}
if(isset($_GET['sub_catid'])){
	$catid=$_GET['catid'];
	$query = "DELETE from sub_category where sub_cat_id='$catid'";
	$db->delete($query);
	header('location:sub_cat_list.php');
}
?>