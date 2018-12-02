<?php
// Start the session
session_start();

include 'includes/redirect.php';
include 'includes/connection.php';

$uid = $_GET["uid"];
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
<script type="text/javascript" src="js/jquery.js"></script>
<title><?php include 'includes/title.php';?></title>


<!-- RSS -->
<link rel="alternate" type="application/rss+xml" title="#" href="#" />


<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico"/>


<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans%7CLato' rel='stylesheet' type='text/css'>


<!-- Primary CSS -->
<link rel="stylesheet" href="style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/_mobile.css" type="text/css" media="all" />


<!-- Color Scheme CSS -->
<?php include 'includes/color_scheme.php';?>

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
               <?php include 'includes/top.php';?>
            </div><!-- END top-block -->                       
            
            <div class="header-holder tt-logo-center">
               <div class="header-overlay">
                  <div class="header-area">
				  
                     <?php include 'includes/logo.php';?>
                     
                     
                     
                     <!-- ***************** - Main Menu - ***************** -->
					 <?php include 'includes/menu.php';?>

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
					  <h1>Halaman Utama</h1>
				   </div><!-- END frame -->
				</div><!-- END tools -->
				
				<main role="main" id="content" class="content_left_sidebar content_no_subnav">
				<div class="shadow_img_frame shadow_banner_regular">
				   <div class="img-preload"><img src='images/kperak/703x201_3.png' alt='' class="attachment-fadeIn" /></div>
				</div>
				<h1>Selamat Datang <br /> Sistem Online Pejabat Kewangan Negeri (PKN)</h1>
				<!--
				<strong>Dibangunkan Oleh: Unit Creative Content, Digital &amp; Multimedia Services(CCDMS), KPerak INC. <br /></strong>
				-->

				Tarikh Akhir Kemas Kini : 22 Feb 2018  <br />
				Tarikh Dibangunkan : 22 Nov 2017				
                  
                  <!-- ////////////////////////////////////////////////////////// -->
                  <!-- ***************** - Content Ends Here - ****************** -->
                  <!-- ////////////////////////////////////////////////////////// -->               
               
               
               

               
               </main><!-- END main #content -->
               
               <aside role="complementary" id="sidebar" class="left_sidebar">
				   <div class="sidebar-widget">
					  <h4>Selamat kembali,</h4>
					  <div class="textwidget">
							<?php
							$sql = "SELECT nama,unit FROM tb_member WHERE userid = '".$uid."'";
							$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
									while($row = mysqli_fetch_assoc($result)) {	
										echo strtoupper($row["nama"]);
										echo "<br />";

										$sql2 = "SELECT nama FROM db_unit WHERE id = ".$row["unit"];
										$result2 = mysqli_query($conn, $sql2);
											if (mysqli_num_rows($result2) > 0) {
												while($row2 = mysqli_fetch_assoc($result2)) {
													echo strtoupper($row2["nama"]);
													echo "<br />";
												}
											}
											
										echo date("d-m-Y");
									}
								}
							?>
					  </div>
				   </div>
				</aside><!-- END sidebar -->
            </div><!-- END main-area -->
         
         <div id="footer-top">&nbsp;</div>
      </div><!-- END main -->
         
         
         
         
         <!-- ***************** - Footer Starts Here - ***************** -->
         <footer role="contentinfo" id="footer">

          
      
			<!-- ***************** - Footer Bottom Starts Here - ***************** -->
		
			<?php include 'includes/footer.php';?>

		</footer><!-- END footer -->
      
       
</div><!-- END wrapper -->
</div><!-- END tt-layout -->




<!-- ***************** - JavaScript Starts Here - ***************** -->
<script type="text/javascript" src="js/custom-main.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<script type="text/javascript" src="js/scrollWatch.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jquery.ui.core.min.js"></script>
<script type="text/javascript" src="js/jquery.ui.widget.min.js"></script>
<script type="text/javascript" src="js/jquery.ui.tabs.min.js"></script>
<script type="text/javascript" src="js/jquery.ui.accordion.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
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