<?php 
	session_start(); 
	include '../../includes/connection.php';
	
	$uid = $_GET["uid"];
	$id = $_GET["id"];
	
	
	
	//get value
	$nama_pemandu = strip_tags(trim($_POST["nama_pemandu"]));
	$no_kenderaan = strip_tags(trim($_POST["no_kenderaan"]));
	$tarikh_dari = strip_tags(trim($_POST["tarikh_dari"]));
	$tarikh_hingga = strip_tags(trim($_POST["tarikh_hingga"]));
	$waktu_dari = strip_tags(trim($_POST["waktu_dari"]));
	$waktu_hingga = strip_tags(trim($_POST["waktu_hingga"]));
	$butiran = strip_tags(trim($_POST["butiran"]));
	$status_mohon = strip_tags(trim($_POST["status_mohon"]));
	
	// process
	$yyyy = substr($tarikh_dari,6,4);
	$mm = substr($tarikh_dari,0,2);
	$dd = substr($tarikh_dari,3,2);
	$tarikh_dari = $yyyy.$mm.$dd;	
	
	$yyyy = substr($tarikh_hingga,6,4);
	$mm = substr($tarikh_hingga,0,2);
	$dd = substr($tarikh_hingga,3,2);
	$tarikh_hingga = $yyyy.$mm.$dd;	


	$sql = "UPDATE db_kenderaan SET nama_pemandu = '".$nama_pemandu."', ".
	   "no_kenderaan = '".$no_kenderaan."', ".
	   "tarikh_dari = '".$tarikh_dari."', ".
	   "tarikh_hingga = '".$tarikh_hingga."', ".
	   "waktu_dari = '".$waktu_dari."', ".
	   "waktu_hingga = '".$waktu_hingga."', ".
	   "butiran = '".$butiran."', ".
	   "status_mohon = '".$status_mohon."', ".
	   "pic_status = '".$uid."', ".
	   "tarikh_status = now() ".
	   "WHERE id = ".$id;	

	   
	if (mysqli_query($conn, $sql)) {
		//echo "Record updated successfully";
	}else {
		echo "Error updating record: " . mysqli_error($conn);
	}

	echo '<script type="text/javascript">'; 
		echo 'alert("Permohonan telah dikemaskini.");'; 
	echo '</script>';
	
	echo  "<script type='text/javascript'>";
		echo "window.close();";
	echo "</script>";
	
	mysqli_close($conn);
?>
