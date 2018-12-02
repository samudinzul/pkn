<?php 
	session_start(); 
	include '../../includes/connection.php';
	
	$uid = $_GET["uid"];
	$id = $_GET["id"];
	$typeid = $_GET["typeid"];
		
	//get value

	if ($typeid == 6){ // batal pada menu senarai
		$sql = "UPDATE db_kenderaan SET status_mohon = 5, ".
		   "pic_status = '".$uid."', ".
		   "tarikh_status = now() ".
		   "WHERE id = ".$id;
	   
		if (mysqli_query($conn, $sql)) {
			header("location:../index.php?uid=$uid&typeid=2");
		} else {
			echo "Error updating record: " . mysqli_error($conn);
		}		
	}elseif ($typeid == 7){ //selesai
		$sql = "UPDATE db_kenderaan SET status_mohon = 6, ".
		   "pic_status = '".$uid."', ".
		   "tarikh_status = now() ".
		   "WHERE id = ".$id;
		   
		if (mysqli_query($conn, $sql)) {
			header("location:../index.php?uid=$uid&typeid=$typeid");
		} else {
			echo "Error updating record: " . mysqli_error($conn);
		}		
	}else{
		echo "error";
	}

	
	mysqli_close($conn);
?>
