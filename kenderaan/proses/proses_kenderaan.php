<?php
include '../../includes/connection.php';

$uid = $_GET["uid"];
$id = $_GET["id"];

//echo $kategori_sekolah_baru;
//exit;
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
								status_mohon: {
										required: true	
								},								
								waktu_kembali: {
										required: true	
								}
						},
						messages:{
								status_mohon: {
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
        
        	<!--
			<div class="form-header header-green">
            	<h4><i class="fa fa-calendar"></i> Booking </h4>
            </div><!-- end .form-header section -->
		
			<?php
			$sql = "SELECT * FROM db_kenderaan WHERE id = ".$id;
			$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
			?>
					
				<form method="post" action="proses_kenderaan_db.php?uid=<?php echo $uid;?>&id=<?php echo $id;?>" id="smart-form">
					<div class="form-body theme-blue">
					
						<div class="spacer-t10 spacer-b30">
							<div class="tagline"><span><strong> Arahan tugas pemandu</strong></span></div><!-- .tagline -->
						</div>     					

						<div class="frm-row">						
							<div class="section colm colm6">
								<label for="nama_pemandu" class="field-label">Nama Pemandu <em>*</em></label>
								<label class="field select">
									<select id="nama_pemandu" name="nama_pemandu">
										<option value="0">Sila pilih...</option>
										<?php
											$sql21 = "SELECT * FROM db_pemandu WHERE flag = 0 and pejabat = ".$row["pejabat"]." ORDER BY nama";
											$result21 = mysqli_query($conn, $sql21);
												if (mysqli_num_rows($result21) > 0) {
													while($row21 = mysqli_fetch_assoc($result21)) {
														if($row21['id']==$row['nama_pemandu']) { 
															echo "<option value=".$row21['id']." selected>".$row21['nama']."</option>";
														} else { 
															echo "<option value=".$row21['id'].">".$row21['nama']."</option>";
														} 
														
													}
												}
										?>
									</select>
									<i class="arrow double"></i>                    
								</label> 
							</div><!-- end section -->
							
							<div class="section colm colm6">
								<label for="no_kenderaan" class="field-label">No. Kenderaan <em>*</em></label>
								<label class="field select">
									<select id="no_kenderaan" name="no_kenderaan">
										<option value="0">Sila pilih...</option>
										<?php
											$sql22 = "SELECT * FROM db_no_kenderaan WHERE flag = 0 ORDER BY nama";
											$result22 = mysqli_query($conn, $sql22);
												if (mysqli_num_rows($result22) > 0) {
													while($row22 = mysqli_fetch_assoc($result22)) {
														if($row22['id']==$row['no_kenderaan']) { 
															echo "<option value=".$row22['id']." selected>".$row22['nama']."</option>";
														} else { 
															echo "<option value=".$row22['id'].">".$row22['nama']."</option>";
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
						
							<?php
							$yyyy = substr($row["tarikh_dari"],0,4);
							$mm = substr($row["tarikh_dari"],5,2);
							$dd = substr($row["tarikh_dari"],8,2);
							$tarikh_dari = $mm."/".$dd."/".$yyyy;
							?>	
							
							<div class="section colm colm6">
								<label for="tarikh_dari" class="field-label">Tarikh Mulai Dari</label>
								<label for="tarikh_dari" class="field prepend-icon">
									<input type="text" name="tarikh_dari" id="checkin" class="gui-input" value="<?php echo $tarikh_dari;?>">
									<label class="field-icon"><i class="fa fa-calendar"></i></label>  
								</label>
							</div><!-- end section -->
							
							<?php
							$yyyy = substr($row["tarikh_hingga"],0,4);
							$mm = substr($row["tarikh_hingga"],5,2);
							$dd = substr($row["tarikh_hingga"],8,2);
							$tarikh_hingga = $mm."/".$dd."/".$yyyy;
							?>							
							
							<div class="section colm colm6">
								<label for="tarikh_hingga" class="field-label">Tarikh Hingga</label>
								<label for="tarikh_hingga" class="field prepend-icon">
									<input type="text" name="tarikh_hingga" id="checkout" class="gui-input" value="<?php echo $tarikh_hingga;?>">
									<label class="field-icon"><i class="fa fa-calendar"></i></label>  
								</label>
							</div><!-- end section -->
						</div><!-- end .frm-row section --> 

						<div class="frm-row">						
							<div class="section colm colm6">
								<label for="waktu_dari" class="field-label">Waktu Bertugas Mulai Jam </label>
								<label class="field select">
									<select id="waktu_dari" name="waktu_dari">
										<option value="">Sila pilih...</option>
										<?php
											$sql23 = "SELECT * FROM tb_jam";
											$result23 = mysqli_query($conn, $sql23);
												if (mysqli_num_rows($result23) > 0) {
													while($row23 = mysqli_fetch_assoc($result23)) {	
														if($row23['id']==$row['waktu_dari']) { 
															echo "<option value=".$row23['id']." selected>".$row23['masa_12']."</option>";
														} else { 
															echo "<option value=".$row23['id'].">".$row23['masa_12']."</option>";
														} 
													}
												}
										?>
									</select>
									<i class="arrow double"></i>                    
								</label> 
							</div><!-- end section -->
							
							<div class="section colm colm6">
								<label for="waktu_hingga" class="field-label">Waktu Bertugas Hingga </label>
								<label class="field select">
									<select id="waktu_hingga" name="waktu_hingga">
										<option value="">Sila pilih...</option>
										<?php
											$sql24 = "SELECT * FROM tb_jam";
											$result24 = mysqli_query($conn, $sql24);
												if (mysqli_num_rows($result24) > 0) {
													while($row24 = mysqli_fetch_assoc($result24)) {	
														if($row24['id']==$row['waktu_hingga']) { 
															echo "<option value=".$row24['id']." selected>".$row24['masa_12']."</option>";
														} else { 
															echo "<option value=".$row24['id'].">".$row24['masa_12']."</option>";
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
							<div class="section colm colm9">
								<label for="butiran" class="field-label">Butiran Tugas / Catatan</label>
								<label for="butiran" class="field prepend-icon">
									<input type="text" name="butiran" id="butiran" class="gui-input" value="<?php echo $row["butiran"];?>">
									<label class="field-icon"><i class="fa fa-map-marker"></i></label>  
								</label>
							</div><!-- end section -->
							
							<div class="section colm colm3">
								<label for="status_mohon" class="field-label">Status <em>*</em></label>
								<label class="field select">
									<select id="status_mohon" name="status_mohon">
										<option value="">Sila pilih...</option>
										<?php
											$sql25 = "SELECT * FROM tb_status_kenderaan";
											$result25 = mysqli_query($conn, $sql25);
												if (mysqli_num_rows($result25) > 0) {
													while($row25 = mysqli_fetch_assoc($result25)) {
														if($row25['id']==$row['status_mohon']) { 
															echo "<option value=".$row25['id']." selected>".$row25['nama']."</option>";
														} else { 
															echo "<option value=".$row25['id'].">".$row25['nama']."</option>";
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
						<button type="submit" class="button btn-blue"> Hantar &amp; Simpan </button>
						<button type="reset" class="button"> Semula </button>
					</div><!-- end .form-footer section -->
				</form>		
		
			<?php
					}
				}
			?>
			
        </div><!-- end .smart-forms section -->
    </div><!-- end .smart-wrap section -->

</body>
</html>
