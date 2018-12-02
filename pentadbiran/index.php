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
			url,'popUpWindow','width=1000,height=600,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
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
					<h1>Pentadbiran</h1>
				   </div><!-- END frame -->
				   
				   <span class="tools-bottom"></span>
				</div><!-- END tools -->
				
				<nav role="navigation" id="sub_nav">
				   <ul class="sub-menu">
					<li><a href="index.php?uid=<?php echo $uid;?>&typeid=1">Maklumat Peribadi</a></li>
					<li><a href="index.php?uid=<?php echo $uid;?>&typeid=2">Tukar Kata Laluan</a></li>
					<?php if ($uid == "123456" or $uid == "701001085731" or $uid == "781217085696" or $uid == "790122085110" or $uid == "790804085767"){?>
						<li><a href="index.php?uid=<?php echo $uid;?>&typeid=3">Senarai Pengguna</a></li>
						<li><a href="index.php?uid=<?php echo $uid;?>&typeid=4">Senarai Pemandu</a></li>
						<li><a href="index.php?uid=<?php echo $uid;?>&typeid=5">Senarai Kenderaan</a></li>
					<?php }?>
				   </ul>
				</nav><!-- END sub_nav -->
				
				<main role="main" id="content" class="content-left-nav">
					<?php if ($typeid == 1){?>
						<h4>Maklumat Peribadi</h4>
						<p><a class="ka_button small_button small_coolblue" href="#" onclick="JavaScript:newPopup1('proses/kemaskini_profil.php?uid=<?php echo $uid;?>&typeid=11')">Kemaskini</a></p>
						<?php
						$sql = "SELECT * FROM tb_member WHERE userid = '".$uid."'";
						$result = mysqli_query($conn, $sql);
							if (mysqli_num_rows($result) > 0) {
								while($row = mysqli_fetch_assoc($result)) {
						?>
						
							<!--<p><a class="ka_button small_button small_coolblue" href="#" onclick="JavaScript:newPopup1('../proses/kemaskini_profil.php?uid=<?php echo $uid;?>&typeid=1')">Kemaskini</a></p>-->

							<div style="overflow-x:auto;">
							  <table>
								<tr>
								  <td>Nama Penuh</td>
								  <td><?php echo $row["nama"];?></td>
								</tr>
								<tr>
								  <td>Gred</td>
								  <td>
								  <?php
									$sql2 = "SELECT * FROM db_gred WHERE id = ".$row["gred"];
									$result2 = mysqli_query($conn, $sql2);
										if (mysqli_num_rows($result2) > 0) {
											while($row2 = mysqli_fetch_assoc($result2)) {
												echo $row2["nama"];
											}
										}
								  ?>
								  </td>
								</tr>
								<tr>
								  <td>Jawatan</td>
								  <td>
								  <?php
									$sql3 = "SELECT * FROM db_jawatan WHERE id = ".$row["jawatan"];
									$result3 = mysqli_query($conn, $sql3);
										if (mysqli_num_rows($result3) > 0) {
											while($row3 = mysqli_fetch_assoc($result3)) {
												echo $row3["nama"];
											}
										}
								  ?>								  
								  </td>
								</tr>
								<tr>
								  <td>Pejabat</td>
								  <td>								  
								  <?php
									$sql6 = "SELECT * FROM db_pejabat WHERE id = ".$row["pejabat"];
									$result6 = mysqli_query($conn, $sql6);
										if (mysqli_num_rows($result6) > 0) {
											while($row6 = mysqli_fetch_assoc($result6)) {
												echo $row6["nama"];
											}
										}
								  ?>
								  </td>								  
								</tr>								
								<tr>
								  <td>Bahagian</td>
								  <td>								  
								  <?php
									$sql4 = "SELECT * FROM db_bahagian WHERE id = ".$row["bahagian"];
									$result4 = mysqli_query($conn, $sql4);
										if (mysqli_num_rows($result4) > 0) {
											while($row4 = mysqli_fetch_assoc($result4)) {
												echo $row4["nama"];
											}
										}
								  ?>
								  </td>								  
								</tr>
								<tr>
								  <td>Unit</td>
								  <td>								  
								  <?php
									$sql5 = "SELECT * FROM db_unit WHERE id = ".$row["unit"];
									$result5 = mysqli_query($conn, $sql5);
										if (mysqli_num_rows($result5) > 0) {
											while($row5 = mysqli_fetch_assoc($result5)) {
												echo $row5["nama"];
											}
										}
								  ?>
								  </td>								  
								</tr>								
							  </table>
							</div>
							
							<?php
									}
								}
							?>

						
					<?php }elseif ($typeid == 2){?>
						<h4>Tukar Kata Laluan</h4>
						
						<p><a class="ka_button small_button small_coolblue" href="#" onclick="JavaScript:newPopup1('proses/kemaskini_profil.php?uid=<?php echo $uid;?>&typeid=21')">Kemaskini</a></p>						
						
					<?php }elseif ($typeid == 3){?>
						<h4>Senarai	Pengguna</h4>						
						
						<p><a class="ka_button small_button small_coolblue" href="#" onclick="JavaScript:newPopup1('proses/kemaskini_profil.php?uid=<?php echo $uid;?>&typeid=34')">Tambah Baru</a></p>
						
						<div style="overflow-x:auto;">
						  <table>
							<tr>
							  <th style="text-align:center">#</th>
							  <th style="text-align:center">No. MyKad</th>
							  <th style="text-align:center">Nama Pengguna</th>
							  <th style="text-align:center">Kemaskini</th>
							</tr>

							<?php
							$x = 1;
							
							$sql = "SELECT * FROM tb_member WHERE id <> 1 and flag = 0 ORDER BY nama";
							$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
									while($row = mysqli_fetch_assoc($result)) {
							?>
						
							<tr>
							  <td><?php echo $x;?>.</td>
							  <td><?php echo $row["userid"];?></td>
							  <td><?php echo $row["nama"];?></td>
							  <td style="text-align:center">
								<a href="#" onclick="JavaScript:newPopup1('proses/kemaskini_profil.php?uid=<?php echo $uid;?>&typeid=31&nric=<?php echo $row["id"];?>')">Ubah</a> |
								<a href="proses/kemaskini_profil_db.php?uid=<?php echo $uid;?>&typeid=32&nric=<?php echo $row["id"];?>" onclick="return confirm('Adakah anda pasti hapus rekod?');">Hapus</a> |
								<a href="#" onclick="JavaScript:newPopup1('proses/kemaskini_profil.php?uid=<?php echo $uid;?>&typeid=33&nric=<?php echo $row["id"];?>')">Kata Laluan</a> 
							  </td>
							</tr>

							<?php
								$x = $x + 1;
									}
								}
							?>
							</tbody>							
						  </table>						  

					<?php }elseif ($typeid == 4){?>
						<h4>Senarai	Pemandu</h4>						
						
						<p><a class="ka_button small_button small_coolblue" href="#" onclick="JavaScript:newPopup1('proses/kemaskini_profil.php?uid=<?php echo $uid;?>&typeid=43')">Tambah Baru</a></p>
						
						<div style="overflow-x:auto;">
						  <table>
							<tr>
							  <th style="text-align:center">#</th>
							  <th style="text-align:center">Nama Pemandu</th>
							  <th style="text-align:center">Pejabat</th>
							  <th style="text-align:center">Kemaskini</th>
							</tr>

							<?php
							$x = 1;
							
							$sql = "SELECT * FROM db_pemandu WHERE flag = 0 ORDER BY nama";
							$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
									while($row = mysqli_fetch_assoc($result)) {
							?>
						
							<tr>
							  <td><?php echo $x;?>.</td>
							  <td><?php echo $row["nama"];?></td>
							  <td>								  
							  <?php
								$sql6 = "SELECT * FROM db_pejabat WHERE id = ".$row["pejabat"];
								$result6 = mysqli_query($conn, $sql6);
									if (mysqli_num_rows($result6) > 0) {
										while($row6 = mysqli_fetch_assoc($result6)) {
											echo $row6["nama"];
										}
									}
							  ?>
							  </td>
							  <td style="text-align:center">
								<a href="#" onclick="JavaScript:newPopup1('proses/kemaskini_profil.php?uid=<?php echo $uid;?>&typeid=41&nric=<?php echo $row["id"];?>')">Ubah</a> |
								<a href="proses/kemaskini_profil_db.php?uid=<?php echo $uid;?>&typeid=42&nric=<?php echo $row["id"];?>" onclick="return confirm('Adakah anda pasti hapus rekod?');">Hapus</a>
							  </td>
							</tr>

							<?php
								$x = $x + 1;
									}
								}
							?>
							</tbody>							
						  </table>						  
						  
					<?php }elseif ($typeid == 5){?>
						<h4>Senarai	Kenderaan</h4>						
						
						<p><a class="ka_button small_button small_coolblue" href="#" onclick="JavaScript:newPopup1('proses/kemaskini_profil.php?uid=<?php echo $uid;?>&typeid=53')">Tambah Baru</a></p>
						
						<div style="overflow-x:auto;">
						  <table>
							<tr>
							  <th style="text-align:center">#</th>
							  <th style="text-align:center">No. Kenderaan</th>
							  <th style="text-align:center">Kemaskini</th>
							</tr>

							<?php
							$x = 1;
							
							$sql = "SELECT * FROM db_no_kenderaan WHERE flag = 0 ORDER BY nama";
							$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
									while($row = mysqli_fetch_assoc($result)) {
							?>
						
							<tr>
							  <td><?php echo $x;?>.</td>
							  <td><?php echo $row["nama"];?></td>
							  <td style="text-align:center">
								<a href="#" onclick="JavaScript:newPopup1('proses/kemaskini_profil.php?uid=<?php echo $uid;?>&typeid=51&nric=<?php echo $row["id"];?>')">Ubah</a> |
								<a href="proses/kemaskini_profil_db.php?uid=<?php echo $uid;?>&typeid=52&nric=<?php echo $row["id"];?>" onclick="return confirm('Adakah anda pasti hapus rekod?');">Hapus</a>
							  </td>
							</tr>

							<?php
								$x = $x + 1;
									}
								}
							?>
							</tbody>							
						  </table>						  						  
						  
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