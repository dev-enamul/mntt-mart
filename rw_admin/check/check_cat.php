<?php include '../lib/Database.php';
    $db = new Database;
 	$category = $_GET['category'];
 	$select_sub_cat="SELECT * from sub_category where cat_id='$category'";
 	if($con_category=$db->select($select_sub_cat)){
 	while($sub_cat_result=$con_category->fetch_assoc()){
 		echo $category="<option> $sub_cat_result['sub_category'] </option> ";
 	}
 	}
?>