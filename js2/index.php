<?php
	session_start();
	//include 'includes/connection.php';
	
	if (isset($_GET['err'])) {
		if ($_GET['err'] == 1) {
			$error = "";
		} else {
			$error = "none";
		}
	} else {
		$error = "none";
	}
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
            <div class="header-holder tt-logo-center">
               <div class="header-overlay">
                  <div class="header-area">
                     
					<a href="#" class="logo"><img src="images/kperak/logo-perak1.png" alt="logo" class="tt-retina-logo" width="154" height="57" /></a>
                     
						<?php// include 'includes/menu.php';?>						
						
                  </div>
               </div>
            </div>
         </header>
		 
         
         <!-- ***************** - Main Content Area - ***************** -->
         
                  
         <!-- ***************** - Footer Starts Here - ***************** -->
         <footer role="contentinfo" id="footer">

            
            <div class="footer-overlay">
               <div class="footer-content">
                  
                  <div class="one_half tt-column">
                     <h3>SINGLE SIGN ON (SSO)</h3>
                     <div class="textwidget">
                        <ul class="tt-business-contact">
						   <li>Untuk menggunakan kemudahan SSO, sila gunakan <strong>NO KP</strong> dan <strong>KATA LALUAN</strong> yang telah didaftarkan.</li>
                           <li>Info Pejabat Kewangan Negeri <br /> Aras G, Bangunan Perak Darul Ridzuan, Jalan Panglima Bukit Gantang Wahab, 30000 Ipoh, Perak Darul Ridzuan.</li>						   
						   <li>Dibangunkan oleh KPerak INC versi 1.0. </li>						   
                        </ul>
                     </div>
                  </div>
                  
                  <div class="one_half_last tt-column">
                     <h3>Daftar Masuk</h3>
                     <div id="mc_signup">
                        <form method="post" action="validate.php" id="mc_signup_form">
                           <div class="mc_merge_var">
                              <label for="mc_mv_uid" class="mc_var_label mc_header mc_header_text">ID Pengguna </label>
                              <input type="text" size="18" placeholder="Masukkan NO KP Anda" name="mc_mv_uid" id="mc_mv_uid" class="mc_input"/>
                           </div><!-- /mc_merge_var -->
                           
                           
                           <div class="mc_merge_var">
                              <label for="mc_mv_password" class="mc_var_label mc_header mc_header_email">Kata Laluan </label>
                              <input type="password" size="18" placeholder="Masukkan Katalaluan Anda" name="mc_mv_password" id="mc_mv_password" class="mc_input"/>
                           </div><!-- /mc_merge_var -->	
                           		
							<div class="result" style="display: <?php echo $error;?>; color: red;">
								<div> ID Pengguna atau Kata Laluan tidak tepat. </div>
								<!-- ajax success or error message loads here -->
							</div><!-- end .result  section -->
                           
                           <div class="mc_signup_submit">
                              <input type="submit" name="mc_signup_submit" id="mc_signup_submit" value="LOG MASUK" class="button" />
                           	</div><!-- /mc_signup_submit -->
							
						
						</form><!-- /mc_signup_form -->
					</div><!-- /mc_signup_container -->
                 </div><!-- END mc_signup -->
               
               
				</div><!-- END footer-content -->
		    </div><!-- END footer-overlay -->     
      
      
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