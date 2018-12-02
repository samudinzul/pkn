<?php 
	session_start(); 
	include '../../includes/connection.php';
	
	$uid = $_GET["uid"];
	$pejabat = $_GET["pejabat"];
	$typeid = $_GET["typeid"];	
	
		
	//get value
	$tujuan = strip_tags(trim($_POST["tujuan"]));
	$bil_penumpang = strip_tags(trim($_POST["bil_penumpang"]));
	$tarikh_bertolak = strip_tags(trim($_POST["tarikh_bertolak"]));
	$tarikh_kembali = strip_tags(trim($_POST["tarikh_kembali"]));
	$waktu_bertolak = strip_tags(trim($_POST["waktu_bertolak"]));
	$waktu_kembali = strip_tags(trim($_POST["waktu_kembali"]));
	
	// process
	$yyyy = substr($tarikh_bertolak,6,4);
	$mm = substr($tarikh_bertolak,0,2);
	$dd = substr($tarikh_bertolak,3,2);
	$tarikh_bertolak = $yyyy."-".$mm."-".$dd;	
	
	$yyyy = substr($tarikh_kembali,6,4);
	$mm = substr($tarikh_kembali,0,2);
	$dd = substr($tarikh_kembali,3,2);
	$tarikh_kembali = $yyyy."-".$mm."-".$dd;	

	$sql2 = "SELECT unit FROM tb_member WHERE userid = ".$uid;
	$result2 = mysqli_query($conn, $sql2);
		if (mysqli_num_rows($result2) > 0) {
			while($row2 = mysqli_fetch_assoc($result2)) {
				$unit = $row2["unit"];
			}
		}

	$sql4 = "SELECT no_permohonan FROM db_kenderaan";
	$result4 = $conn->query($sql4);
	$count = $result4->num_rows;		
	
	if($count == 1){
		$newref = 1;
	} else {
		$cyear = date("Y");
		$sql3 = "SELECT MAX(no_permohonan) FROM db_kenderaan WHERE YEAR(tarikh_mohon) = ".$cyear;
		$result3 = $conn->query($sql3);

		if ($result3->num_rows > 0) {
			// output data of each row
			while($row3 = $result3->fetch_assoc()) {
				//$newref = intval($row3[0])+1;
				$newref = max($row3) + 1;
			}
		}
	}
	
	//$tarikh_mohon = "2019-01-01";
	//echo $unit;
	//exit;
	
	//insert to database - table db_kenderaan
	$sql = "INSERT INTO db_kenderaan (nama_pemohon,unit,tujuan,bil_penumpang,tarikh_bertolak,tarikh_kembali,waktu_bertolak,waktu_kembali,status_mohon,tarikh_dari,tarikh_hingga,waktu_dari,waktu_hingga,tarikh_mohon,no_permohonan,pejabat)
	VALUES ('".$uid."','".$unit."','".$tujuan."','".$bil_penumpang."','".$tarikh_bertolak."','".$tarikh_kembali."','".$waktu_bertolak."','".$waktu_kembali."',1,'".$tarikh_bertolak."','".$tarikh_kembali."','".$waktu_bertolak."','".$waktu_kembali."',Now(),'".$newref."','".$pejabat."')";
		
	if (mysqli_query($conn, $sql)) {
		//echo "Record updated successfully";
	}else {
		echo "Error updating record: " . mysqli_error($conn);
	}

	
	echo '<script type="text/javascript">'; 
		echo 'alert("Permohonan anda sedang diproses.");'; 
	echo '</script>';
	
	echo  "<script type='text/javascript'>";
		echo "window.close();";
	echo "</script>";
	
	
	mysqli_close($conn);
?>
