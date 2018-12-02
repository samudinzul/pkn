<?php
include '../../includes/connection.php';

$uid = $_GET["uid"];
$typeid = $_GET["typeid"];

/*
$sql1 = "SELECT uid FROM tb_users WHERE sqno = ".$sqno;
$result1 = mysqli_query($conn, $sql1);
	if (mysqli_num_rows($result1) > 0) {
		while($row1 = mysqli_fetch_assoc($result1)) {
			$uid = $row1["uid"];	
		}
	}	
*/

	
if ($typeid == "Order") {
	
	$quantity = strip_tags(trim($_POST["quantity"]));
	$id_item = strip_tags(trim($_POST["id_item"]));
	
	// update to db
	$sql = "INSERT INTO stok_order_detail (id_item,requested_quantity,userid)
	VALUES ('".$id_item."','".$quantity."','".$uid."')";	
	

	if (mysqli_query($conn, $sql)) {
		echo '<script type="text/javascript">'; 
			echo 'alert("Your item was successfully added.");'; 
			echo 'window.location = "../cart.php?uid='.$uid.'&typeid='.$typeid.'&staff_id='.$uid.'";';
		echo '</script>';		

	} else {
		echo "Error updating record: " . mysqli_error($conn);
	}	
	
}elseif ($typeid == "Process_Qty") {
	
	$qtyid = $_GET["qtyid"];
	$requested_quantity = strip_tags(trim($_POST["requested_quantity"]));

	//exit;
	
	// update to db
	$sql = "UPDATE stok_order_detail SET requested_quantity = '".$requested_quantity."' WHERE id = ".$qtyid;	
	if (mysqli_query($conn, $sql)) {
		echo '<script type="text/javascript">'; 
			echo 'alert("Your item was successfully updated.");'; 
			echo 'window.location = "../cart.php?uid='.$uid.'&typeid=Order&staff_id='.$uid.'";';
		echo '</script>';		
	} else {
		echo "Error deleting record: " . mysqli_error($conn);
	}

}elseif ($typeid == "Process_Del") {
	
	$delid = $_GET["delid"];
	
	// update to db
	$sql = "DELETE FROM stok_order_detail WHERE id = ".$delid;
	
	if (mysqli_query($conn, $sql)) {
			header("location:../cart.php?uid=$uid&typeid=Order&staff_id=$uid");
	} else {
		echo "Error deleting record: " . mysqli_error($conn);
	}	

}elseif ($typeid == "Checkout") {

	$sql3 = "SELECT jawatan,unit FROM tb_member WHERE userid = '".$uid."'";
	$result3 = mysqli_query($conn, $sql3);
		if (mysqli_num_rows($result3) > 0) {
			while($row3 = mysqli_fetch_assoc($result3)) {	
				$unit = $row3["unit"];
				$jawatan = $row3["jawatan"];
			}
		}	

	$sql4 = "SELECT no_permohonan FROM stok_order";
	$result4 = $conn->query($sql4);
	$count = $result4->num_rows;		
	
	if($count == 1){
		$newref = 1;
	} else {
		$cyear = date("Y");
		$sql5 = "SELECT MAX(no_permohonan) FROM stok_order WHERE YEAR(order_date) = ".$cyear;
		$result5 = $conn->query($sql5);

		if ($result5->num_rows > 0) {
			// output data of each row
			while($row5 = $result5->fetch_assoc()) {
				//$newref = intval($row3[0])+1;
				$newref = max($row5) + 1;
			}
		}
	}
	
	//exit;	
	$purpose = strip_tags(trim($_POST["purpose"]));
	$status = "New";
		
	// update to db
	$sql = "INSERT INTO stok_order (userid,jawatan,unit,order_date,purpose,status,flag,no_permohonan)
	VALUES ('".$uid."','".$jawatan."','".$unit."',Now(),'".$purpose."','".$status."',0,'".$newref."')";	

	if (mysqli_query($conn, $sql)) {
		$id_order = mysqli_insert_id($conn);
	} else {
		echo "Error updating record: " . mysqli_error($conn);
	}	

	$sql2 = "UPDATE stok_order_detail SET id_order = '".$id_order."' WHERE userid = '".$uid."' and id_order = 0";	
	if (mysqli_query($conn, $sql2)) {
		// successfully
	} else {
		echo "Error deleting record: " . mysqli_error($conn);
	}



	echo '<script type="text/javascript">'; 
		echo 'alert("Your order was successfully sent.");'; 
	echo '</script>';

	echo  "<script type='text/javascript'>";
		echo "window.close();";
	echo "</script>";

}else{
	echo "error";
}



mysqli_close($conn);
?>



