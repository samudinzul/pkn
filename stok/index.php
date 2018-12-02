<?php
// Start the session
session_start();

include '../includes/redirect.php';
include '../includes/connection.php';

$uid = $_GET["uid"];
$typeid = $_GET["typeid"];
/*


$sql1 = "SELECT uid,sqno FROM tb_users WHERE sqno = ".$_SESSION["sqno"];
$result1 = mysqli_query($conn, $sql1);
	if (mysqli_num_rows($result1) > 0) {
		while($row1 = mysqli_fetch_assoc($result1)) {	
			$staff_id = $row1["uid"];
			$sqno = $row1["sqno"];	
		}
	}

	$sql11 = "SELECT * FROM hrms_designation WHERE staff_id = '".$staff_id."' ORDER BY date_commence desc LIMIT 1";
	$result11 = mysqli_query($conn, $sql11);
		if (mysqli_num_rows($result11) > 0) {
			while($row11 = mysqli_fetch_assoc($result11)) {	
				$unit = $row11["unit"];
			}
		}
*/
	
//echo $unit;
//$typeid = $_GET["typeid"];
?>

<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en-US">
<!--<![endif]-->

<head>
<!-- un-comment and delete 2nd meta below to disable zoom (not cool)
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"> -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta charset="UTF-8">
<script type="text/javascript" src="../js/jquery.js"></script>
<title><?php include '../includes/title.php';?></title>


<!-- RSS -->
<link rel="alternate" type="application/rss+xml" title="#" href="#" />


<!-- Favicon -->
<link rel="shortcut icon" href="../images/favicon.ico"/>


<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans%7CLato' rel='stylesheet' type='text/css'>


<!-- Primary CSS -->
<link rel="stylesheet" href="../style.css" type="text/css" media="all" />
<link rel="stylesheet" href="../css/_mobile.css" type="text/css" media="all" />


<!-- Color Scheme CSS -->
<?php include '../includes/color_scheme.php';?>


<script type="text/javascript">
	// Popup window code
	function newPopup1(url) {
		popupWindow = window.open(
			url,'popUpWindow','width=1200,height=700,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
	}
		
</script>
	
<style>
	table {
		border-collapse: collapse;
		border-spacing: 0;
		width: 90%;
	}

	th, td {
		border: 1px solid #ccc;
		text-align: left;
		padding: 8px;
	}

	tr:nth-child(even){background-color: #fff}
</style>

<script type='text/javascript'>
	window.onunload = function(){
	window.opener.location.reload();}
</script>


<!--[if IE 9]>
<style media="screen">
#footer,
.header-holder
{
behavior: url(js/PIE/PIE.htc);
}
</style>
<![endif]-->
<!--[if lte IE 8]>
<script type='text/javascript' src='js/html5shiv.js'></script>
<style media="screen">
/* uncomment for IE8 rounded corners
#menu-main-nav .drop ul a,
#menu-main-nav .drop,
#menu-main-nav ul.sub-menu,
#menu-main-nav .drop .c, 
#menu-main-nav li.parent, */
#footer,
.header-holder,
#horizontal_nav ul li,
#horizontal_nav ul a,
#tt-gallery-nav li,
#tt-gallery-nav a,
ul.tabset li,
ul.tabset a,
.karma-pages a,
.karma-pages span,
.wp-pagenavi a,
.wp-pagenavi span,
.post_date,
.post_comments,
.ka_button,
.flex-control-paging li a,
.colored_box,
.tools,
.karma_notify
.opener,
.callout_button,
.testimonials {
behavior: url(js/PIE/PIE.htc);
}
</style>
<![endif]-->
<!--[if IE]>
<link rel="stylesheet" href="css/_internet_explorer.css" media="screen"/>
<![endif]-->



</head>


<body>
   <div id="tt-wide-layout" class="content-style-default">
      <div id="wrapper">
         <header role="banner" id="header">      
            <div class="top-block">
               <?php include '../includes/top.php';?>
            </div><!-- END top-block -->   
			
            <div class="header-holder tt-logo-center">
               <div class="header-overlay">
                  <div class="header-area">
				  
                     <?php include '../includes/logo.php';?>
                     
                     
                     
                     <!-- ***************** - Main Menu - ***************** -->
					 <?php include '../includes/menu.php';?>

                  </div><!-- END header-area -->
               </div><!-- END header-overlay -->
            </div><!-- END header-holder -->
         </header><!-- END header -->
         
         
         
         
         <!-- ***************** - Main Content Area - ***************** -->
         <div id="main">
            <div class="main-area">
            
            
            
            
            
            
              <!-- ////////////////////////////////////////////////////////// -->
              <!-- ***************** - Content Start Here - ***************** -->
              <!-- ////////////////////////////////////////////////////////// -->
              
              
              <!-- ***************** - Breadcrumbs Start Here - ***************** -->
               <div class="tools">
				   <span class="tools-top"></span>
				   <div class="frame">
					<h1>PERMOHONAN STOK</h1>
				   </div><!-- END frame -->
				   
				   <span class="tools-bottom"></span>
				</div><!-- END tools -->
				
				<nav role="navigation" id="sub_nav">
				   <ul class="sub-menu">
					  <li><a href="index.php?uid=<?php echo $uid;?>&typeid=1">MyPesanan </a></li>
						<?php if ($uid == "123456" or $uid == "701001085731" or $uid == "841218085577"){?>
							<li><a href="index.php?uid=<?php echo $uid;?>&typeid=2">Pentadbiran</a></li>
						<?php }?>
						<li><a href="index.php?uid=<?php echo $uid;?>&typeid=3">Status->Lulus</a></li>
						<li><a href="index.php?uid=<?php echo $uid;?>&typeid=4">Status->Tidak Lulus</a></li>
						<li><a href="index.php?uid=<?php echo $uid;?>&typeid=5">Status->Batal</a></li>
						<li><a href="index.php?uid=<?php echo $uid;?>&typeid=6">Laporan</a></li>	
				   </ul>
				</nav><!-- END sub_nav -->
				
				<main role="main" id="content" class="content-left-nav">
					<?php if ($typeid == 1){ //My Order ?>

						<p><a class="ka_button small_button small_coolblue" href="#" onclick="JavaScript:newPopup1('start.php?uid=<?php echo $uid;?>&typeid=Order')"><label for="description" class="field-icon"><i class="fa fa-shopping-cart"></i></label>Mula Pesan!</a></p>
						
						<h4 class="heading-horizontal" style="margin:0px 0 20px 0;"><span> Pesanan Stok </span></h4>
						
						<div style="overflow-x:auto;">
						  <table>
							<tr>
							  <td style="text-align:center"><strong>Bil.</strong></td>
							  <td style="text-align:center"><strong>Tarikh Mohon</strong></td>
							  <td style="text-align:center"><strong>Nama Pemohon</strong></td>							  
							  <td style="text-align:center"><strong>Status</strong></td>
							  <td style="text-align:center"></td>
							</tr>

							<?php
							$x = 1;
							
							//if ($_SESSION["sqno"] == 99 or $_SESSION["sqno"] == 4 or $_SESSION["sqno"] == 15){
							//	$sql = "SELECT * FROM stationery_order WHERE status = 'New' ORDER BY id DESC";
							//	$result = mysqli_query($conn, $sql);
							//}else{
							
							if ($uid == "123456" or $uid == "701001085731" or $uid == "841218085577"){
								$sql = "SELECT * FROM stok_order WHERE status = 'New' ORDER BY id DESC";
								$result = mysqli_query($conn, $sql);								
							}else{
								$sql = "SELECT * FROM stok_order WHERE userid =  '".$uid."' and status = 'New' ORDER BY id DESC";
								$result = mysqli_query($conn, $sql);								
							}

							//}
								if (mysqli_num_rows($result) > 0) {
									while($row = mysqli_fetch_assoc($result)) {										
							?>
									<tr>
										<td style="text-align:center"><?php echo $x;?>.</td>
										<td style="text-align:center"><a href="#" onclick="JavaScript:newPopup1('proses/papar_stok.php?id=<?php echo $row["id"];?>')">
											<?php 
											$yyyy = substr($row["order_date"],0,4);
											$mm = substr($row["order_date"],5,2);
											$dd = substr($row["order_date"],8,2);
											echo $dd."/".$mm."/".$yyyy;
											?>										
										</a></td>										
										<td style="text-align:left">										
											<?php
											$sql2 = "SELECT nama FROM tb_member WHERE userid = '".$row["userid"]."'";
											$result2 = mysqli_query($conn, $sql2);
												if (mysqli_num_rows($result2) > 0) {
													while($row2 = mysqli_fetch_assoc($result2)) {
														echo $row2["nama"];
													}
												}																				
											?>
										</td>
										
										<?php 
										/*
										if ($row["status"] == ""){
											echo "Incomplete";
										}else{
										*/
											if ($row["status"] == "New"){
												echo "<td style='color:#0000FF;text-align:center'>Baru</td>";
											}elseif ($row["status"] == "Approved"){
												echo "<td style='color:#04B404;text-align:center'>Lulus</td>";
											}elseif ($row["status"] == "Disapprove"){
												echo "<td style='color:#FF0000;text-align:center'>Tidak Lulus</td>";
											}elseif ($row["status"] == "Cancel"){
												echo "<td style='color:#FF0000;text-align:center'>Batal</td>";
											}else{
												echo "error";
											}
										//}

										?>
										<td>
											<?php if ($row["status"] == ""){?>
												<a href="proses/process_order_db.php?id=<?php echo $row["id"];?>&typeid=Delete" onclick="return confirm('Are you sure you want to delete this order?');">Hapus</a>
											<?php }?>
											
											<?php if ($uid == "123456" or $uid == "701001085731" or $uid == "841218085577"){?>
												<a href="#" onclick="JavaScript:newPopup1('proses/process_order.php?id=<?php echo $row["id"];?>&typeid=Process')">Proses</a> <br />
											<?php }?>
											
											<?php if ($row["status"] == "New" and $row["userid"] == $uid){?>
												<a href="proses/process_order_db.php?uid=<?php echo $uid;?>&id=<?php echo $row["id"];?>&typeid=Cancel" onclick="return confirm('Are you sure you want to cancel this order?');">Batal</a>
											<?php }?>
										</td>										
									</tr>
							<?php
									$x = $x + 1;	
									}
								}							
							?>
							
						  </table>
						</div>						
						
							
					<?php }elseif ($typeid == 2) { //Administration?>
					
						<h4 class="heading-horizontal" style="margin:0px 0 20px 0;"><span>Pentadbiran </span></h4>

						<?php 
						$sql5 = "SELECT * FROM stok_category";
						$result5 = mysqli_query($conn, $sql5);
						if (mysqli_num_rows($result5) > 0) {
							while($row5 = mysqli_fetch_assoc($result5)) {
								echo "<strong>";
								echo $row5["name"];
								echo "</strong>";
						?>
							
							<div style="overflow-x:auto;">
							  <table>
								<tr>
								  <td style="text-align:center"><strong>No.</strong></td>
								  <td style="text-align:center"><strong>Gambar</strong></td>
								  <td style="text-align:center"><strong>Nama Item</strong></td>
								  <td style="text-align:center"><strong>Kod Kawalan</strong></td>								  
								  <td style="text-align:center"><strong>Kod Barang</strong></td>								  
								  <td style="text-align:center"><strong>Dalam Tangan</strong></td>
								  <td style="text-align:center"><strong>lulus</strong></td>
								  <td style="text-align:center"><strong>Baki</strong></td>
								  <td style="text-align:center"><strong>Post</strong></td>
								  <td style="text-align:center"></td>
								</tr>
								
								<?php								
								$x = 1;
								
								$sql = "SELECT * FROM stok_item WHERE id_category = ".$row5["id"];
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
									while($row = mysqli_fetch_assoc($result)) {								
								?>
									<tr>
										<td style="text-align:center"><?php echo $x;?>.</td>
										<td style="text-align:left"><img src="img/item/<?php echo $row["pics"];?>" width="100"></td>
										<td style="text-align:left"><a href="#" onclick="JavaScript:newPopup1('proses/detail_item.php?id=<?php echo $row["id"];?>')"><?php echo $row["name"];?></a></td>
										<td style="text-align:left"><?php echo $row["kod_kawalan"];?></td>
										<td style="text-align:left"><?php echo $row["kod_barang"];?></td>
										<td style="text-align:center">
										<?php
										$sql2 = "SELECT SUM(quantity) as total2 FROM stok_item_detail WHERE id_item = ".$row["id"]."";
										$result2 = $conn->query($sql2);
										if (mysqli_num_rows($result2) > 0) {
											while($row2 = mysqli_fetch_assoc($result2)) {
												$total2 = $row2["total2"];
												echo number_format($total2,0);
											}
										}										
										?>
										</td>
										<td style="text-align:center">
										<?php
										$sql3 = "SELECT SUM(approved_quantity) as total3 FROM stok_order_detail WHERE id_item = ".$row["id"]."";
										$result3 = $conn->query($sql3);
										if (mysqli_num_rows($result3) > 0) {
											while($row3 = mysqli_fetch_assoc($result3)) {
												$total3 = $row3["total3"];
												echo number_format($total3,0);
											}
										}										
										?>
										</td>
										
										<?php
										$total4 = 0;
										$total4 = $total2 - $total3;
										if ($total4 < 0){
										?>
											<td style="color:red;text-align:center"><?php echo number_format($total4,0);?></td>
										<?php	
										}else{
										?>
											<td style="text-align:center"><?php echo number_format($total4,0);?></td>
										<?php }?>
										
										<td style="text-align:center">
										<?php 
										if ($row["publish"] == 'Y'){
											echo "<a class='ka_button small_button small_coolblue'>Ya</a>";
										}else{
											echo "<a class='ka_button small_button small_buoyred'>Tidak</a>";
										}?>
										</td>
										
										<td>
											<a href="#" onclick="JavaScript:newPopup1('proses/update_item.php?id=<?php echo $row["id"];?>&typeid=Update')">Update</a> <br />
											<a href="#" onclick="JavaScript:newPopup1('proses/update_item.php?id=<?php echo $row["id"];?>&typeid=Qty')">+ Qty</a> <br />
										</td>
									</tr>									
								<?php
									$x = $x + 1;	
									}
								}							
								?>							
							  </table>
							  
							  <p>&nbsp;</p>
							</div>
							
						<?php
							}
						}
						?>							
							  
						
					<?php }elseif ($typeid == 3){ //Status: Approved ?>
						
						<h4 class="heading-horizontal" style="margin:0px 0 20px 0;"><span> Status: Lulus </span></h4>
						
						<div style="overflow-x:auto;">
						  <table>
							<tr>
							  <td style="text-align:center"><strong>Bil.</strong></td>
							  <td style="text-align:center"><strong>Tarikh Mohon</strong></td>
							  <td style="text-align:center"><strong>Nama Pemohon</strong></td>							  
							  <td style="text-align:center"><strong>Status</strong></td>
							</tr>
							
							<?php
							$x = 1;
							if ($uid == "123456" or $uid == "701001085731" or $uid == "841218085577"){
								$sql = "SELECT * FROM stok_order WHERE status = 'Approved' ORDER BY id DESC";
								$result = mysqli_query($conn, $sql);								
							}else{
								$sql = "SELECT * FROM stok_order WHERE userid =  '".$uid."' and status = 'Approved' ORDER BY id DESC";
								$result = mysqli_query($conn, $sql);								
							}							

								if (mysqli_num_rows($result) > 0) {
									while($row = mysqli_fetch_assoc($result)) {										
							?>
									<tr>
										<td style="text-align:center"><?php echo $x;?>.</td>										
										<td style="text-align:center"><a href="#" onclick="JavaScript:newPopup1('proses/papar_stok.php?id=<?php echo $row["id"];?>')">
											<?php 
											$yyyy = substr($row["order_date"],0,4);
											$mm = substr($row["order_date"],5,2);
											$dd = substr($row["order_date"],8,2);
											echo $dd."/".$mm."/".$yyyy;
											?>
										</a></td>										
										<td style="text-align:left">										
											<?php
											$sql2 = "SELECT nama FROM tb_member WHERE userid = '".$row["userid"]."'";
											$result2 = mysqli_query($conn, $sql2);
												if (mysqli_num_rows($result2) > 0) {
													while($row2 = mysqli_fetch_assoc($result2)) {
														echo $row2["nama"];
													}
												}																				
											?>
										</td>
										
										<?php 
										/*
										if ($row["status"] == ""){
											echo "Incomplete";
										}else{
										*/
											if ($row["status"] == "New"){
												echo "<td style='color:#0000FF;text-align:center'>Baru</td>";
											}elseif ($row["status"] == "Approved"){
												echo "<td style='color:#04B404;text-align:center'>Lulus</td>";
											}elseif ($row["status"] == "Disapprove"){
												echo "<td style='color:#FF0000;text-align:center'>Tidak Lulus</td>";
											}elseif ($row["status"] == "Cancel"){
												echo "<td style='color:#FF0000;text-align:center'>Batal</td>";
											}else{
												echo "error";
											}
										//}

										?>									
									</tr>
							<?php
									$x = $x + 1;	
									}
								}							
							?>
							
						  </table>
						  						
						</div>
						
					<?php }elseif ($typeid == 4){ //Status: Approved ?>
						
						<h4 class="heading-horizontal" style="margin:0px 0 20px 0;"><span> Status: Tidak Lulus </span></h4>
						
						<div style="overflow-x:auto;">
						  <table>
							<tr>
							  <td style="text-align:center"><strong>Bil.</strong></td>
							  <td style="text-align:center"><strong>Tarikh Mohon</strong></td>
							  <td style="text-align:center"><strong>Nama Pemohon</strong></td>							  
							  <td style="text-align:center"><strong>Status</strong></td>
							</tr>
							
							<?php
							$x = 1;

							if ($uid == "123456" or $uid == "701001085731" or $uid == "841218085577"){
								$sql = "SELECT * FROM stok_order WHERE status = 'Disapprove' ORDER BY id DESC";
								$result = mysqli_query($conn, $sql);								
							}else{
								$sql = "SELECT * FROM stok_order WHERE userid =  '".$uid."' and status = 'Disapprove' ORDER BY id DESC";
								$result = mysqli_query($conn, $sql);								
							}
							
								if (mysqli_num_rows($result) > 0) {
									while($row = mysqli_fetch_assoc($result)) {										
							?>
									<tr>
										<td style="text-align:center"><?php echo $x;?>.</td>
										<td style="text-align:center"><a href="#" onclick="JavaScript:newPopup1('proses/papar_stok.php?id=<?php echo $row["id"];?>')">
											<?php 
											$yyyy = substr($row["order_date"],0,4);
											$mm = substr($row["order_date"],5,2);
											$dd = substr($row["order_date"],8,2);
											echo $dd."/".$mm."/".$yyyy;
											?>
										</a></td>										
										<td style="text-align:left">										
											<?php
											$sql2 = "SELECT nama FROM tb_member WHERE userid = '".$row["userid"]."'";
											$result2 = mysqli_query($conn, $sql2);
												if (mysqli_num_rows($result2) > 0) {
													while($row2 = mysqli_fetch_assoc($result2)) {
														echo $row2["nama"];
													}
												}																				
											?>
										</td>
										
										<?php 
										/*
										if ($row["status"] == ""){
											echo "Incomplete";
										}else{
										*/
											if ($row["status"] == "New"){
												echo "<td style='color:#0000FF;text-align:center'>Baru</td>";
											}elseif ($row["status"] == "Approved"){
												echo "<td style='color:#04B404;text-align:center'>Lulus</td>";
											}elseif ($row["status"] == "Disapprove"){
												echo "<td style='color:#FF0000;text-align:center'>Tidak Lulus</td>";
											}elseif ($row["status"] == "Cancel"){
												echo "<td style='color:#FF0000;text-align:center'>Batal</td>";
											}else{
												echo "error";
											}
										//}

										?>									
									</tr>
							<?php
									$x = $x + 1;	
									}
								}							
							?>
							
						  </table>
						</div>
						
						
					<?php }elseif ($typeid == 5){ //Status: Cancel ?>
						
						<h4 class="heading-horizontal" style="margin:0px 0 20px 0;"><span> Status: Batal </span></h4>
						
						<div style="overflow-x:auto;">
						  <table>
							<tr>
							  <td style="text-align:center"><strong>Bil.</strong></td>
							  <td style="text-align:center"><strong>Tarikh Mohon</strong></td>
							  <td style="text-align:center"><strong>Nama Pemohon</strong></td>							  
							  <td style="text-align:center"><strong>Status</strong></td>
							</tr>
							
							<?php
							$x = 1;

							if ($uid == "123456" or $uid == "701001085731" or $uid == "841218085577"){
								$sql = "SELECT * FROM stok_order WHERE status = 'Cancel' ORDER BY id DESC";
								$result = mysqli_query($conn, $sql);								
							}else{
								$sql = "SELECT * FROM stok_order WHERE userid =  '".$uid."' and status = 'Cancel' ORDER BY id DESC";
								$result = mysqli_query($conn, $sql);								
							}

								if (mysqli_num_rows($result) > 0) {
									while($row = mysqli_fetch_assoc($result)) {										
							?>
									<tr>
										<td style="text-align:center"><?php echo $x;?>.</td>
										<td style="text-align:center"><a href="#" onclick="JavaScript:newPopup1('proses/papar_stok.php?id=<?php echo $row["id"];?>')">
											<?php 
											$yyyy = substr($row["order_date"],0,4);
											$mm = substr($row["order_date"],5,2);
											$dd = substr($row["order_date"],8,2);
											echo $dd."/".$mm."/".$yyyy;
											?>
										</a></td>										
										<td style="text-align:left">										
											<?php
											$sql2 = "SELECT nama FROM tb_member WHERE userid = '".$row["userid"]."'";
											$result2 = mysqli_query($conn, $sql2);
												if (mysqli_num_rows($result2) > 0) {
													while($row2 = mysqli_fetch_assoc($result2)) {
														echo $row2["nama"];
													}
												}																				
											?>
										</td>
										
										<?php 
										/*
										if ($row["status"] == ""){
											echo "Incomplete";
										}else{
										*/
											if ($row["status"] == "New"){
												echo "<td style='color:#0000FF;text-align:center'>Baru</td>";
											}elseif ($row["status"] == "Approved"){
												echo "<td style='color:#04B404;text-align:center'>Lulus</td>";
											}elseif ($row["status"] == "Disapprove"){
												echo "<td style='color:#FF0000;text-align:center'>Tidak Lulus</td>";
											}elseif ($row["status"] == "Cancel"){
												echo "<td style='color:#FF0000;text-align:center'>Batal</td>";
											}else{
												echo "error";
											}
										//}

										?>									
									</tr>
							<?php
									$x = $x + 1;	
									}
								}							
							?>
							
						  </table>
						</div>

					<?php }elseif ($typeid == 6) { // Reports?>
					
						<h4 class="heading-horizontal" style="margin:0px 0 20px 0;"><span>Reports </span></h4>
						

						
					<?php }else {?>
						error
					<?php }?>
					
											
					<br class="clear" />
			
                  
                  
                  <!-- ////////////////////////////////////////////////////////// -->
                  <!-- ***************** - Content Ends Here - ****************** -->
                  <!-- ////////////////////////////////////////////////////////// -->               
               
               
               

               
                </main><!-- END main #content -->
            </div><!-- END main-area -->
         
         <div id="footer-top">&nbsp;</div>
      </div><!-- END main -->
         
         
         
         
         <!-- ***************** - Footer Starts Here - ***************** -->
         <footer role="contentinfo" id="footer">


      
      
      
			<!-- ***************** - Footer Bottom Starts Here - ***************** -->
		
			<?php include '../includes/footer.php';?>

		</footer><!-- END footer -->
      
       
</div><!-- END wrapper -->
</div><!-- END tt-layout -->




<!-- ***************** - JavaScript Starts Here - ***************** -->
<script type="text/javascript" src="../js/custom-main.js"></script>
<script type="text/javascript" src="../js/superfish.js"></script>
<script type="text/javascript" src="../js/jquery.flexslider.js"></script>
<script type="text/javascript" src="../js/jquery.fitvids.js"></script>
<script type="text/javascript" src="../js/scrollWatch.js"></script>
<script type="text/javascript" src="../js/jquery.isotope.js"></script>
<script type="text/javascript" src="../js/jquery.ui.core.min.js"></script>
<script type="text/javascript" src="../js/jquery.ui.widget.min.js"></script>
<script type="text/javascript" src="../js/jquery.ui.tabs.min.js"></script>
<script type="text/javascript" src="../js/jquery.ui.accordion.min.js"></script>
<script type="text/javascript" src="../js/jquery.prettyPhoto.js"></script>
<script>
jQuery(document).ready(function () {
    jQuery('.tt-parallax-text').fadeIn(1000); //delete this to remove fading content

    var $window = jQuery(window);
    jQuery('section[data-type="background"]').each(function () {
        var $bgobj = jQuery(this);

        jQuery(window).scroll(function () {
            var yPos = -($window.scrollTop() / $bgobj.data('speed'));
            var coords = '50% ' + yPos + 'px';
            $bgobj.css({
                backgroundPosition: coords
            });
        });
    });
});
</script>

<!--[if !IE]><!--><script>
  if (/*@cc_on!@*/false) {
	  document.documentElement.className+=' ie10';
  }
</script><!--<![endif]-->
</body>
</html>