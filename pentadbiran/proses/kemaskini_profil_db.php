<?php 
	session_start(); 
	include '../../includes/connection.php';
	
	$uid = $_GET["uid"];
	$typeid = $_GET["typeid"];
	
	if ($typeid  == 11){

		$nama = strip_tags(trim($_POST["nama"]));
		$gred = strip_tags(trim($_POST["gred"]));
		$jawatan = strip_tags(trim($_POST["jawatan"]));	
		$bahagian = strip_tags(trim($_POST["bahagian"]));	
		$unit = strip_tags(trim($_POST["unit"]));
		$pejabat = strip_tags(trim($_POST["pejabat"]));

		// process
		$sql = "UPDATE tb_member SET nama = '".$nama."', ".
		   "gred = '".$gred."', ".
		   "bahagian = '".$bahagian."', ".
		   "jawatan = '".$jawatan."', ".
		   "unit = '".$unit."', ".
		   "pejabat = '".$pejabat."' ".
		   "WHERE userid = ".$uid;	
	
	}elseif ($typeid  == 21){	
		//get value
		$password = strip_tags(trim($_POST["password"]));
		//echo $uid;
		//exit;
		// process

		$sql = "UPDATE tb_member SET password = '".$password."' WHERE userid = '".$uid."'";
	   
	}elseif ($typeid  == 31){
		$nric = $_GET["nric"];
		//get value
		$nama = addslashes($_POST["nama"]);
		$userid = strip_tags(trim($_POST["userid"]));
		$gred = strip_tags(trim($_POST["gred"]));
		$jawatan = strip_tags(trim($_POST["jawatan"]));	
		$bahagian = strip_tags(trim($_POST["bahagian"]));	
		$unit = strip_tags(trim($_POST["unit"]));	
		$pejabat = strip_tags(trim($_POST["pejabat"]));	

		// process
		$sql = "UPDATE tb_member SET nama = '".$nama."', ".
		   "userid = '".$userid."', ".
		   "gred = '".$gred."', ".
		   "bahagian = '".$bahagian."', ".
		   "jawatan = '".$jawatan."', ".
		   "unit = '".$unit."', ".
		   "pejabat = '".$pejabat."' ".
		   "WHERE id = ".$nric;
		   
	}elseif ($typeid  == 32){
		$nric = $_GET["nric"];
		//get value

		// process
		$sql = "UPDATE tb_member SET flag = 1 WHERE id = '".$nric."'";
		if (mysqli_query($conn, $sql)) {
			echo '<script type="text/javascript">'; 
			echo 'window.location = "../index.php?uid='.$uid.'&typeid=3";';
			echo '</script>';			
			
		}else {
			echo "Error updating record: " . mysqli_error($conn);
		}

	}elseif ($typeid  == 33){
		
		$nric = $_GET["nric"];
		//get value
		$password = strip_tags(trim($_POST["password"]));
		//echo $uid;
		//exit;
		// process

		$sql = "UPDATE tb_member SET password = '".$password."' WHERE id = '".$nric."'";
		
	}elseif ($typeid  == 34){

		//get value
		$nama = addslashes($_POST['nama']);
		$userid = strip_tags(trim($_POST["userid"]));
		$gred = strip_tags(trim($_POST["gred"]));
		$jawatan = strip_tags(trim($_POST["jawatan"]));	
		$bahagian = strip_tags(trim($_POST["bahagian"]));	
		$unit = strip_tags(trim($_POST["unit"]));	
		$pejabat = strip_tags(trim($_POST["pejabat"]));	
		
		
		
		
		

		// process
		$sql = "INSERT INTO tb_member (nama,userid,password,jawatan,gred,bahagian,unit,access_level,flag,pejabat)
		VALUES ('".$nama."','".$userid."',123456,'".$jawatan."','".$gred."','".$bahagian."','".$unit."',3,0,'".$pejabat."')";	

	}elseif ($typeid  == 41){
		echo $nric = $_GET["nric"];
		//exit;
		//get value
		$nama = strip_tags(trim($_POST["nama"]));
		$no_kp = strip_tags(trim($_POST["userid"]));		
		$pejabat = strip_tags(trim($_POST["pejabat"]));		
		
		// process
		$sql = "UPDATE db_pemandu SET no_kp = '".$no_kp."', ".
		   "nama = '".$nama."', ".
		   "pejabat = '".$pejabat."' ".
		   "WHERE id = ".$nric;

	}elseif ($typeid  == 42){
		$nric = $_GET["nric"];
		//get value

		// process
		$sql = "UPDATE db_pemandu SET flag = 1 WHERE id = '".$nric."'";
		if (mysqli_query($conn, $sql)) {
			echo '<script type="text/javascript">'; 
			echo 'window.location = "../index.php?uid='.$uid.'&typeid=4";';
			echo '</script>';			
			
		}else {
			echo "Error updating record: " . mysqli_error($conn);
		}
		
   }elseif ($typeid  == 43){

		//get value
		$nama = strip_tags(trim($_POST["nama"]));
		$no_kp = strip_tags(trim($_POST["userid"]));
		$pejabat = strip_tags(trim($_POST["pejabat"]));

		// process
		$sql = "INSERT INTO db_pemandu (no_kp,nama,flag,pejabat)
		VALUES ('".$no_kp."','".$nama."',0,'".$pejabat."')";		

	}elseif ($typeid  == 51){
		echo $nric = $_GET["nric"];
		//exit;
		//get value
		$nama = strip_tags(trim($_POST["nama"]));
		// process
		$sql = "UPDATE db_no_kenderaan SET nama = '".$nama."' WHERE id = ".$nric;

	}elseif ($typeid  == 52){
		$nric = $_GET["nric"];
		//get value

		// process
		$sql = "UPDATE db_no_kenderaan SET flag = 1 WHERE id = '".$nric."'";
		if (mysqli_query($conn, $sql)) {
			echo '<script type="text/javascript">'; 
			echo 'window.location = "../index.php?uid='.$uid.'&typeid=5";';
			echo '</script>';			
			
		}else {
			echo "Error updating record: " . mysqli_error($conn);
		}
		
   }elseif ($typeid  == 53){

		//get value
		$nama = strip_tags(trim($_POST["nama"]));

		// process
		$sql = "INSERT INTO db_no_kenderaan (nama,flag)
		VALUES ('".$nama."',0)";		
		
	}else{
		echo "error";
	}
	
	
	
	if ($typeid  <> 32 and $typeid  <> 42 and $typeid  <> 52)  {
		if (mysqli_query($conn, $sql)) {
			//echo "Record updated successfully";
		}else {
			echo "Error updating record: " . mysqli_error($conn);
		}

		echo '<script type="text/javascript">'; 
			echo 'alert("Maklumat telah dikemaskini.");'; 
		echo '</script>';
		
		echo  "<script type='text/javascript'>";
			echo "window.close();";
		echo "</script>";		
	}
	
	mysqli_close($conn);
?>
