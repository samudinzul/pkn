<?php
//echo $_SESSION["mc_mv_uid"];
//echo $uid;
//exit;


if ($_SESSION["mc_mv_uid"] == ""){
	header("Location: /pkn/", true, 301);
	exit();
}
?>