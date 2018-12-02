<?php
session_start();

include '../../includes/connection.php';

$id = $_GET["id"];
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
	<script type="text/javascript" src="../../js2/bootstrap.min.js"></script> 
	<script type="text/javascript" src="../../js2/jquery.chained.js"></script>	
    
	
    <!--[if lte IE 9]>   
        <script type="text/javascript" src="../../js2/jquery.placeholder.min.js"></script>
    <![endif]-->    
    
    <!--[if lte IE 8]>
        <link type="text/css" rel="stylesheet" href="../../css2/smart-forms-ie8.css">
    <![endif]-->
    
    <script type="text/javascript">
	
	$(function() {	
				
				/* @ validation and submition
				---------------------------------- */				
				$( "#smart-form" ).validate({
											
						errorClass: "state-error",
						validClass: "state-success",
						errorElement: "em",
						rules: {
								status: {
										required: true	
								},
								approved_quantity: {
										number: true	
								},
								grade: {
										required: true
								}
						},
						messages:{
								status: {
										required: 'This field is required'
								},
								approved_quantity: {
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


<body class="woodbg">

	<div class="smart-wrap">
    	<div class="smart-forms smart-container wrap-1">
        
        	<div class="form-header header-blue">
					<h4><i class="fa fa-shopping-cart"></i> My Pesanan </h4>				
			</div><!-- end .form-header section -->
			
			<?php if ($typeid == "Process") {?>
			
				<?php
				$sql = "SELECT * FROM stok_order WHERE id = ".$id;
				$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
				?>

						<div class="form-body theme-blue">
							<div class="frm-row">  
								<div class="section colm colm1">
									<label for="factors" class="field-label"><strong>Bil.</strong></label>
								</div><!-- end section -->
								<div class="section colm colm4">
									<label for="factors" class="field-label"><strong>Item</strong></label>
								</div><!-- end section -->
								<div class="section colm colm3">
									<label for="factors" class="field-label"><strong>Kuantiti Dipesan</strong></label>
								</div><!-- end section -->								
								<div class="section colm colm3">
									<label for="factors" class="field-label"><strong>Kuantiti Diluluskan</strong></label>
								</div><!-- end section -->																
								<div class="section colm colm1">
								</div><!-- end section -->																								
							</div><!-- end frm-row section -->		


							<?php
							$x = 1;
							
							$sql2 = "SELECT * FROM stok_order_detail WHERE id_order = ".$id;
							$result2 = mysqli_query($conn, $sql2);
								if (mysqli_num_rows($result2) > 0) {
									while($row2 = mysqli_fetch_assoc($result2)) {
							?>
							

								<div class="frm-row">    								
									<div class="section colm colm1">
										<label for="factors" class="field-label">
										<?php echo $x;?>.
										</label>
									</div><!-- end section -->
									
									<div class="section colm colm4">
										<label for="factors" class="field-label">
										<?php
											$sql3 = "SELECT name FROM stok_item WHERE id = ".$row2["id_item"];
											$result3 = mysqli_query($conn, $sql3);
												if (mysqli_num_rows($result3) > 0) {
													while($row3 = mysqli_fetch_assoc($result3)) {	
														echo $row3["name"];
													}
												}							
										?>									
										</label>
									</div><!-- end section -->
									
									<div class="section colm colm3">
										<label for="factors" class="field-label">
										<?php echo $row2["requested_quantity"];?>
										</label>
									</div><!-- end section -->
									
								<form method="post" action="process_order_db.php?id=<?php echo $id;?>&typeid=Process_Qty&qtyid=<?php echo $row2["id"];?>" id="smart-form">															
									<div class="section colm colm3">
										<label for="approved_quantity" class="field prepend-icon">
											<input type="text" id="approved_quantity" name="approved_quantity" class="gui-input" placeholder="Quantity" value="<?php echo $row2["approved_quantity"];?>">
											<label class="field-icon"><i class="fa fa-check"></i></label>  
										</label>
									</div><!-- end section -->

									<div class="section colm colm1">
										<button type="submit" class="button btn-blue">Add</button>
									</div><!-- end section -->
								</form>									
								
								</div><!-- end frm-row section -->								
								
								
							<?php
								$x = $x + 1;
									}
								}
							?>	

						
						<form method="post" action="process_order_db.php?id=<?php echo $id;?>&typeid=<?php echo $typeid;?>" id="smart-form">
						
							<div class="frm-row"> 							
								<div class="section colm colm8">
									<label for="status" class="field-label">Catatan / Cadangan</label>
									<label for="purpose" class="field prepend-icon">
										<input type="text" id="purpose" name="purpose" class="gui-input" placeholder="Catatan / Cadangan" value="<?php echo $row["purpose"];?>">
										<label class="field-icon"><i class="fa fa-comments"></i></label>  
									</label>								
								</div><!-- end section -->							
							
								<div class="section colm colm4">
									<label for="status" class="field-label">Status <em>*</em></label>
									<label class="field select">
										<select id="status" name="status">
										<option value="">choose...</option>
										<?php
											$sql4 = "SELECT code,name FROM tb_order";
											$result4 = mysqli_query($conn, $sql4);
												if (mysqli_num_rows($result4) > 0) {
													while($row4 = mysqli_fetch_assoc($result4)) {
														if($row4["code"]==$row["status"]) { 
															echo "<option value=".$row4["code"]." selected>".$row4["name"]."</option>";
														} else { 
															echo "<option value=".$row4["code"].">".$row4["name"]."</option>";
														}
													}
												}
										?>
										</select>
										<i class="arrow double"></i>                    
									</label>
								</div><!-- end section -->
							</div><!-- end frm-row section -->
							
						</div><!-- end .form-body section -->													
					
							<div class="form-footer">
								<button type="submit" class="button btn-blue">Simpan</button>
							</div><!-- end .form-footer section -->
						</form>

				<?php
						}
					}
				?>									
			
			<?php }else{?>


			
			<?php }?>
	
            
        </div><!-- end .smart-forms section -->
    </div><!-- end .smart-wrap section -->
    
    <div></div><!-- end section -->

</body>
</html>
