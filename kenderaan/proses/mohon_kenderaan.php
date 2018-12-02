<?php
include '../../includes/connection.php';

$uid = $_GET["uid"];
$pejabat = $_GET["pejabat"];
$typeid = $_GET["typeid"];
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
								tujuan: {
										required: true	
								},
								bil_penumpang: {
										required: true,
										number: true
								},
								tarikh_bertolak: {
										required: true	
								},
								tarikh_kembali: {
										required: true	
								},
								waktu_bertolak: {
										required: true	
								},								
								waktu_kembali: {
										required: true	
								}
						},
						messages:{
								tujuan: {
										required: 'Wajib isi'
								},
								bil_penumpang: {
										required: 'Wajib isi',
										number: 'Nombor sahaja'
								},
								tarikh_bertolak: {
										required: 'Wajib isi'
								},
								tarikh_kembali: {
										required: 'Wajib isi'
								},
								waktu_bertolak: {
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
			
					<form method="post" action="mohon_kenderaan_db.php?uid=<?php echo $uid;?>&pejabat=<?php echo $pejabat;?>&typeid=<?php echo $typeid;?>" id="smart-form">
						<div class="form-body theme-blue">
						
							<div class="spacer-t10 spacer-b30">
								<div class="tagline"><span><strong> Borang Penggunaan Kenderaan </strong></span></div><!-- .tagline -->
							</div>     

							<div class="frm-row">
								<div class="section colm colm9">
									<label for="tujuan" class="field-label">Tujuan Kegunaan <em>*</em></label>
									<label for="tujuan" class="field prepend-icon">
										<input type="text" name="tujuan" id="tujuan" class="gui-input">
										<label class="field-icon"><i class="fa fa-map-marker"></i></label>  
									</label>
								</div><!-- end section -->
								
								<div class="section colm colm3">
									<label for="bil_penumpang" class="field-label">Bil. Penumpang <em>*</em></label>
									<label for="bil_penumpang" class="field prepend-icon">
										<input type="text" name="bil_penumpang" id="bil_penumpang" class="gui-input">
										<label class="field-icon"><i class="fa fa-users"></i></label>  
									</label>
								</div><!-- end section -->
							</div><!-- end .frm-row section -->
							
							<div class="frm-row">
								<div class="section colm colm6">
									<label for="tarikh_bertolak" class="field-label">Tarikh Bertolak<em>*</em></label>
									<label for="tarikh_bertolak" class="field prepend-icon">
										<input type="text" name="tarikh_bertolak" id="checkin" class="gui-input">
										<label class="field-icon"><i class="fa fa-calendar"></i></label>  
									</label>
								</div><!-- end section -->
								
								<div class="section colm colm6">
									<label for="tarikh_kembali" class="field-label">Tarikh Kembali<em>*</em></label>
									<label for="tarikh_kembali" class="field prepend-icon">
										<input type="text" name="tarikh_kembali" id="checkout" class="gui-input">
										<label class="field-icon"><i class="fa fa-calendar"></i></label>  
									</label>
								</div><!-- end section -->
							</div><!-- end .frm-row section --> 
							
							<div class="frm-row">						
								<div class="section colm colm6">
									<label for="waktu_bertolak" class="field-label">Waktu Bertolak <em>*</em></label>
									<label class="field select">
										<select id="waktu_bertolak" name="waktu_bertolak">
											<option value="">Sila pilih...</option>
											<?php
												$sql21 = "SELECT * FROM tb_jam";
												$result21 = mysqli_query($conn, $sql21);
													if (mysqli_num_rows($result21) > 0) {
														while($row21 = mysqli_fetch_assoc($result21)) {										
															echo "<option value=".$row21['id'].">".$row21['masa_12']."</option>";
														}
													}
											?>
										</select>
										<i class="arrow double"></i>                    
									</label> 
								</div><!-- end section -->
								
								<div class="section colm colm6">
									<label for="waktu_kembali" class="field-label">Waktu Kembali <em>*</em></label>
									<label class="field select">
										<select id="waktu_kembali" name="waktu_kembali">
											<option value="">Sila pilih...</option>
											<?php
												$sql22 = "SELECT * FROM tb_jam";
												$result22 = mysqli_query($conn, $sql22);
													if (mysqli_num_rows($result22) > 0) {
														while($row22 = mysqli_fetch_assoc($result22)) {										
															echo "<option value=".$row22['id'].">".$row22['masa_12']."</option>";
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
		

        </div><!-- end .smart-forms section -->
    </div><!-- end .smart-wrap section -->

</body>
</html>
