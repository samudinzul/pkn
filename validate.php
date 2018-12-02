<?php 
	// Start the session
	session_start();
	
	include 'includes/connection.php';
	
	$mc_mv_uid =  strip_tags(trim($_POST["mc_mv_uid"]));
	$mc_mv_password = strip_tags(trim($_POST["mc_mv_password"]));
		
	$mc_mv_uid = mysqli_real_escape_string($conn, $mc_mv_uid);
	$mc_mv_password = mysqli_real_escape_string($conn, $mc_mv_password);	
		
	$sql = "SELECT userid,password FROM tb_member WHERE userid = '".$mc_mv_uid."' and password = '".$mc_mv_password."' and flag = 0";
	$result = $conn->query($sql);

	// Mysql_num_row is counting table row
	$count = $result->num_rows;

	// If result matched $mc_mv_uid, table row must be 1 row
	if($count==1){
		$sql2 = "SELECT id FROM tb_member WHERE userid = '".$mc_mv_uid."'";
		$result2 = mysqli_query($conn, $sql2);
			if (mysqli_num_rows($result2) > 0) {
				while($row2 = mysqli_fetch_assoc($result2)) {
					$_SESSION["mc_mv_uid"] = $row2["id"];
				}
			}		
		//echo $_SESSION["mc_mv_uid"];
		//echo $mc_mv_uid;
		//exit;
		
		header("location:home.php?uid=$mc_mv_uid");
	}else{
		header("location:index.php?err=1");
	}
	
	mysqli_close($conn);
?>
