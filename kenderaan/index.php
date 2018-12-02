<?php
// Start the session
session_start();

include '../includes/redirect.php';
include '../includes/connection.php';

$uid = $_GET["uid"];
$typeid = $_GET["typeid"];
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
			url,'popUpWindow','width=700,height=600,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
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
					<h1>PERMOHONAN KENDERAAN</h1>
				   </div><!-- END frame -->
				   
				   <span class="tools-bottom"></span>
				</div><!-- END tools -->
				
				<nav role="navigation" id="sub_nav">
				   <ul class="sub-menu">
					<li><a href="index.php?uid=<?php echo $uid;?>&typeid=1">Pergerakan Pemandu</a></li>
					<li><a href="index.php?uid=<?php echo $uid;?>&typeid=2">Status-> Baru</a></li>
					<li><a href="index.php?uid=<?php echo $uid;?>&typeid=3">Status-> Tolak</a></li>
					<!--<li><a href="index.php?uid=<?php echo $uid;?>&typeid=4">Status-> KIV</a></li>-->
					<li><a href="index.php?uid=<?php echo $uid;?>&typeid=5">Status-> Lulus</a></li>
					<li><a href="index.php?uid=<?php echo $uid;?>&typeid=6">Status-> Batal</a></li>
					<li><a href="index.php?uid=<?php echo $uid;?>&typeid=7">Status-> Selesai</a></li>
				   </ul>
				</nav><!-- END sub_nav -->
				
				<main role="main" id="content" class="content-left-nav">
					<?php if ($typeid == 1){?>
						
						<h4 class="heading-horizontal" style="margin:0px 0 20px 0;"><span>Pergerakan Pemandu</span></h4>
						
						<?php
						$sql3 = "SELECT pejabat FROM tb_member WHERE userid = ".$uid;
						$result3 = mysqli_query($conn, $sql3);
							if (mysqli_num_rows($result3) > 0) {
								while($row3 = mysqli_fetch_assoc($result3)) {
									$id_pejabat = $row3["pejabat"];									
								}
							}						
						?>
						
						<p><a class="ka_button small_button small_coolblue" href="#" onclick="JavaScript:newPopup1('proses/mohon_kenderaan.php?uid=<?php echo $uid;?>&pejabat=<?php echo $id_pejabat;?>&typeid=1')">Permohonan Baru</a></p>

						<?php								
						$sql = "SELECT * FROM db_pemandu WHERE flag = 0 and pejabat = ".$id_pejabat." ORDER BY nama";
						$result = mysqli_query($conn, $sql);
							if (mysqli_num_rows($result) > 0) {
								while($row = mysqli_fetch_assoc($result)) {	
									echo "<strong>";
									echo $row["nama"];
									echo "</strong>";						
						?>
						
								<div style="overflow-x:auto;">
								  <table>
									<tr>
									  <td style="text-align:center"><strong>Bil.</strong></td>
									  <td style="text-align:center"><strong>Tarikh Mohon</strong></td>
									  <td style="text-align:center"><strong>Tarikh Bertolak</strong></td>
									  <td style="text-align:center"><strong>Tarikh Kembali</strong></td>
									  <td style="text-align:center"><strong>Masa Bertolak</strong></td>
									  <td style="text-align:center"><strong>Masa Kembali</strong></td>
									  <td style="text-align:center"><strong>No. Kenderaan</strong></td>
									  <td style="text-align:center"><strong>Nama Pemohon</strong></td>
									</tr>
									
									<?php
									$x = 1;
									$sql2 = "SELECT * FROM db_kenderaan WHERE status_mohon = 4 AND nama_pemandu = ".$row["id"]." ORDER BY id desc";
									$result2 = mysqli_query($conn, $sql2);
										if (mysqli_num_rows($result2) > 0) {
											while($row2 = mysqli_fetch_assoc($result2)) {	
									?>
										<tr>
										  <td style="text-align:center"><?php echo $x;?></td>
										  <td style="text-align:center">
											<?php 
											$yyyy0 = substr($row2["tarikh_mohon"],0,4);
											$mm0 = substr($row2["tarikh_mohon"],5,2);
											$dd0 = substr($row2["tarikh_mohon"],8,2);
											echo $dd0."/".$mm0."/".$yyyy0;
											?>
										  <td style="text-align:center">
											<?php 
											$yyyy1 = substr($row2["tarikh_bertolak"],0,4);
											$mm1 = substr($row2["tarikh_bertolak"],5,2);
											$dd1 = substr($row2["tarikh_bertolak"],8,2);
											echo $dd1."/".$mm1."/".$yyyy1;
											?>
										  </td>	
										  <td style="text-align:center">
											<?php 
											$yyyy2 = substr($row2["tarikh_kembali"],0,4);
											$mm2 = substr($row2["tarikh_kembali"],5,2);
											$dd2 = substr($row2["tarikh_kembali"],8,2);
											echo $dd2."/".$mm2."/".$yyyy2;
											?>
										  </td>
										  <td style="text-align:center">
											<?php
												$sql22 = "SELECT masa_12 FROM tb_jam WHERE id = ".$row2["waktu_bertolak"];
												$result22 = mysqli_query($conn, $sql22);
													if (mysqli_num_rows($result22) > 0) {
														while($row22 = mysqli_fetch_assoc($result22)) {
															echo $row22["masa_12"];
														}
													}
											?>
										  </td>
										  <td style="text-align:center">
											<?php
												$sql23 = "SELECT masa_12 FROM tb_jam WHERE id = ".$row2["waktu_kembali"];
												$result23 = mysqli_query($conn, $sql23);
													if (mysqli_num_rows($result23) > 0) {
														while($row23 = mysqli_fetch_assoc($result23)) {
															echo $row23["masa_12"];
														}
													}
											?>
										  </td>										  
										  <td style="text-align:center">
										  <?php
											$sql21 = "SELECT nama FROM db_no_kenderaan WHERE id = ".$row2["no_kenderaan"];
											$result21 = mysqli_query($conn, $sql21);
												if (mysqli_num_rows($result21) > 0) {
													while($row21 = mysqli_fetch_assoc($result21)) {
														echo $row21["nama"];
													}
												}else{
													echo "";
												}
										  ?>										  
										  </td>
										  <td style="text-align:left">
											<?php
												$sql24 = "SELECT nama FROM tb_member WHERE userid = ".$row2["nama_pemohon"];
												$result24 = mysqli_query($conn, $sql24);
													if (mysqli_num_rows($result24) > 0) {
														while($row24 = mysqli_fetch_assoc($result24)) {
															echo $row24["nama"];
														}
													}
											?>
										  </td>										  
										</tr>
									<?php
									$x = $x + 1 ;		
											}
										}
									?>
									
								  </table>
								</div>
								<br />
						<?php
								}
							}
						?>
						
					<?php }elseif ($typeid == 2){?>
						<h4 class="heading-horizontal" style="margin:0px 0 20px 0;"><span>Permohonan Baru</span></h4>
						
						<div style="overflow-x:auto;">
						  <table>
							<tr>
							  <td style="text-align:center"><strong>Bil.</strong></td>
							  <td style="text-align:center"><strong>No. Kenderaan</strong></td>
							  <td style="text-align:center"><strong>Tarikh Bertolak</strong></td>
							  <td style="text-align:center"><strong>Masa Bertolak</strong></td>
							  <td style="text-align:center"><strong>Nama Pemohon</strong></td>
							  <td style="text-align:center"><strong>Status</strong></td>							  
							  <td style="text-align:center"><strong>Proses</strong></td>
							</tr>
							
							<?php
							$x = 1;
							
							$sql = "SELECT * FROM db_kenderaan WHERE status_mohon = 1 or status_mohon = 3 ORDER BY id desc";
							$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
									while($row = mysqli_fetch_assoc($result)) {
							?>
						
							<tr>
							  <td style="text-align:center"><?php echo $x;?>.</td>
							  <td><a href="#" onclick="JavaScript:newPopup1('proses/papar_kenderaan.php?id=<?php echo $row["id"];?>')">
								  <?php
									$sql24 = "SELECT nama FROM db_no_kenderaan WHERE id = ".$row["no_kenderaan"];
									$result24 = mysqli_query($conn, $sql24);
										if (mysqli_num_rows($result24) > 0) {
											while($row24 = mysqli_fetch_assoc($result24)) {
												echo $row24["nama"];
											}
										}else{
											echo "";
										}
								  ?>
							  </a></td>
							  <td style="text-align:center">
								<?php 
								$yyyy1 = substr($row["tarikh_bertolak"],0,4);
								$mm1 = substr($row["tarikh_bertolak"],5,2);
								$dd1 = substr($row["tarikh_bertolak"],8,2);
								echo $dd1."/".$mm1."/".$yyyy1;
								?>
							  </td>	
							  <td style="text-align:center">
								<?php
									$sql21 = "SELECT masa_12 FROM tb_jam WHERE id = ".$row["waktu_bertolak"];
									$result21 = mysqli_query($conn, $sql21);
										if (mysqli_num_rows($result21) > 0) {
											while($row21 = mysqli_fetch_assoc($result21)) {
												echo $row21["masa_12"];
											}
										}
								?>
							  </td>	
							  <td style="text-align:left">
								<?php
									$sql22 = "SELECT nama FROM tb_member WHERE userid = ".$row["nama_pemohon"];
									$result22 = mysqli_query($conn, $sql22);
										if (mysqli_num_rows($result22) > 0) {
											while($row22 = mysqli_fetch_assoc($result22)) {
												echo $row22["nama"];
											}
										}
								?>
							  </td>
							  <td style="text-align:center">
								<?php
									$sql23 = "SELECT nama FROM tb_status_kenderaan WHERE id = ".$row["status_mohon"];
									$result23 = mysqli_query($conn, $sql23);
										if (mysqli_num_rows($result23) > 0) {
											while($row23 = mysqli_fetch_assoc($result23)) {
												echo $row23["nama"];
											}
										}
								?>
							  </td>
							  
								<td>
									<?php if ($uid == "123456" or $uid == "701001085731" or $uid == "781217085696" or $uid == "790122085110"){?>								
										<a href="#" onclick="JavaScript:newPopup1('proses/proses_kenderaan.php?uid=<?php echo $uid;?>&id=<?php echo $row["id"];?>')">Pemandu</a> <br />
									<?php }?>
									<a href="proses/proses_selesai_db.php?uid=<?php echo $uid;?>&id=<?php echo $row["id"];?>&typeid=6" onclick="return confirm('Are you sure you want to cancel this order?');">Batal</a>
								</td>
							</tr>

							<?php
								$x = $x + 1;
									}
								}
							?>
							
						  </table>
						</div>
						
					<?php }elseif ($typeid == 3){?>
						<h4 class="heading-horizontal" style="margin:0px 0 20px 0;"><span>Permohonan Tolak</span></h4>
						
						<div style="overflow-x:auto;">
						  <table>
							<tr>
							  <td style="text-align:center"><strong>Bil.</strong></td>
							  <td style="text-align:center"><strong>No. Kenderaan</strong></td>
							  <td style="text-align:center"><strong>Tarikh Bertolak</strong></td>
							  <td style="text-align:center"><strong>Masa Bertolak</strong></td>
							  <td style="text-align:center"><strong>Nama Pemohon</strong></td>
							  <td style="text-align:center"><strong>Status</strong></td>
							  <td style="text-align:center"><strong>Proses</strong></td>
							</tr>
							
							<?php
							$x = 1;
							
							$sql = "SELECT * FROM db_kenderaan WHERE status_mohon = 2 ORDER BY id desc";
							$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
									while($row = mysqli_fetch_assoc($result)) {
							?>
						
							<tr>
							  <td style="text-align:center"><?php echo $x;?>.</td>
							  <td><a href="#" onclick="JavaScript:newPopup1('proses/papar_kenderaan.php?id=<?php echo $row["id"];?>')">
								  <?php
									$sql24 = "SELECT nama FROM db_no_kenderaan WHERE id = ".$row["no_kenderaan"];
									$result24 = mysqli_query($conn, $sql24);
										if (mysqli_num_rows($result24) > 0) {
											while($row24 = mysqli_fetch_assoc($result24)) {
												echo $row24["nama"];
											}
										}else{
											echo "";
										}
								  ?>
							  </a></td>
							  <td style="text-align:center">
								<?php 
								$yyyy1 = substr($row["tarikh_bertolak"],0,4);
								$mm1 = substr($row["tarikh_bertolak"],5,2);
								$dd1 = substr($row["tarikh_bertolak"],8,2);
								echo $dd1."/".$mm1."/".$yyyy1;
								?>
							  </td>	
							  <td style="text-align:center">
								<?php
									$sql21 = "SELECT masa_12 FROM tb_jam WHERE id = ".$row["waktu_bertolak"];
									$result21 = mysqli_query($conn, $sql21);
										if (mysqli_num_rows($result21) > 0) {
											while($row21 = mysqli_fetch_assoc($result21)) {
												echo $row21["masa_12"];
											}
										}
								?>
							  </td>	
							  <td style="text-align:left">
								<?php
									$sql22 = "SELECT nama FROM tb_member WHERE userid = ".$row["nama_pemohon"];
									$result22 = mysqli_query($conn, $sql22);
										if (mysqli_num_rows($result22) > 0) {
											while($row22 = mysqli_fetch_assoc($result22)) {
												echo $row22["nama"];
											}
										}
								?>
							  </td>
							  <td style="text-align:center">
								<?php
									$sql23 = "SELECT nama FROM tb_status_kenderaan WHERE id = ".$row["status_mohon"];
									$result23 = mysqli_query($conn, $sql23);
										if (mysqli_num_rows($result23) > 0) {
											while($row23 = mysqli_fetch_assoc($result23)) {
												echo $row23["nama"];
											}
										}
								?>
							  </td>
								<td>
									<?php if ($uid == "123456" or $uid == "701001085731" or $uid == "781217085696" or $uid == "790122085110"){?>								
										<a href="#" onclick="JavaScript:newPopup1('proses/proses_kenderaan.php?uid=<?php echo $uid;?>&id=<?php echo $row["id"];?>')">Pemandu</a> <br />
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

					<?php }elseif ($typeid == 5){?>
						<h4 class="heading-horizontal" style="margin:0px 0 20px 0;"><span>Permohonan Lulus</span></h4>
						
						<div style="overflow-x:auto;">
						  <table>
							<tr>
							  <td style="text-align:center"><strong>Bil.</strong></td>
							  <td style="text-align:center"><strong>No. Kenderaan</strong></td>
							  <td style="text-align:center"><strong>Tarikh Bertolak</strong></td>
							  <td style="text-align:center"><strong>Masa Bertolak</strong></td>
							  <td style="text-align:center"><strong>Nama Pemohon</strong></td>
							  <td style="text-align:center"><strong>Status</strong></td>
							  <td style="text-align:center"><strong>Proses</strong></td>
							</tr>
							
							<?php
							$x = 1;
							
							$sql = "SELECT * FROM db_kenderaan WHERE status_mohon = 4 ORDER BY id desc";
							$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
									while($row = mysqli_fetch_assoc($result)) {
							?>
						
							<tr>
							  <td style="text-align:center"><?php echo $x;?>.</td>
							  <td><a href="#" onclick="JavaScript:newPopup1('proses/papar_kenderaan.php?id=<?php echo $row["id"];?>')">
								  <?php
									$sql24 = "SELECT nama FROM db_no_kenderaan WHERE id = ".$row["no_kenderaan"];
									$result24 = mysqli_query($conn, $sql24);
										if (mysqli_num_rows($result24) > 0) {
											while($row24 = mysqli_fetch_assoc($result24)) {
												echo $row24["nama"];
											}
										}else{
											echo "";
										}
								  ?>
							  </a></td>
							  <td style="text-align:center">
								<?php 
								$yyyy1 = substr($row["tarikh_bertolak"],0,4);
								$mm1 = substr($row["tarikh_bertolak"],5,2);
								$dd1 = substr($row["tarikh_bertolak"],8,2);
								echo $dd1."/".$mm1."/".$yyyy1;
								?>
							  </td>	
							  <td style="text-align:center">
								<?php
									$sql21 = "SELECT masa_12 FROM tb_jam WHERE id = ".$row["waktu_bertolak"];
									$result21 = mysqli_query($conn, $sql21);
										if (mysqli_num_rows($result21) > 0) {
											while($row21 = mysqli_fetch_assoc($result21)) {
												echo $row21["masa_12"];
											}
										}
								?>
							  </td>	
							  <td style="text-align:left">
								<?php
									$sql22 = "SELECT nama FROM tb_member WHERE userid = ".$row["nama_pemohon"];
									$result22 = mysqli_query($conn, $sql22);
										if (mysqli_num_rows($result22) > 0) {
											while($row22 = mysqli_fetch_assoc($result22)) {
												echo $row22["nama"];
											}
										}
								?>
							  </td>
							  <td style="text-align:center">
								<?php
									$sql23 = "SELECT nama FROM tb_status_kenderaan WHERE id = ".$row["status_mohon"];
									$result23 = mysqli_query($conn, $sql23);
										if (mysqli_num_rows($result23) > 0) {
											while($row23 = mysqli_fetch_assoc($result23)) {
												echo $row23["nama"];
											}
										}
								?>
							  </td>
								<td>
									<?php if ($uid == "123456" or $uid == "701001085731" or $uid == "781217085696" or $uid == "790122085110"){?>								
										<a href="#" onclick="JavaScript:newPopup1('proses/proses_kenderaan.php?uid=<?php echo $uid;?>&id=<?php echo $row["id"];?>')">Pemandu</a> <br />
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

					<?php }elseif ($typeid == 6){?>
						<h4 class="heading-horizontal" style="margin:0px 0 20px 0;"><span>Permohonan Batal</span></h4>
						
						<div style="overflow-x:auto;">
						  <table>
							<tr>
							  <td style="text-align:center"><strong>Bil.</strong></td>
							  <td style="text-align:center"><strong>No. Kenderaan</strong></td>
							  <td style="text-align:center"><strong>Tarikh Bertolak</strong></td>
							  <td style="text-align:center"><strong>Masa Bertolak</strong></td>
							  <td style="text-align:center"><strong>Nama Pemohon</strong></td>
							  <td style="text-align:center"><strong>Status</strong></td>
							  <td style="text-align:center"><strong>Proses</strong></td>
							</tr>
							
							<?php
							$x = 1;
							
							$sql = "SELECT * FROM db_kenderaan WHERE status_mohon = 5 ORDER BY id desc";
							$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
									while($row = mysqli_fetch_assoc($result)) {
							?>
						
							<tr>
							  <td style="text-align:center"><?php echo $x;?>.</td>
							  <td><a href="#" onclick="JavaScript:newPopup1('proses/papar_kenderaan.php?id=<?php echo $row["id"];?>')">
								  <?php
									$sql24 = "SELECT nama FROM db_no_kenderaan WHERE id = ".$row["no_kenderaan"];
									$result24 = mysqli_query($conn, $sql24);
										if (mysqli_num_rows($result24) > 0) {
											while($row24 = mysqli_fetch_assoc($result24)) {
												echo $row24["nama"];
											}
										}else{
											echo "";
										}
								  ?>
							  </a></td>
							  <td style="text-align:center">
								<?php 
								$yyyy1 = substr($row["tarikh_bertolak"],0,4);
								$mm1 = substr($row["tarikh_bertolak"],5,2);
								$dd1 = substr($row["tarikh_bertolak"],8,2);
								echo $dd1."/".$mm1."/".$yyyy1;
								?>
							  </td>	
							  <td style="text-align:center">
								<?php
									$sql21 = "SELECT masa_12 FROM tb_jam WHERE id = ".$row["waktu_bertolak"];
									$result21 = mysqli_query($conn, $sql21);
										if (mysqli_num_rows($result21) > 0) {
											while($row21 = mysqli_fetch_assoc($result21)) {
												echo $row21["masa_12"];
											}
										}
								?>
							  </td>	
							  <td style="text-align:left">
								<?php
									$sql22 = "SELECT nama FROM tb_member WHERE userid = ".$row["nama_pemohon"];
									$result22 = mysqli_query($conn, $sql22);
										if (mysqli_num_rows($result22) > 0) {
											while($row22 = mysqli_fetch_assoc($result22)) {
												echo $row22["nama"];
											}
										}
								?>
							  </td>
							  <td style="text-align:center">
								<?php
									$sql23 = "SELECT nama FROM tb_status_kenderaan WHERE id = ".$row["status_mohon"];
									$result23 = mysqli_query($conn, $sql23);
										if (mysqli_num_rows($result23) > 0) {
											while($row23 = mysqli_fetch_assoc($result23)) {
												echo $row23["nama"];
											}
										}
								?>
							  </td>
								<td>
									<?php if ($uid == "123456" or $uid == "701001085731" or $uid == "781217085696" or $uid == "790122085110"){?>								
										<a href="#" onclick="JavaScript:newPopup1('proses/proses_kenderaan.php?uid=<?php echo $uid;?>&id=<?php echo $row["id"];?>')">Pemandu</a> <br />
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

					<?php }elseif ($typeid == 7){?>
						<h4 class="heading-horizontal" style="margin:0px 0 20px 0;"><span>Permohonan Selesai</span></h4>
						
						<div style="overflow-x:auto;">
						  <table>
							<tr>
							  <td style="text-align:center"><strong>Bil.</strong></td>
							  <td style="text-align:center"><strong>No. Kenderaan</strong></td>
							  <td style="text-align:center"><strong>Tarikh Bertolak</strong></td>
							  <td style="text-align:center"><strong>Masa Bertolak</strong></td>
							  <td style="text-align:center"><strong>Nama Pemohon</strong></td>
							  <td style="text-align:center"><strong>Status</strong></td>							  
							</tr>
							
							<?php
							$x = 1;
							
							$sql = "SELECT * FROM db_kenderaan WHERE status_mohon = 6 ORDER BY id desc";
							$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
									while($row = mysqli_fetch_assoc($result)) {
							?>
						
							<tr>
							  <td style="text-align:center"><?php echo $x;?>.</td>
							  <td><a href="#" onclick="JavaScript:newPopup1('proses/papar_kenderaan.php?id=<?php echo $row["id"];?>')">
								  <?php
									$sql24 = "SELECT nama FROM db_no_kenderaan WHERE id = ".$row["no_kenderaan"];
									$result24 = mysqli_query($conn, $sql24);
										if (mysqli_num_rows($result24) > 0) {
											while($row24 = mysqli_fetch_assoc($result24)) {
												echo $row24["nama"];
											}
										}else{
											echo "";
										}
								  ?>
							  </a></td>
							  <td style="text-align:center">
								<?php 
								$yyyy1 = substr($row["tarikh_bertolak"],0,4);
								$mm1 = substr($row["tarikh_bertolak"],5,2);
								$dd1 = substr($row["tarikh_bertolak"],8,2);
								echo $dd1."/".$mm1."/".$yyyy1;
								?>
							  </td>	
							  <td style="text-align:center">
								<?php
									$sql21 = "SELECT masa_12 FROM tb_jam WHERE id = ".$row["waktu_bertolak"];
									$result21 = mysqli_query($conn, $sql21);
										if (mysqli_num_rows($result21) > 0) {
											while($row21 = mysqli_fetch_assoc($result21)) {
												echo $row21["masa_12"];
											}
										}
								?>
							  </td>	
							  <td style="text-align:left">
								<?php
									$sql22 = "SELECT nama FROM tb_member WHERE userid = ".$row["nama_pemohon"];
									$result22 = mysqli_query($conn, $sql22);
										if (mysqli_num_rows($result22) > 0) {
											while($row22 = mysqli_fetch_assoc($result22)) {
												echo $row22["nama"];
											}
										}
								?>
							  </td>
							  <td style="text-align:center">
								<?php
									$sql23 = "SELECT nama FROM tb_status_kenderaan WHERE id = ".$row["status_mohon"];
									$result23 = mysqli_query($conn, $sql23);
										if (mysqli_num_rows($result23) > 0) {
											while($row23 = mysqli_fetch_assoc($result23)) {
												echo $row23["nama"];
											}
										}
								?>
							  </td>
							</tr>

							<?php
								$x = $x + 1;
									}
								}
							?>
							
						  </table>
						</div>
						
					<?php }else{?>
						<h4>error</h4>
					
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