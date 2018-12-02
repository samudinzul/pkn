<?php
include '../../includes/connection.php';

$id = $_GET["id"];
$typeid = $_GET["typeid"];

if ($typeid == "Process"){

	$status = strip_tags(trim($_POST["status"]));
	$purpose = strip_tags(trim($_POST["purpose"]));
	//exit;
	// insert to db
	$sql = "UPDATE stok_order SET status = '".$status."', ".
	   "purpose = '".$purpose."' ".     
	   "WHERE id = ".$id;	

	if (mysqli_query($conn, $sql)) {
		//echo "Record updated successfully";			
	} else {
		echo "Error updating record: " . mysqli_error($conn);
	}

	
}elseif ($typeid == "Cancel"){
	$uid = $_GET["uid"];
	//exit;
	// update to db
	$sql = "UPDATE stok_order SET status = '".$typeid."' WHERE id = ".$id;		

	if (mysqli_query($conn, $sql)) {
			//echo '<script type="text/javascript">'; 
			//echo 'window.location = "../index.php?uid='.$uid.'&typeid=1";';
			//echo '</script>';
			header("location:../index.php?uid=$uid&typeid=5");
	} else {
		echo "Error updating record: " . mysqli_error($conn);
	}	
	
}elseif ($typeid == "Process_Qty"){
	
	$qtyid = $_GET["qtyid"];
	$approved_quantity = strip_tags(trim($_POST["approved_quantity"]));

	//exit;
	
	// update to db
	$sql = "UPDATE stok_order_detail SET approved_quantity = '".$approved_quantity."' WHERE id = ".$qtyid;	
	if (mysqli_query($conn, $sql)) {
			header("location:process_order.php?id=$id&typeid=Process");
	} else {
		echo "Error deleting record: " . mysqli_error($conn);
	}	

}else{
	
}

if ($typeid <> "Process_Qty" and $typeid <> "Cancel"){
	echo '<script type="text/javascript">'; 
		echo 'alert("Your item was successfully updated.");'; 
	echo '</script>';

	echo  "<script type='text/javascript'>";
		echo "window.close();";
	echo "</script>";		
}

mysqli_close($conn);


?>



