<?php
include '../../includes/connection.php';

$id = $_GET["id"];
$typeid = $_GET["typeid"];

if ($typeid == "Update"){

	$item = strip_tags(trim($_POST["item"]));
	$publish = strip_tags(trim($_POST["publish"]));
	$kod_kawalan = strip_tags(trim($_POST["kod_kawalan"]));
	$kod_barang = strip_tags(trim($_POST["kod_barang"]));
	$description = strip_tags(trim($_POST["description"]));

	$order_file_1 = uniqid();
	$order_file_1 = $order_file_1.$_FILES['order_file_1']['name'];

	
	// insert to db
	$sql = "UPDATE stok_item SET name = '".$item."', ".
	   "publish = '".$publish."', ".
	   "kod_kawalan = '".$kod_kawalan."', ".
	   "kod_barang = '".$kod_barang."', ".
	   "description = '".$description."' ".   
	   "WHERE id = ".$id;	

	if (mysqli_query($conn, $sql)) {
		//echo "Record updated successfully";			
	} else {
		echo "Error updating record: " . mysqli_error($conn);
	}

/*
	// insert to db - attachment 1
	if ($_FILES['order_file_1']['error'] == 0) {
		move_uploaded_file($_FILES['order_file_1']['tmp_name'], '../img/item/' .$order_file_1);	
		
		$sql11 = "UPDATE corporate_item SET pics = '".$order_file_1."' WHERE id = ".$id;
	   
		if (mysqli_query($conn, $sql11)) {
			//echo "Record updated successfully";			
		} else {
			echo "Error updating record: " . mysqli_error($conn);
		}
	}

*/
	
}elseif ($typeid == "Qty"){
	$quantity = strip_tags(trim($_POST["quantity"]));
	//$item_date = ();
	
	// update to db
	$sql = "INSERT INTO stok_item_detail (item_date,id_item,quantity)
	VALUES (now(),'".$id."','".$quantity."')";	
	

	if (mysqli_query($conn, $sql)) {
		//echo "Record updated successfully";			
	} else {
		echo "Error updating record: " . mysqli_error($conn);
	}	
	
}elseif ($typeid == "Delete"){
	
	$quantity = $_GET["quantity"];
	
	// update to db
	$sql = "DELETE FROM stok_item_detail WHERE id = ".$quantity;
	if (mysqli_query($conn, $sql)) {
			//header("location:../laporan_lawatan/index.php?uid=$uid&kategori_sekolah=$kategori_sekolah");
	} else {
		echo "Error deleting record: " . mysqli_error($conn);
	}	

}else{
	
}

echo '<script type="text/javascript">'; 
	echo 'alert("Your item was successfully updated.");'; 
echo '</script>';

echo  "<script type='text/javascript'>";
	echo "window.close();";
echo "</script>";		


mysqli_close($conn);


?>



