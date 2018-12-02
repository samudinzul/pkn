<?php
session_start();

include '../includes/connection.php';

$uid = $_GET["uid"];
$typeid = $_GET["typeid"];

/*
$sql1 = "SELECT uid FROM tb_users WHERE sqno = ".$sqno;
$result1 = mysqli_query($conn, $sql1);
	if (mysqli_num_rows($result1) > 0) {
		while($row1 = mysqli_fetch_assoc($result1)) {
			$uid = $row1["uid"];	
		}
	}
*/

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
								<li><a href="cart.php?uid=<?php echo $uid;?>&typeid=<?php echo $typeid;?>&staff_id=<?php echo $uid;?>"><i class="fa fa-shopping-cart"></i></label> My Cart</a> </li> 
								<li>
								<?php
								echo "(";
								echo number_format($total4,0);
								echo ") items.";
								?>
								</li>
							<?php }?>

                        </ul>
                    </div>        
                </div>

				
                <div class="semiboxshadow text-center">
                    <img src="img/img-theme/shp.png" class="img-responsive" alt="">
                </div>

                <!-- Content Central -->
                <div class="container">
                    <!-- Nav Filters -->
                    <div class="portfolioFilter">
                        <a href="#" data-filter="*" class="current">SEMUA</a>
						<a href="#alattulis" data-filter=".alattulis">ALAT TULIS</a>
						<a href="#bekalanpejabat" data-filter=".bekalanpejabat">BEKALAN PEJABAT</a>
						<a href="#bahanpercetakan" data-filter=".bahanpercetakan">BAHAN PERCETAKAN</a>
						<a href="#doccetakanterkawal" data-filter=".doccetakanterkawal">DOKUMEN CETAKAN TERKAWAL</a>
						<a href="#alattuliskom" data-filter=".alattuliskom">ALAT TULIS KOMPUTER</a>
						<a href="#alatpencucian" data-filter=".alatpencucian">BAHAN &amp; ALAT PENCUCIAN</a>
						<a href="#bekalanmakanan" data-filter=".bekalanmakanan">BEKALAN MAKANAN</a>
                    </div>
                    <!-- End Nav Filters -->

                    <!-- Items Gallery filters-->

					
						<div class="portfolioContainer">

							<!-- Item Gallery ALAT TULIS Gift-->
							<?php
							$sql11 = "SELECT * FROM stok_item WHERE id_category = 1 and publish = 'Y' ORDER BY name";
							$result11 = mysqli_query($conn, $sql11);
								if (mysqli_num_rows($result11) > 0) {
									while($row11 = mysqli_fetch_assoc($result11)) {	
									
										$sql12 = "SELECT SUM(quantity) as total12 FROM stok_item_detail WHERE id_item = ".$row11["id"]."";
										$result12 = $conn->query($sql12);
										if (mysqli_num_rows($result12) > 0) {
											while($row12 = mysqli_fetch_assoc($result12)) {
												$total12 = $row12["total12"];
											}
										}
										
										$sql13 = "SELECT SUM(approved_quantity) as total13 FROM stok_order_detail WHERE id_item = ".$row11["id"]."";
										$result13 = $conn->query($sql13);
										if (mysqli_num_rows($result13) > 0) {
											while($row13 = mysqli_fetch_assoc($result13)) {
												$total13 = $row13["total13"];
											}
										}

										$total14 = 0;
										$total14 = $total12 - $total13;
							?>							
								
								<?php if ($total14 > 0 ){?>

									<div class="col-xs-6 col-sm-6 col-md-4 alattulis">
										<div class="img-hover">
											<img src="img/item/<?php echo $row11["pics"];?>" alt="" class="img-responsive">
											<div class="overlay"><a href="img/item/<?php echo $row11["pics"];?>" class="fancybox">+</a></div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<strong><?php echo $row11["name"];?></strong>
											</div>
										</div>

										<form method="post" action="proses/start_db.php?uid=<?php echo $uid;?>&typeid=<?php echo $typeid;?>" id="smart-form">
											<div class="row">
												<div class="col-md-6">
													<input type="text" required="required" name="quantity" id="quantity" class="form-control" placeholder="Quantity">
												</div>
												<div class="col-md-6">
													<input type="hidden" name="id_item" value="<?php echo $row11["id"];?>">
													<input type="submit" value="Add to cart" class="btn btn-primary">
												</div>								
											</div>
										</form>			
										
										</p>&nbsp;</p>
									</div>
								
								<?php }else{?>
									
								<div class="col-xs-6 col-sm-6 col-md-4 alattulis">
									<div class="img-hover">
										<img src="img/item/<?php echo $row11["pics"];?>" alt="" class="img-responsive">
										<div class="overlay"><a href="img/item/<?php echo $row11["pics"];?>" class="fancybox">Out of stock</a></div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<strong><?php echo $row11["name"];?></strong>
										</div>
									</div>									

									<div class="row">
										<div class="col-md-6">
											<input type="text" required="required" name="quantity" id="quantity" class="form-control" placeholder="Quantity">
										</div>
										<div class="col-md-6">
											<input type="submit" value="Add to cart" class="btn btn-primary">
										</div>								
									</div>
									
									</p>&nbsp;</p>
								</div>									
									
								<?php }?>


							<?php
									}
								}
							?>
							<!-- End Item Gallery ALAT TULIS Gift -->

							
							<!-- Item Gallery BEKALAN PEJABAT Gift-->
							<?php
							$sql21 = "SELECT * FROM stok_item WHERE id_category = 2 and publish = 'Y' ORDER BY name";
							$result21 = mysqli_query($conn, $sql21);
								if (mysqli_num_rows($result21) > 0) {
									while($row21 = mysqli_fetch_assoc($result21)) {	
									
										$sql22 = "SELECT SUM(quantity) as total22 FROM stok_item_detail WHERE id_item = ".$row21["id"]."";
										$result22 = $conn->query($sql22);
										if (mysqli_num_rows($result22) > 0) {
											while($row22 = mysqli_fetch_assoc($result22)) {
												$total22 = $row22["total22"];
											}
										}
										
										$sql23 = "SELECT SUM(approved_quantity) as total23 FROM stok_order_detail WHERE id_item = ".$row21["id"]."";
										$result23 = $conn->query($sql23);
										if (mysqli_num_rows($result23) > 0) {
											while($row23 = mysqli_fetch_assoc($result23)) {
												$total23 = $row23["total23"];
											}
										}

										$total24 = 0;
										$total24 = $total22 - $total23;
							?>							
								
								<?php if ($total24 > 0 ){?>

									<div class="col-xs-6 col-sm-6 col-md-4 bekalanpejabat">
										<div class="img-hover">
											<img src="img/item/<?php echo $row21["pics"];?>" alt="" class="img-responsive">
											<div class="overlay"><a href="img/item/<?php echo $row21["pics"];?>" class="fancybox">+</a></div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<strong><?php echo $row21["name"];?></strong>
											</div>
										</div>

										<form method="post" action="proses/start_db.php?uid=<?php echo $uid;?>&typeid=<?php echo $typeid;?>" id="smart-form">
											<div class="row">
												<div class="col-md-6">
													<input type="text" required="required" name="quantity" id="quantity" class="form-control" placeholder="Quantity">
												</div>
												<div class="col-md-6">
													<input type="hidden" name="id_item" value="<?php echo $row21["id"];?>">
													<input type="submit" value="Add to cart" class="btn btn-primary">
												</div>								
											</div>
										</form>			
										
										</p>&nbsp;</p>
									</div>
								
								<?php }else{?>
									
								<div class="col-xs-6 col-sm-6 col-md-4 bekalanpejabat">
									<div class="img-hover">
										<img src="img/item/<?php echo $row21["pics"];?>" alt="" class="img-responsive">
										<div class="overlay"><a href="img/item/<?php echo $row21["pics"];?>" class="fancybox">Out of stock</a></div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<strong><?php echo $row21["name"];?></strong>
										</div>
									</div>									

									<div class="row">
										<div class="col-md-6">
											<input type="text" required="required" name="quantity" id="quantity" class="form-control" placeholder="Quantity">
										</div>
										<div class="col-md-6">
											<input type="submit" value="Add to cart" class="btn btn-primary">
										</div>								
									</div>
									
									</p>&nbsp;</p>
								</div>									
									
								<?php }?>


							<?php
									}
								}
							?>
							<!-- End Item Gallery BEKALAN PEJABAT Gift -->	

							
							<!-- Item Gallery BAHAN PERCETAKAN Gift-->
							<?php
							$sql31 = "SELECT * FROM stok_item WHERE id_category = 3 and publish = 'Y' ORDER BY name";
							$result31 = mysqli_query($conn, $sql31);
								if (mysqli_num_rows($result31) > 0) {
									while($row31 = mysqli_fetch_assoc($result31)) {	
									
										$sql32 = "SELECT SUM(quantity) as total32 FROM stok_item_detail WHERE id_item = ".$row31["id"]."";
										$result32 = $conn->query($sql32);
										if (mysqli_num_rows($result32) > 0) {
											while($row32 = mysqli_fetch_assoc($result32)) {
												$total32 = $row32["total32"];
											}
										}
										
										$sql33 = "SELECT SUM(approved_quantity) as total33 FROM stok_order_detail WHERE id_item = ".$row31["id"]."";
										$result33 = $conn->query($sql33);
										if (mysqli_num_rows($result33) > 0) {
											while($row33 = mysqli_fetch_assoc($result33)) {
												$total33 = $row33["total33"];
											}
										}

										$total34 = 0;
										$total34 = $total32 - $total33;
							?>							
								
								<?php if ($total34 > 0 ){?>

									<div class="col-xs-6 col-sm-6 col-md-4 bahanpercetakan">
										<div class="img-hover">
											<img src="img/item/<?php echo $row31["pics"];?>" alt="" class="img-responsive">
											<div class="overlay"><a href="img/item/<?php echo $row31["pics"];?>" class="fancybox">+</a></div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<strong><?php echo $row31["name"];?></strong>
											</div>
										</div>

										<form method="post" action="proses/start_db.php?uid=<?php echo $uid;?>&typeid=<?php echo $typeid;?>" id="smart-form">
											<div class="row">
												<div class="col-md-6">
													<input type="text" required="required" name="quantity" id="quantity" class="form-control" placeholder="Quantity">
												</div>
												<div class="col-md-6">
													<input type="hidden" name="id_item" value="<?php echo $row31["id"];?>">
													<input type="submit" value="Add to cart" class="btn btn-primary">
												</div>								
											</div>
										</form>			
										
										</p>&nbsp;</p>
									</div>
								
								<?php }else{?>
									
								<div class="col-xs-6 col-sm-6 col-md-4 bahanpercetakan">
									<div class="img-hover">
										<img src="img/item/<?php echo $row31["pics"];?>" alt="" class="img-responsive">
										<div class="overlay"><a href="img/item/<?php echo $row31["pics"];?>" class="fancybox">Out of stock</a></div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<strong><?php echo $row31["name"];?></strong>
										</div>
									</div>									

									<div class="row">
										<div class="col-md-6">
											<input type="text" required="required" name="quantity" id="quantity" class="form-control" placeholder="Quantity">
										</div>
										<div class="col-md-6">
											<input type="submit" value="Add to cart" class="btn btn-primary">
										</div>								
									</div>
									
									</p>&nbsp;</p>
								</div>									
									
								<?php }?>


							<?php
									}
								}
							?>
							<!-- End Item Gallery BAHAN PERCETAKAN Gift -->	
							

							<!-- Item Gallery DOKUMEN CETAKAN TERKAWAL Gift-->
							<?php
							$sql41 = "SELECT * FROM stok_item WHERE id_category = 4 and publish = 'Y' ORDER BY name";
							$result41 = mysqli_query($conn, $sql41);
								if (mysqli_num_rows($result41) > 0) {
									while($row41 = mysqli_fetch_assoc($result41)) {	
									
										$sql42 = "SELECT SUM(quantity) as total42 FROM stok_item_detail WHERE id_item = ".$row41["id"]."";
										$result42 = $conn->query($sql42);
										if (mysqli_num_rows($result42) > 0) {
											while($row42 = mysqli_fetch_assoc($result42)) {
												$total42 = $row42["total42"];
											}
										}
										
										$sql43 = "SELECT SUM(approved_quantity) as total43 FROM stok_order_detail WHERE id_item = ".$row41["id"]."";
										$result43 = $conn->query($sql43);
										if (mysqli_num_rows($result43) > 0) {
											while($row43 = mysqli_fetch_assoc($result43)) {
												$total43 = $row43["total43"];
											}
										}

										$total44 = 0;
										$total44 = $total42 - $total43;
							?>							
								
								<?php if ($total44 > 0 ){?>

									<div class="col-xs-6 col-sm-6 col-md-4 doccetakanterkawal">
										<div class="img-hover">
											<img src="img/item/<?php echo $row41["pics"];?>" alt="" class="img-responsive">
											<div class="overlay"><a href="img/item/<?php echo $row41["pics"];?>" class="fancybox">+</a></div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<strong><?php echo $row41["name"];?></strong>
											</div>
										</div>

										<form method="post" action="proses/start_db.php?uid=<?php echo $uid;?>&typeid=<?php echo $typeid;?>" id="smart-form">
											<div class="row">
												<div class="col-md-6">
													<input type="text" required="required" name="quantity" id="quantity" class="form-control" placeholder="Quantity">
												</div>
												<div class="col-md-6">
													<input type="hidden" name="id_item" value="<?php echo $row41["id"];?>">
													<input type="submit" value="Add to cart" class="btn btn-primary">
												</div>								
											</div>
										</form>			
										
										</p>&nbsp;</p>
									</div>
								
								<?php }else{?>
									
								<div class="col-xs-6 col-sm-6 col-md-4 doccetakanterkawal">
									<div class="img-hover">
										<img src="img/item/<?php echo $row41["pics"];?>" alt="" class="img-responsive">
										<div class="overlay"><a href="img/item/<?php echo $row41["pics"];?>" class="fancybox">Out of stock</a></div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<strong><?php echo $row41["name"];?></strong>
										</div>
									</div>									

									<div class="row">
										<div class="col-md-6">
											<input type="text" required="required" name="quantity" id="quantity" class="form-control" placeholder="Quantity">
										</div>
										<div class="col-md-6">
											<input type="submit" value="Add to cart" class="btn btn-primary">
										</div>								
									</div>
									
									</p>&nbsp;</p>
								</div>									
									
								<?php }?>


							<?php
									}
								}
							?>
							<!-- End Item Gallery DOKUMEN CETAKAN TERKAWAL Gift -->	
							
							
							<!-- Item Gallery ALAT TULIS KOMPUTER Gift-->
							<?php
							$sql51 = "SELECT * FROM stok_item WHERE id_category = 5 and publish = 'Y' ORDER BY name";
							$result51 = mysqli_query($conn, $sql51);
								if (mysqli_num_rows($result51) > 0) {
									while($row51 = mysqli_fetch_assoc($result51)) {	
									
										$sql52 = "SELECT SUM(quantity) as total52 FROM stok_item_detail WHERE id_item = ".$row51["id"]."";
										$result52 = $conn->query($sql52);
										if (mysqli_num_rows($result52) > 0) {
											while($row52 = mysqli_fetch_assoc($result52)) {
												$total52 = $row52["total52"];
											}
										}
										
										$sql53 = "SELECT SUM(approved_quantity) as total53 FROM stok_order_detail WHERE id_item = ".$row51["id"]."";
										$result53 = $conn->query($sql53);
										if (mysqli_num_rows($result53) > 0) {
											while($row53 = mysqli_fetch_assoc($result53)) {
												$total53 = $row53["total53"];
											}
										}

										$total54 = 0;
										$total54 = $total52 - $total53;
							?>							
								
								<?php if ($total54 > 0 ){?>

									<div class="col-xs-6 col-sm-6 col-md-4 alattuliskom">
										<div class="img-hover">
											<img src="img/item/<?php echo $row51["pics"];?>" alt="" class="img-responsive">
											<div class="overlay"><a href="img/item/<?php echo $row51["pics"];?>" class="fancybox">+</a></div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<strong><?php echo $row51["name"];?></strong>
											</div>
										</div>

										<form method="post" action="proses/start_db.php?uid=<?php echo $uid;?>&typeid=<?php echo $typeid;?>" id="smart-form">
											<div class="row">
												<div class="col-md-6">
													<input type="text" required="required" name="quantity" id="quantity" class="form-control" placeholder="Quantity">
												</div>
												<div class="col-md-6">
													<input type="hidden" name="id_item" value="<?php echo $row51["id"];?>">
													<input type="submit" value="Add to cart" class="btn btn-primary">
												</div>								
											</div>
										</form>			
										
										</p>&nbsp;</p>
									</div>
								
								<?php }else{?>
									
								<div class="col-xs-6 col-sm-6 col-md-4 alattuliskom">
									<div class="img-hover">
										<img src="img/item/<?php echo $row51["pics"];?>" alt="" class="img-responsive">
										<div class="overlay"><a href="img/item/<?php echo $row51["pics"];?>" class="fancybox">Out of stock</a></div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<strong><?php echo $row51["name"];?></strong>
										</div>
									</div>									

									<div class="row">
										<div class="col-md-6">
											<input type="text" required="required" name="quantity" id="quantity" class="form-control" placeholder="Quantity">
										</div>
										<div class="col-md-6">
											<input type="submit" value="Add to cart" class="btn btn-primary">
										</div>								
									</div>
									
									</p>&nbsp;</p>
								</div>									
									
								<?php }?>


							<?php
									}
								}
							?>
							<!-- End Item Gallery ALAT TULIS KOMPUTER -->								
							
							<!-- Item Gallery BAHAN &amp; ALAT PENCUCIAN Gift-->
							<?php
							$sql61 = "SELECT * FROM stok_item WHERE id_category = 6 and publish = 'Y' ORDER BY name";
							$result61 = mysqli_query($conn, $sql61);
								if (mysqli_num_rows($result61) > 0) {
									while($row61 = mysqli_fetch_assoc($result61)) {	
									
										$sql62 = "SELECT SUM(quantity) as total62 FROM stok_item_detail WHERE id_item = ".$row61["id"]."";
										$result62 = $conn->query($sql62);
										if (mysqli_num_rows($result62) > 0) {
											while($row62 = mysqli_fetch_assoc($result62)) {
												$total62 = $row62["total62"];
											}
										}
										
										$sql63 = "SELECT SUM(approved_quantity) as total63 FROM stok_order_detail WHERE id_item = ".$row61["id"]."";
										$result63 = $conn->query($sql63);
										if (mysqli_num_rows($result63) > 0) {
											while($row63 = mysqli_fetch_assoc($result63)) {
												$total63 = $row63["total63"];
											}
										}

										$total64 = 0;
										$total64 = $total62 - $total63;
							?>							
								
								<?php if ($total64 > 0 ){?>

									<div class="col-xs-6 col-sm-6 col-md-4 alatpencucian">
										<div class="img-hover">
											<img src="img/item/<?php echo $row61["pics"];?>" alt="" class="img-responsive">
											<div class="overlay"><a href="img/item/<?php echo $row61["pics"];?>" class="fancybox">+</a></div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<strong><?php echo $row61["name"];?></strong>
											</div>
										</div>

										<form method="post" action="proses/start_db.php?uid=<?php echo $uid;?>&typeid=<?php echo $typeid;?>" id="smart-form">
											<div class="row">
												<div class="col-md-6">
													<input type="text" required="required" name="quantity" id="quantity" class="form-control" placeholder="Quantity">
												</div>
												<div class="col-md-6">
													<input type="hidden" name="id_item" value="<?php echo $row61["id"];?>">
													<input type="submit" value="Add to cart" class="btn btn-primary">
												</div>								
											</div>
										</form>			
										
										</p>&nbsp;</p>
									</div>
								
								<?php }else{?>
									
								<div class="col-xs-6 col-sm-6 col-md-4 alatpencucian">
									<div class="img-hover">
										<img src="img/item/<?php echo $row61["pics"];?>" alt="" class="img-responsive">
										<div class="overlay"><a href="img/item/<?php echo $row61["pics"];?>" class="fancybox">Out of stock</a></div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<strong><?php echo $row61["name"];?></strong>
										</div>
									</div>									

									<div class="row">
										<div class="col-md-6">
											<input type="text" required="required" name="quantity" id="quantity" class="form-control" placeholder="Quantity">
										</div>
										<div class="col-md-6">
											<input type="submit" value="Add to cart" class="btn btn-primary">
										</div>								
									</div>
									
									</p>&nbsp;</p>
								</div>									
									
								<?php }?>


							<?php
									}
								}
							?>
							<!-- End Item Gallery BAHAN &amp; ALAT PENCUCIAN -->															
							
							
							<!-- Item Gallery BAHAN &amp; ALAT PENCUCIAN Gift-->
							<?php
							$sql61 = "SELECT * FROM stok_item WHERE id_category = 6 and publish = 'Y' ORDER BY name";
							$result61 = mysqli_query($conn, $sql61);
								if (mysqli_num_rows($result61) > 0) {
									while($row61 = mysqli_fetch_assoc($result61)) {	
									
										$sql62 = "SELECT SUM(quantity) as total62 FROM stok_item_detail WHERE id_item = ".$row61["id"]."";
										$result62 = $conn->query($sql62);
										if (mysqli_num_rows($result62) > 0) {
											while($row62 = mysqli_fetch_assoc($result62)) {
												$total62 = $row62["total62"];
											}
										}
										
										$sql63 = "SELECT SUM(approved_quantity) as total63 FROM stok_order_detail WHERE id_item = ".$row61["id"]."";
										$result63 = $conn->query($sql63);
										if (mysqli_num_rows($result63) > 0) {
											while($row63 = mysqli_fetch_assoc($result63)) {
												$total63 = $row63["total63"];
											}
										}

										$total64 = 0;
										$total64 = $total62 - $total63;
							?>							
								
								<?php if ($total64 > 0 ){?>

									<div class="col-xs-6 col-sm-6 col-md-4 alatpencucian">
										<div class="img-hover">
											<img src="img/item/<?php echo $row61["pics"];?>" alt="" class="img-responsive">
											<div class="overlay"><a href="img/item/<?php echo $row61["pics"];?>" class="fancybox">+</a></div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<strong><?php echo $row61["name"];?></strong>
											</div>
										</div>

										<form method="post" action="proses/start_db.php?uid=<?php echo $uid;?>&typeid=<?php echo $typeid;?>" id="smart-form">
											<div class="row">
												<div class="col-md-6">
													<input type="text" required="required" name="quantity" id="quantity" class="form-control" placeholder="Quantity">
												</div>
												<div class="col-md-6">
													<input type="hidden" name="id_item" value="<?php echo $row61["id"];?>">
													<input type="submit" value="Add to cart" class="btn btn-primary">
												</div>								
											</div>
										</form>			
										
										</p>&nbsp;</p>
									</div>
								
								<?php }else{?>
									
								<div class="col-xs-6 col-sm-6 col-md-4 alatpencucian">
									<div class="img-hover">
										<img src="img/item/<?php echo $row61["pics"];?>" alt="" class="img-responsive">
										<div class="overlay"><a href="img/item/<?php echo $row61["pics"];?>" class="fancybox">Out of stock</a></div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<strong><?php echo $row61["name"];?></strong>
										</div>
									</div>									

									<div class="row">
										<div class="col-md-6">
											<input type="text" required="required" name="quantity" id="quantity" class="form-control" placeholder="Quantity">
										</div>
										<div class="col-md-6">
											<input type="submit" value="Add to cart" class="btn btn-primary">
										</div>								
									</div>
									
									</p>&nbsp;</p>
								</div>									
									
								<?php }?>


							<?php
									}
								}
							?>
							<!-- End Item Gallery BAHAN &amp; ALAT PENCUCIAN -->
							
							<!-- Item Gallery BEKALAN MAKANAN Gift-->
							<?php
							$sql71 = "SELECT * FROM stok_item WHERE id_category = 7 and publish = 'Y' ORDER BY name";
							$result71 = mysqli_query($conn, $sql71);
								if (mysqli_num_rows($result71) > 0) {
									while($row71 = mysqli_fetch_assoc($result71)) {	
									
										$sql72 = "SELECT SUM(quantity) as total72 FROM stok_item_detail WHERE id_item = ".$row71["id"]."";
										$result72 = $conn->query($sql72);
										if (mysqli_num_rows($result72) > 0) {
											while($row72 = mysqli_fetch_assoc($result72)) {
												$total72 = $row72["total72"];
											}
										}
										
										$sql73 = "SELECT SUM(approved_quantity) as total73 FROM stok_order_detail WHERE id_item = ".$row71["id"]."";
										$result73 = $conn->query($sql73);
										if (mysqli_num_rows($result73) > 0) {
											while($row73 = mysqli_fetch_assoc($result73)) {
												$total73 = $row73["total73"];
											}
										}

										$total74 = 0;
										$total74 = $total72 - $total73;
							?>							
								
								<?php if ($total74 > 0 ){?>

									<div class="col-xs-6 col-sm-6 col-md-4 bekalanmakanan">
										<div class="img-hover">
											<img src="img/item/<?php echo $row71["pics"];?>" alt="" class="img-responsive">
											<div class="overlay"><a href="img/item/<?php echo $row71["pics"];?>" class="fancybox">+</a></div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<strong><?php echo $row71["name"];?></strong>
											</div>
										</div>

										<form method="post" action="proses/start_db.php?uid=<?php echo $uid;?>&typeid=<?php echo $typeid;?>" id="smart-form">
											<div class="row">
												<div class="col-md-6">
													<input type="text" required="required" name="quantity" id="quantity" class="form-control" placeholder="Quantity">
												</div>
												<div class="col-md-6">
													<input type="hidden" name="id_item" value="<?php echo $row71["id"];?>">
													<input type="submit" value="Add to cart" class="btn btn-primary">
												</div>								
											</div>
										</form>			
										
										</p>&nbsp;</p>
									</div>
								
								<?php }else{?>
									
								<div class="col-xs-6 col-sm-6 col-md-4 bekalanmakanan">
									<div class="img-hover">
										<img src="img/item/<?php echo $row71["pics"];?>" alt="" class="img-responsive">
										<div class="overlay"><a href="img/item/<?php echo $row71["pics"];?>" class="fancybox">Out of stock</a></div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<strong><?php echo $row71["name"];?></strong>
										</div>
									</div>									

									<div class="row">
										<div class="col-md-6">
											<input type="text" required="required" name="quantity" id="quantity" class="form-control" placeholder="Quantity">
										</div>
										<div class="col-md-6">
											<input type="submit" value="Add to cart" class="btn btn-primary">
										</div>								
									</div>
									
									</p>&nbsp;</p>
								</div>									
									
								<?php }?>


							<?php
									}
								}
							?>
							<!-- End Item Gallery BEKALAN MAKANAN -->								
							
							
						</div>   						


							
                    <!-- End Items Gallery filters-->       
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
