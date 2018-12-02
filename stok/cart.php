<?php
session_start();

include '../includes/connection.php';

$uid = $_GET["uid"];
$typeid = $_GET["typeid"];
//$staff_id = $_GET["staff_id"];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic -->
        <meta charset="utf-8">
        <title><?php include '../includes/title.php';?></title>
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Corporate">
        <meta name="author" content="iwthemes.com">  

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Theme CSS -->
        <link href="css/style.css" rel="stylesheet" media="screen">
        <!-- Responsive CSS -->
        <link href="css/theme-responsive.css" rel="stylesheet" media="screen">
        <!-- Skins Theme -->
        <link href="#" rel="stylesheet" media="screen" class="skin">

        <!-- Favicons -->
        <link rel="shortcut icon" href="img/icons/favicon.ico">
        <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">  

		
        <!-- Head Libs -->
        <script src="js/modernizr.js"></script>

        <!--[if IE]>
            <link rel="stylesheet" href="css/ie/ie.css">
        <![endif]-->

        <!--[if lte IE 8]>
            <script src="js/responsive/html5shiv.js"></script>
            <script src="js/responsive/respond.js"></script>
        <![endif]-->

        <!-- Skins Changer-->
        <script type="text/javascript" src="http://www.google.com/jsapi"></script>
	
		<script type="text/javascript" src="../js2/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="../js2/jquery-ui-1.10.4.custom.min.js"></script>
		<script type="text/javascript" src="../js2/jquery.maskedinput.js"></script>
		<script type="text/javascript" src="../js2/jquery.validate.min.js"></script>
	
		<script type="text/javascript">
		
		$(function() {	
					
					/* @ validation and submition
					---------------------------------- */				
					$( "#smart-form" ).validate({
												
							errorClass: "state-error",
							validClass: "state-success",
							errorElement: "em",
							rules: {
									quantity: {
											required: true	
									},
									grade: {
											required: true
									}
							},
							messages:{
									quantity: {
											number: 'Please enter a valid number'
									},
									grade: {
											required: 'This field is required'
									}
							},
							highlight: function(element, errorClass, validClass) {
									$(element).closest('.field').addClass(errorClass).removeClass(validClass);
							},
							unhighlight: function(element, errorClass, validClass) {
									$(element).closest('.field').removeClass(errorClass).addClass(validClass);
							},
							errorPlacement: function(error, element) {
							   if (element.is(":radio") || element.is(":checkbox")) {
										element.closest('.option-group').after(error);
							   } else {
										error.insertAfter(element.parent());
							   }
							}
							
					});		
			
		});				        
		</script>		

		<script type='text/javascript'>
			window.onunload = function(){
			window.opener.location.reload();}
		</script>
		
    </head>

    <body>
       <!-- Theme-options -->
       <!-- End Theme-options -->      

        <!-- layout-->
        <div id="layout">
            <!-- Header-->
            <header>
                <!-- End headerbox-->
                <!-- End headerbox-->   

                <!-- mainmenu-->
                <!-- End mainmenu-->
            </header>
            <!-- End Header-->
            
            <!-- Section Title -->           
            <section class="section-title img-gallery">
                <div class="overlay-bg"></div>
                <div class="container">
                    <h1>Pesanan Stok</h1>
                </div>
            </section>
            <!-- End Section Title --> 

            <!-- Section Area - Content Central -->
            <section class="content-info">
				

                <div class="crumbs">
                    <div class="container">
                        <ul>
                            <li><a href="start.php?uid=<?php echo $uid;?>&typeid=<?php echo $typeid;?>"><i class="fa fa-shopping-cart"></i></label>  Sambung Pesanan</a> </li>
                        </ul>
                    </div>        
                </div>

				
                <div class="semiboxshadow text-center">
                    <img src="img/img-theme/shp.png" class="img-responsive" alt="">
                </div>

                <!-- Content Central -->
                 <div class="container padding-top-mini">
                    <div class="panel-box">
					
                        <div class="row">
                            <div class="col-md-12">
							
								<br />
								<p><strong>Permohonan Stok</strong></p>

								
								<table class="table table-bordered">
									<thead>
										<tr>
											<th style="text-align:center">#</th>
											<th style="text-align:center">Gambar</th>
											<th style="text-align:center">Item</th>
											<th style="text-align:center" colspan="2">Kuantiti</th>
											<th></th>
										</tr>
									</thead>
									
									<tbody>
										<?php
										$x = 1;
										
										$sql = "SELECT * FROM stok_order_detail WHERE userid = '".$uid."' and id_order = 0 ORDER BY id Desc";
										$result = mysqli_query($conn, $sql);
											if (mysqli_num_rows($result) > 0) {
												while($row = mysqli_fetch_assoc($result)) {	
										?>													

											<tr>
												<td style="text-align:center"><?php echo $x;?>.</td>
												<td style="text-align:center">
												<?php
												$sql2 = "SELECT * FROM stok_item WHERE id = ".$row["id_item"];
													$result2 = mysqli_query($conn, $sql2);
														if (mysqli_num_rows($result2) > 0) {
															while($row2 = mysqli_fetch_assoc($result2)) {
												?>
																<img src="img/item/<?php echo $row2["pics"];?>" width="90">
												<?php
															}
														}												
												?>
												</td>
												<td style="text-align:left">
												<?php
												$sql3 = "SELECT * FROM stok_item WHERE id = ".$row["id_item"];
													$result3 = mysqli_query($conn, $sql3);
														if (mysqli_num_rows($result3) > 0) {
															while($row3 = mysqli_fetch_assoc($result3)) {
																echo $row3["name"];
															}
														}
												
												?>
												</td>
												<form method="post" action="proses/start_db.php?uid=<?php echo $uid;?>&typeid=Process_Qty&qtyid=<?php echo $row["id"];?>" id="smart-form">
													<td style="text-align:center">
														<input type="text" required="required" value="<?php echo $row["requested_quantity"];?>" class="form-control" name="requested_quantity" id="requested_quantity" size="2">
													</td>
													<td style="text-align:center"><input type="submit" value="+/-" class="btn btn-lg btn-primary"></td>
												</form>
												<td style="text-align:center"><a href="proses/start_db.php?uid=<?php echo $uid;?>&typeid=Process_Del&delid=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
											</tr>
											
										<?php
											$x = $x + 1;
												}
											}										
										?>	
										
									</tbody>
								</table>					
						
                            </div>
                        </div>
						
						<?php
						$sql4 = "SELECT count(0) as total4 FROM stok_order_detail WHERE userid = '".$uid."' and id_order = 0";
						$result4 = $conn->query($sql4);
						if (mysqli_num_rows($result4) > 0) {
							while($row4 = mysqli_fetch_assoc($result4)) {
								$total4 = $row4["total4"];
							}
						}
						?>
						
						<?php if ($total4 <> 0) {?>
							<!-- Form Contact -->
							<form method="post" action="proses/start_db.php?uid=<?php echo $uid;?>&typeid=Checkout">
								<div class="row">
									<div class="col-md-12">
										<label>Catatan / Cadangan</label>
										<input type="text" maxlength="300" class="form-control" name="purpose" id="purpose">
									</div>
								</div>
								<br />							
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="PROSES PESANAN" class="btn btn-lg btn-blue">
									</div>
								</div>
							</form>
							<br />
							<!-- End Form Contact --> 
						<?php }?>							
                    </div>
                </div>					
                <!-- End Content Central -->

                <!-- Newsletter -->
                <!-- End Newsletter -->  
            </section>
            <!-- End Section Area - Content Central -->
      
            <!-- footer-->
            <footer id="footer">

            </footer>      
            <!-- End footer-->

            <!-- footer Down
            <div class="footer-down">
            </div>
            footer Down-->

        </div>
        <!-- End layout-->

        <!-- ======================= JQuery libs =========================== -->
        <!-- jQuery local--> 
        <script src="js/jquery.js"></script>                
        <!--Nav-->
        <script type="text/javascript" src="js/nav/tinynav.js"></script> 
        <script type="text/javascript" src="js/nav/hoverIntent.js"></script>   
        <script type="text/javascript" src="js/nav/superfish.js"></script> 
        <script src="js/nav/jquery.sticky.js" type="text/javascript"></script>    
        <!--Totop-->
        <script type="text/javascript" src="js/totop/jquery.ui.totop.js" ></script>  
        <!--Accorodion-->
        <script type="text/javascript" src="js/accordion/accordion.js" ></script>  
        <!--Slide-->
        <script type="text/javascript" src="js/slide/camera.js" ></script>      
        <script type='text/javascript' src='js/slide/jquery.easing.1.3.min.js'></script>  
        <!-- Maps -->
        <script src="js/maps/gmap3.js"></script>             
        <!--Ligbox--> 
        <script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script> 
        <!-- carousel.js-->
        <script src="js/carousel/carousel.js"></script>
        <!-- Filter -->
        <script src="js/filters/jquery.isotope.js" type="text/javascript"></script>
        <!-- Twitter Feed-->
        <script src="js/twitter/jquery.tweet.js"></script> 
        <!-- flickr Feed-->
        <script src="js/flickr/jflickrfeed.min.js"></script> 
        <!-- Counter -->
        <script src="js/counter/jquery.countdown.js"></script>      
        <!--Theme Options-->
        <script type="text/javascript" src="js/theme-options/theme-options.js"></script>
        <script type="text/javascript" src="js/theme-options/jquery.cookies.js"></script> 
        <!-- Bootstrap.js-->
        <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script> 
        <!--MAIN FUNCTIONS-->
        <script type="text/javascript" src="js/main.js"></script>
        <!-- ======================= End JQuery libs =========================== -->
 
    </body>
</html>