<?php
// Start the session
session_start();

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

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

header("Location: /apps/pkn/", true, 301);
exit();
?>


</body>
</html>