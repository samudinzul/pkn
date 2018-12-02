<?php
include '../../includes/connection.php';

$uid = $_GET["uid"];
$typeid = $_GET["typeid"];

if ($typeid <> 11 and $typeid <> 21 and $typeid <> 34 and $typeid <> 43 and $typeid <> 53){

	$nric = $_GET["nric"];	
 }

 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
  	<title><?php include '../../includes/title.php';?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../../css2/smart-forms.css">
    <link rel="stylesheet" type="text/css" href="../../css2/smart-themes/blue.css">
    <link rel="stylesheet" type="text/css" href="../../css2/font-awesome.min.css">
    
	<script type="text/javascript" src="../../js2/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="../../js2/jquery-ui-1.10.4.custom.min.js"></script>
    <script type="text/javascript" src="../../js2/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="../../js2/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../../js2/jquery.chained.js"></script>
    <script type="text/javascript" src="../../js2/additional-methods.min.js"></script>
	
	<script src="../../ckeditor/ckeditor.js"></script>
    
    <!--[if lte IE 9]>   
        <script type="text/javascript" src="../../js2/jquery.placeholder.min.js"></script>
    <![endif]-->    
    
    <!--[if lte IE 8]>
        <link type="text/css" rel="stylesheet" href="../../css2/smart-forms-ie8.css">
    <![endif]-->
    
    <script type="text/javascript">
	
	$(function() {
				/* @ date range datepicker 
				---------------------------------- */
				$( "#checkin" ).datepicker({
					defaultDate: "+1w",
					changeMonth: false,
					numberOfMonths: 1,
					prevText: '<i class="fa fa-chevron-left"></i>',
					nextText: '<i class="fa fa-chevron-right"></i>',
					onClose: function( selectedDate ) {
						$( "#checkout" ).datepicker( "option", "minDate", selectedDate );
					}
				});
				
				$( "#checkout" ).datepicker({
					defaultDate: "+1w",
					changeMonth: false,
					numberOfMonths: 1,
					prevText: '<i class="fa fa-chevron-left"></i>',
					nextText: '<i class="fa fa-chevron-right"></i>',			
					onClose: function( selectedDate ) {
						$( "#checkin" ).datepicker( "option", "maxDate", selectedDate );
					}
				});
				
				/* @ validation and submition
				---------------------------------- */				
				$( "#smart-form" ).validate({
											
						errorClass: "state-error",
						validClass: "state-success",
						errorElement: "em",
						rules: {
								password: {
										required: true	
								},
								nama: {
										required: true
								},
								userid: {
										required: true,
										number: true										
								},
								pejabat: {
										required: true	
								},
								bahagian: {
										required: true	
								},
								unit: {
										required: true	
								},								
								gred: {
										required: true	
								},								
								jawatan: {
										required: true	
								},								
								waktu_kembali: {
										required: true	
								}
						},
						messages:{
								password: {
										required: 'Wajib isi'
								},
								nama: {
										required: 'Wajib isi'
								},
								userid: {
										required: 'Wajib isi',
										number: 'Nombor sahaja'										
								},
								pejabat: {
										required: 'Wajib isi'
								},
								bahagian: {
										required: 'Wajib isi'
								},
								unit: {
										required: 'Wajib isi'
								},								
								gred: {
										required: 'Wajib isi'
								},								
								jawatan: {
										required: 'Wajib isi'
								},								
								waktu_kembali: {
										required: 'Wajib isi'
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

<body class="woodbg">

	<div class="smart-wrap">
    	<div class="smart-forms smart-container wrap-1">
        
			<?php if ($typeid == 11){?>
			
				<?php
				$sql = "SELECT * FROM tb_member WHERE userid = ".$uid;
				$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
				?>
			
					<form method="post" action="kemaskini_profil_db.php?uid=<?php echo $uid;?>&typeid=<?php echo $typeid;?>" id="smart-form">
						<div class="form-body theme-blue">
						
							<div class="spacer-t10 spacer-b30">
								<div class="tagline"><span><strong> Kemaskini Maklumat Peribadi </strong></span></div><!-- .tagline -->
							</div>     

							<div class="frm-row">
								<div class="section colm colm6">
									<label for="nama" class="field-label">Nama Penuh <em>*</em></label>
									<label for="nama" class="field prepend-icon">
										<input type="text" name="nama" id="nama" class="gui-input" value="<?php echo $row["nama"]?>">
										<label class="field-icon"><i class="fa fa-user"></i></label>  
									</label>
								</div><!-- end section -->
								<div class="section colm colm6">
									<label for="userid" class="field-label">No. Kad Pengenalan <em>*</em></label>
									<label for="userid" class="field prepend-icon">
										<input type="text" name="" id="userid" class="gui-input" value="<?php echo $row["userid"]?>" readonly>
										<label class="field-icon"><i class="fa fa-user"></i></label>  
									</label>
								</div><!-- end section -->																								
							</div><!-- end .frm-row section -->

							<div class="frm-row">
								<div class="section colm colm6">
									<label for="gred" class="field-label">Gred <em>*</em></label>
									<label class="field select">
										<select id="gred" name="gred">
											<option value="">Sila pilih...</option>
											<?php
												$sql23 = "SELECT * FROM db_gred ORDER BY susunan,nama";
												$result23 = mysqli_query($conn, $sql23);
													if (mysqli_num_rows($result23) > 0) {
														while($row23 = mysqli_fetch_assoc($result23)) {
															if($row23['id']==$row['gred']) { 
																echo "<option value=".$row23['id']." selected>".$row23['nama']."</option>";
															} else { 
																echo "<option value=".$row23['id'].">".$row23['nama']."</option>";
															} 														
														}
													}
											?>
										</select>
										<i class="arrow double"></i>                    
									</label> 
								</div><!-- end section -->
								
								<div class="section colm colm6">
									<label for="jawatan" class="field-label">Jawatan <em>*</em></label>
									<label class="field select">
										<select id="jawatan" name="jawatan">
											<option value="">Sila pilih...</option>
											<?php
												$sql24 = "SELECT * FROM db_jawatan ORDER BY nama";
												$result24 = mysqli_query($conn, $sql24);
													if (mysqli_num_rows($result24) > 0) {
														while($row24 = mysqli_fetch_assoc($result24)) {
															if($row24['id']==$row['jawatan']) { 
																echo "<option value=".$row24['id']." selected>".$row24['nama']."</option>";
															} else { 
																echo "<option value=".$row24['id'].">".$row24['nama']."</option>";
															} 														
														}
													}
											?>									
											</select>
										<i class="arrow double"></i>                    
									</label> 
								</div><!-- end section -->						
							</div><!-- end .frm-row section --> 
						
							<div class="frm-row">
								<div class="section colm colm4">
									<label for="mark" class="field-label">Pejabat <em>*</em></label>
									<label class="field select">
										<select id="mark" name="pejabat">
											<?php
												$sql31 = "SELECT * FROM db_pejabat";
												$result31 = mysqli_query($conn, $sql31);
													if (mysqli_num_rows($result31) > 0) {
														while($row31 = mysqli_fetch_assoc($result31)) {
															if($row31['id']==$row['pejabat']) { 
																echo "<option value=".$row31['id']." selected>".$row31['nama']."</option>";
															} else { 
																echo "<option value=".$row31['id'].">".$row31['nama']."</option>";
															} 														
														}
													}
											?>									
											</select>
										<i class="arrow double"></i>                    
									</label> 
								</div><!-- end section -->							
								<div class="section colm colm4">
									<label for="series" class="field-label">Bahagian <em>*</em></label>
									<label class="field select">
										<select id="series" name="bahagian">
											<?php
												$sql32 = "SELECT * FROM db_bahagian";
												$result32 = mysqli_query($conn, $sql32);
													if (mysqli_num_rows($result32) > 0) {
														while($row32 = mysqli_fetch_assoc($result32)) {
															if($row32['id']==$row['bahagian']) { 
																echo "<option value=".$row32['id']." class=".$row32['id_pejabat']." selected>".$row32['nama']."</option>";
															} else { 
																echo "<option value=".$row32['id']." class=".$row32['id_pejabat'].">".$row32['nama']."</option>";
															} 														
														}
													}
											?>									
											</select>
										<i class="arrow double"></i>                    
									</label> 
								</div><!-- end section -->								
								<div class="section colm colm4">
									<label for="model" class="field-label">Unit <em>*</em></label>
									<label class="field select">
										<select id="model" name="unit">
											<?php
												$sql33 = "SELECT * FROM db_unit";
												$result33 = mysqli_query($conn, $sql33);
													if (mysqli_num_rows($result33) > 0) {
														while($row33 = mysqli_fetch_assoc($result33)) {
															if($row33['id']==$row['unit']) { 
																echo "<option value=".$row33['id']." class=".$row33['id_bahagian']." selected>".$row33['nama']."</option>";
															} else { 
																echo "<option value=".$row33['id']." class=".$row33['id_bahagian'].">".$row33['nama']."</option>";
															} 														
														}
													}
											?>									
											</select>
										<script language="JavaScript" type="text/javascript">
											$("#series").chained("#mark");
											$("#model").chained("#series");
										</script>
										<i class="arrow double"></i>
									</label> 
								</div><!-- end section -->						
							</div><!-- end .frm-row section --> 						
						
						</div><!-- end .form-body section -->
						
						<div class="form-footer">
							<!--<button type="submit" class="button btn-green"> Hantar &amp; Simpan </button>-->
							<button type="submit" class="button btn-blue"> Simpan </button>
						</div><!-- end .form-footer section -->
					</form>	
				<?php
						}
					}
				?>
				
			<?php }elseif ($typeid == 21){?>
			
					<form method="post" action="kemaskini_profil_db.php?uid=<?php echo $uid;?>&typeid=<?php echo $typeid;?>" id="smart-form">
						<div class="form-body theme-blue">
						
							<div class="spacer-t10 spacer-b30">
								<div class="tagline"><span><strong> Tukar Kata Laluan </strong></span></div><!-- .tagline -->
							</div>     

							<div class="frm-row">
								<div class="section colm colm12">
									<label for="password" class="field-label">Kata Laluan Baru <em>*</em></label>
									<label for="password" class="field prepend-icon">
										<input type="text" name="password" id="password" class="gui-input">
										<label class="field-icon"><i class="fa fa-lock"></i></label>  
									</label>
								</div><!-- end section -->								
							</div><!-- end .frm-row section -->
							
							
						</div><!-- end .form-body section -->
						
						<div class="form-footer">
							<!--<button type="submit" class="button btn-green"> Hantar &amp; Simpan </button>-->
							<button type="submit" class="button btn-blue"> Simpan </button>
						</div><!-- end .form-footer section -->
					</form>		

			<?php }elseif ($typeid == 31){?>

				<?php
				$sql = "SELECT * FROM tb_member WHERE id = ".$nric;
				$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
				?>
			
					<form method="post" action="kemaskini_profil_db.php?uid=<?php echo $uid;?>&typeid=<?php echo $typeid;?>&nric=<?php echo $nric;?>" id="smart-form">
						<div class="form-body theme-blue">
						
							<div class="spacer-t10 spacer-b30">
								<div class="tagline"><span><strong> Kemaskini Pengguna </strong></span></div><!-- .tagline -->
							</div>     

							<div class="frm-row">
								<div class="section colm colm6">
									<label for="nama" class="field-label">Nama Penuh <em>*</em></label>
									<label for="nama" class="field prepend-icon">
										<input type="text" name="nama" id="nama" class="gui-input" value="<?php echo $row["nama"]?>">
										<label class="field-icon"><i class="fa fa-user"></i></label>  
									</label>
								</div><!-- end section -->
								<div class="section colm colm6">
									<label for="userid" class="field-label">No. Kad Pengenalan <em>*</em></label>
									<label for="userid" class="field prepend-icon">
										<input type="text" name="userid" id="userid" class="gui-input" value="<?php echo $row["userid"]?>">
										<label class="field-icon"><i class="fa fa-user"></i></label>  
									</label>
								</div><!-- end section -->																								
							</div><!-- end .frm-row section -->
							 

							<div class="frm-row">						
								<div class="section colm colm6">
									<label for="gred" class="field-label">Gred <em>*</em></label>
									<label class="field select">
										<select id="gred" name="gred">
											<option value="">Sila pilih...</option>
											<?php
												$sql23 = "SELECT * FROM db_gred ORDER BY susunan,nama";
												$result23 = mysqli_query($conn, $sql23);
													if (mysqli_num_rows($result23) > 0) {
														while($row23 = mysqli_fetch_assoc($result23)) {
															if($row23['id']==$row['gred']) { 
																echo "<option value=".$row23['id']." selected>".$row23['nama']."</option>";
															} else { 
																echo "<option value=".$row23['id'].">".$row23['nama']."</option>";
															} 														
														}
													}
											?>
										</select>
										<i class="arrow double"></i>                    
									</label> 
								</div><!-- end section -->
								
								<div class="section colm colm6">
									<label for="jawatan" class="field-label">Jawatan <em>*</em></label>
									<label class="field select">
										<select id="jawatan" name="jawatan">
											<option value="">Sila pilih...</option>
											<?php
												$sql24 = "SELECT * FROM db_jawatan ORDER BY nama";
												$result24 = mysqli_query($conn, $sql24);
													if (mysqli_num_rows($result24) > 0) {
														while($row24 = mysqli_fetch_assoc($result24)) {
															if($row24['id']==$row['jawatan']) { 
																echo "<option value=".$row24['id']." selected>".$row24['nama']."</option>";
															} else { 
																echo "<option value=".$row24['id'].">".$row24['nama']."</option>";
															} 														
														}
													}
											?>									
											</select>
										<i class="arrow double"></i>                    
									</label> 
								</div><!-- end section -->						
							</div><!-- end .frm-row section --> 						

							<div class="frm-row">
								<div class="section colm colm4">
									<label for="mark" class="field-label">Pejabat <em>*</em></label>
									<label class="field select">
										<select id="mark" name="pejabat">
											<?php
												$sql31 = "SELECT * FROM db_pejabat";
												$result31 = mysqli_query($conn, $sql31);
													if (mysqli_num_rows($result31) > 0) {
														while($row31 = mysqli_fetch_assoc($result31)) {
															if($row31['id']==$row['pejabat']) { 
																echo "<option value=".$row31['id']." selected>".$row31['nama']."</option>";
															} else { 
																echo "<option value=".$row31['id'].">".$row31['nama']."</option>";
															} 														
														}
													}
											?>									
											</select>
										<i class="arrow double"></i>                    
									</label> 
								</div><!-- end section -->							
								<div class="section colm colm4">
									<label for="series" class="field-label">Bahagian <em>*</em></label>
									<label class="field select">
										<select id="series" name="bahagian">
											<?php
												$sql32 = "SELECT * FROM db_bahagian";
												$result32 = mysqli_query($conn, $sql32);
													if (mysqli_num_rows($result32) > 0) {
														while($row32 = mysqli_fetch_assoc($result32)) {
															if($row32['id']==$row['bahagian']) { 
																echo "<option value=".$row32['id']." class=".$row32['id_pejabat']." selected>".$row32['nama']."</option>";
															} else { 
																echo "<option value=".$row32['id']." class=".$row32['id_pejabat'].">".$row32['nama']."</option>";
															} 														
														}
													}
											?>									
											</select>
										<i class="arrow double"></i>                    
									</label> 
								</div><!-- end section -->								
								<div class="section colm colm4">
									<label for="model" class="field-label">Unit <em>*</em></label>
									<label class="field select">
										<select id="model" name="unit">
											<?php
												$sql33 = "SELECT * FROM db_unit";
												$result33 = mysqli_query($conn, $sql33);
													if (mysqli_num_rows($result33) > 0) {
														while($row33 = mysqli_fetch_assoc($result33)) {
															if($row33['id']==$row['unit']) { 
																echo "<option value=".$row33['id']." class=".$row33['id_bahagian']." selected>".$row33['nama']."</option>";
															} else { 
																echo "<option value=".$row33['id']." class=".$row33['id_bahagian'].">".$row33['nama']."</option>";
															} 														
														}
													}
											?>									
											</select>
										<script language="JavaScript" type="text/javascript">
											$("#series").chained("#mark");
											$("#model").chained("#series");
										</script>
										<i class="arrow double"></i>
									</label> 
								</div><!-- end section -->						
							</div><!-- end .frm-row section -->
						
						</div><!-- end .form-body section -->
						
						<div class="form-footer">
							<!--<button type="submit" class="button btn-green"> Hantar &amp; Simpan </button>-->
							<button type="submit" class="button btn-blue"> Simpan </button>
						</div><!-- end .form-footer section -->
					</form>	
				<?php
						}
					}
				?>
				
			<?php }elseif ($typeid == 33){?>
			
					<form method="post" action="kemaskini_profil_db.php?uid=<?php echo $uid;?>&typeid=<?php echo $typeid;?>&nric=<?php echo $nric;?>" id="smart-form">
						<div class="form-body theme-blue">
						
							<div class="spacer-t10 spacer-b30">
								<div class="tagline"><span><strong> Tukar Kata Laluan </strong></span></div><!-- .tagline -->
							</div>     

							<div class="frm-row">
								<div class="section colm colm12">
									<label for="password" class="field-label">Kata Laluan Baru <em>*</em></label>
									<label for="password" class="field prepend-icon">
										<input type="text" name="password" id="password" class="gui-input">
										<label class="field-icon"><i class="fa fa-lock"></i></label>  
									</label>
								</div><!-- end section -->								
							</div><!-- end .frm-row section -->
							
							
						</div><!-- end .form-body section -->
						
						<div class="form-footer">
							<!--<button type="submit" class="button btn-green"> Hantar &amp; Simpan </button>-->
							<button type="submit" class="button btn-blue"> Simpan </button>
						</div><!-- end .form-footer section -->
					</form>		

			<?php }elseif ($typeid == 34){?>
			
					<form method="post" action="kemaskini_profil_db.php?uid=<?php echo $uid;?>&typeid=<?php echo $typeid;?>" id="smart-form">
						<div class="form-body theme-blue">
						
							<div class="spacer-t10 spacer-b30">
								<div class="tagline"><span><strong> Tambah Pengguna </strong></span></div><!-- .tagline -->
							</div>     

							<div class="frm-row">
								<div class="section colm colm6">
									<label for="nama" class="field-label">Nama Penuh <em>*</em></label>
									<label for="nama" class="field prepend-icon">
										<input type="text" name="nama" id="nama" class="gui-input">
										<label class="field-icon"><i class="fa fa-user"></i></label>  
									</label>
								</div><!-- end section -->
								<div class="section colm colm6">
									<label for="userid" class="field-label">No. Kad Pengenalan <em>*</em></label>
									<label for="userid" class="field prepend-icon">
										<input type="text" name="userid" id="userid" class="gui-input">
										<label class="field-icon"><i class="fa fa-user"></i></label>  
									</label>
								</div><!-- end section -->
							</div><!-- end .frm-row section -->

							<div class="frm-row">						
								<div class="section colm colm6">
									<label for="gred" class="field-label">Gred <em>*</em></label>
									<label class="field select">
										<select id="gred" name="gred">
											<option value="">Sila pilih...</option>
											<?php
												$sql21 = "SELECT * FROM db_gred ORDER BY susunan,nama";
												$result21 = mysqli_query($conn, $sql21);
													if (mysqli_num_rows($result21) > 0) {
														while($row21 = mysqli_fetch_assoc($result21)) {
															echo "<option value=".$row21['id'].">".$row21['nama']."</option>";
														}
													}
											?>
										</select>
										<i class="arrow double"></i>                    
									</label> 
								</div><!-- end section -->
								
								<div class="section colm colm6">
									<label for="jawatan" class="field-label">Jawatan <em>*</em></label>
									<label class="field select">
										<select id="jawatan" name="jawatan">
											<option value="">Sila pilih...</option>
											<?php
												$sql22 = "SELECT * FROM db_jawatan ORDER BY nama";
												$result22 = mysqli_query($conn, $sql22);
													if (mysqli_num_rows($result22) > 0) {
														while($row22 = mysqli_fetch_assoc($result22)) {
															echo "<option value=".$row22['id'].">".$row22['nama']."</option>";
														}
													}
											?>									
											</select>
										<i class="arrow double"></i>                    
									</label> 
								</div><!-- end section -->						
							</div><!-- end .frm-row section --> 
						
							<div class="frm-row">						
								<div class="section colm colm4">
									<label for="mark" class="field-label">Pejabat <em>*</em></label>
									<label class="field select">
										<select id="mark" name="pejabat">
											<option value="">Sila pilih...</option>
											<?php
												$sql31 = "SELECT * FROM db_pejabat";
												$result31 = mysqli_query($conn, $sql31);
													if (mysqli_num_rows($result31) > 0) {
														while($row31 = mysqli_fetch_assoc($result31)) {
															echo "<option value=".$row31['id'].">".$row31['nama']."</option>";
														}
													}
											?>									
											</select>
										<i class="arrow double"></i>                    
									</label> 
								</div><!-- end section -->
								<div class="section colm colm4">
									<label for="series" class="field-label">Bahagian <em>*</em></label>
									<label class="field select">
										<select id="series" name="bahagian">
											<option value="">Sila pilih...</option>
											<?php
												$sql32 = "SELECT * FROM db_bahagian ORDER BY nama";
												$result32 = mysqli_query($conn, $sql32);
													if (mysqli_num_rows($result32) > 0) {
														while($row32 = mysqli_fetch_assoc($result32)) {
															echo "<option value=".$row32['id']." class=".$row32['id_pejabat'].">".$row32['nama']."</option>";
														}
													}
											?>									
											</select>
										<i class="arrow double"></i>                    
									</label> 
								</div><!-- end section -->								
								<div class="section colm colm4">
									<label for="model" class="field-label">Unit <em>*</em></label>
									<label class="field select">
										<select id="model" name="unit">
											<option value="">Sila pilih...</option>
											<?php
												$sql33 = "SELECT * FROM db_unit ORDER BY nama";
												$result33 = mysqli_query($conn, $sql33);
													if (mysqli_num_rows($result33) > 0) {
														while($row33 = mysqli_fetch_assoc($result33)) {
															echo "<option value=".$row33['id']." class=".$row33['id_bahagian'].">".$row33['nama']."</option>";
														}
													}
											?>									
											</select>
											
										<script language="JavaScript" type="text/javascript">
											$("#series").chained("#mark");
											$("#model").chained("#series");
										</script>											
										<i class="arrow double"></i>                    
									</label> 
								</div><!-- end section -->						
							</div><!-- end .frm-row section --> 						
						
						</div><!-- end .form-body section -->
						
						<div class="form-footer">
							<!--<button type="submit" class="button btn-green"> Hantar &amp; Simpan </button>-->
							<button type="submit" class="button btn-blue" name="simpan"> Simpan </button>
						</div><!-- end .form-footer section -->
					</form>					

			<?php }elseif ($typeid == 41){?>

				<?php
				$sql = "SELECT * FROM db_pemandu WHERE id = ".$nric;
				$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
				?>
				
					<form method="post" action="kemaskini_profil_db.php?uid=<?php echo $uid;?>&typeid=<?php echo $typeid;?>&nric=<?php echo $nric;?>" id="smart-form">
						<div class="form-body theme-blue">
						
							<div class="spacer-t10 spacer-b30">
								<div class="tagline"><span><strong> Kemaskini Pemandu </strong></span></div><!-- .tagline -->
							</div>     

							<div class="frm-row">
								<div class="section colm colm4">
									<label for="nama" class="field-label">Nama Pemandu <em>*</em></label>
									<label for="nama" class="field prepend-icon">
										<input type="text" name="nama" id="nama" class="gui-input" value="<?php echo $row["nama"]?>">
										<label class="field-icon"><i class="fa fa-user"></i></label>  
									</label>
								</div><!-- end section -->										
								<div class="section colm colm4">
									<label for="userid" class="field-label">No. Kad Pengenalan <em>*</em></label>
									<label for="userid" class="field prepend-icon">
										<input type="text" name="userid" id="userid" class="gui-input" value="<?php echo $row["no_kp"]?>">
										<label class="field-icon"><i class="fa fa-user"></i></label>  
									</label>
								</div><!-- end section -->		
								<div class="section colm colm4">
									<label for="pejabat" class="field-label">Pejabat <em>*</em></label>
									<label class="field select">
										<select id="pejabat" name="pejabat">
											<option value="">Sila pilih...</option>										
											<?php
												$sql31 = "SELECT * FROM db_pejabat";
												$result31 = mysqli_query($conn, $sql31);
													if (mysqli_num_rows($result31) > 0) {
														while($row31 = mysqli_fetch_assoc($result31)) {
															if($row31['id']==$row['pejabat']) { 
																echo "<option value=".$row31['id']." selected>".$row31['nama']."</option>";
															} else { 
																echo "<option value=".$row31['id'].">".$row31['nama']."</option>";
															} 														
														}
													}
											?>									
											</select>
										<i class="arrow double"></i>                    
									</label> 
								</div><!-- end section -->															
							</div><!-- end .frm-row section -->								
						
						</div><!-- end .form-body section -->
						
						<div class="form-footer">
							<!--<button type="submit" class="button btn-green"> Hantar &amp; Simpan </button>-->
							<button type="submit" class="button btn-blue"> Simpan </button>
						</div><!-- end .form-footer section -->
					</form>					
				<?php
						}
					}
				?>
				
			<?php }elseif ($typeid == 43){?>			
				
					<form method="post" action="kemaskini_profil_db.php?uid=<?php echo $uid;?>&typeid=<?php echo $typeid;?>" id="smart-form">
						<div class="form-body theme-blue">
						
							<div class="spacer-t10 spacer-b30">
								<div class="tagline"><span><strong> Tambah Pemandu </strong></span></div><!-- .tagline -->
							</div>     

							<div class="frm-row">
								<div class="section colm colm4">
									<label for="nama" class="field-label">Nama Pemandu <em>*</em></label>
									<label for="nama" class="field prepend-icon">
										<input type="text" name="nama" id="nama" class="gui-input">
										<label class="field-icon"><i class="fa fa-user"></i></label>  
									</label>
								</div><!-- end section -->										
								<div class="section colm colm4">
									<label for="userid" class="field-label">No. Kad Pengenalan <em>*</em></label>
									<label for="userid" class="field prepend-icon">
										<input type="text" name="userid" id="userid" class="gui-input">
										<label class="field-icon"><i class="fa fa-user"></i></label>  
									</label>
								</div><!-- end section -->
								<div class="section colm colm4">
									<label for="pejabat" class="field-label">Pejabat <em>*</em></label>
									<label class="field select">
										<select id="pejabat" name="pejabat">
											<option value="">Sila pilih...</option>
											<?php
												$sql31 = "SELECT * FROM db_pejabat";
												$result31 = mysqli_query($conn, $sql31);
													if (mysqli_num_rows($result31) > 0) {
														while($row31 = mysqli_fetch_assoc($result31)) {
															echo "<option value=".$row31['id'].">".$row31['nama']."</option>";
														}
													}
											?>									
											</select>
										<i class="arrow double"></i>                    
									</label> 
								</div><!-- end section -->								
							</div><!-- end .frm-row section -->								
						
						</div><!-- end .form-body section -->
						
						<div class="form-footer">
							<!--<button type="submit" class="button btn-green"> Hantar &amp; Simpan </button>-->
							<button type="submit" class="button btn-blue"> Simpan </button>
						</div><!-- end .form-footer section -->
					</form>

			<?php }elseif ($typeid == 51){?>

				<?php
				$sql = "SELECT * FROM db_no_kenderaan WHERE id = ".$nric;
				$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
				?>
				
					<form method="post" action="kemaskini_profil_db.php?uid=<?php echo $uid;?>&typeid=<?php echo $typeid;?>&nric=<?php echo $nric;?>" id="smart-form">
						<div class="form-body theme-blue">
						
							<div class="spacer-t10 spacer-b30">
								<div class="tagline"><span><strong> Kemaskini Kenderaan </strong></span></div><!-- .tagline -->
							</div>     

							<div class="frm-row">
								<div class="section colm colm12">
									<label for="nama" class="field-label">No. Kenderaan <em>*</em></label>
									<label for="nama" class="field prepend-icon">
										<input type="text" name="nama" id="nama" class="gui-input" value="<?php echo $row["nama"]?>">
										<label class="field-icon"><i class="fa fa-user"></i></label>  
									</label>
								</div><!-- end section -->		
							</div><!-- end .frm-row section -->								
						
						</div><!-- end .form-body section -->
						
						<div class="form-footer">
							<!--<button type="submit" class="button btn-green"> Hantar &amp; Simpan </button>-->
							<button type="submit" class="button btn-blue"> Simpan </button>
						</div><!-- end .form-footer section -->
					</form>					
				<?php
						}
					}
				?>
				
			<?php }elseif ($typeid == 53){?>			
				
					<form method="post" action="kemaskini_profil_db.php?uid=<?php echo $uid;?>&typeid=<?php echo $typeid;?>" id="smart-form">
						<div class="form-body theme-blue">
						
							<div class="spacer-t10 spacer-b30">
								<div class="tagline"><span><strong> Tambah Kenderaan </strong></span></div><!-- .tagline -->
							</div>     

							<div class="frm-row">
								<div class="section colm colm12">
									<label for="nama" class="field-label">No. Kenderaan <em>*</em></label>
									<label for="nama" class="field prepend-icon">
										<input type="text" name="nama" id="nama" class="gui-input">
										<label class="field-icon"><i class="fa fa-user"></i></label>  
									</label>
								</div><!-- end section -->			
							</div><!-- end .frm-row section -->								
						
						</div><!-- end .form-body section -->
						
						<div class="form-footer">
							<!--<button type="submit" class="button btn-green"> Hantar &amp; Simpan </button>-->
							<button type="submit" class="button btn-blue"> Simpan </button>
						</div><!-- end .form-footer section -->
					</form>
					
			<?php }else{?>
				error				
			<?php }?>		
			
			
			
				
		
        </div><!-- end .smart-forms section -->
    </div><!-- end .smart-wrap section -->

</body>
</html>
