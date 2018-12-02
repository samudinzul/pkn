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
	var input;input = document.getElementById('order_file_1');
	$(function() {	
				
				/* @ validation and submition
				---------------------------------- */				
				$( "#smart-form" ).validate({
											
						errorClass: "state-error",
						validClass: "state-success",
						errorElement: "em",
						rules: {
								item: {
										required: true	
								},
								publish: {
										required: true	
								},
								description: {
										maxlength: 300
								},
								quantity: {
										required: true,
										number: true
								},
								grade: {
										required: true										
								}
								order_file_1: {
										required: true										
								}
						},
						messages:{
								item: {
										required: 'Wajib isi.'
								},
								publish: {
										required: 'Wajib isi.'
								},
								quantity: {
										required: 'Wajib isi.',
										number: 'Nombor sahaja.'										
								},
								grade: {
										required: 'This field is required'

								}
								order_file_1: {
										if(input>1048576)
										required: 'File bigger than 1MB'										
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
					<h4><i class="fa fa-user"></i> Stok Item </h4>				
			</div><!-- end .form-header section -->
			
			<?php if ($typeid == "Update"){?>

					<?php
					$sql = "SELECT * FROM stok_item WHERE id = ".$id;
					$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
					?>
						
						<form method="post" action="update_item_db.php?id=<?php echo $id;?>&typeid=<?php echo $typeid;?>" id="smart-form" enctype="multipart/form-data">
							<div class="form-body theme-blue">
												
								<div class="section">
									<label for="item" class="field-label"> Item <em>*</em></label>
									<label for="item" class="field prepend-icon">
										<input type="text" id="item" name="item" placeholder="Item name..." class="gui-input" value="<?php echo $row["name"];?>">
										<label class="field-icon"><i class="fa fa-folder"></i></label>  
									</label>
								</div><!-- end section -->

								<div class="frm-row">							
									<div class="section colm colm6">
										<label for="kod_kawalan" class="field-label"> Kod Kawalan <em>*</em></label>
										<label for="kod_kawalan" class="field prepend-icon">
											<input type="text" id="kod_kawalan" name="kod_kawalan" placeholder="kod kawalan name..." class="gui-input" value="<?php echo $row["kod_kawalan"];?>">
											<label class="field-icon"><i class="fa fa-folder"></i></label>  
										</label>
									</div><!-- end section -->
										
									<div class="section colm colm6">
										<label for="kod_barang" class="field-label"> Kod Barang <em>*</em></label>
										<label for="kod_barang" class="field prepend-icon">
											<input type="text" id="kod_barang" name="kod_barang" placeholder="kod barang name..." class="gui-input" value="<?php echo $row["kod_barang"];?>">
											<label class="field-icon"><i class="fa fa-folder"></i></label>  
										</label>
									</div><!-- end section -->
								</div><!-- end .frm-row section -->	
								
								<div class="frm-row">							
									<div class="section colm colm6">
										<label for="publish" class="field-label"> Post <em>*</em></label>
										<label class="field select">
											<select id="publish" name="publish">
											<option value="">Sila pilih...</option>
											<?php
												$sql2 = "SELECT * FROM tb_yn";
												$result2 = mysqli_query($conn, $sql2);
													if (mysqli_num_rows($result2) > 0) {
														while($row2 = mysqli_fetch_assoc($result2)) {										
															if($row2["kod"]==$row["publish"]) { 
																echo "<option value=".$row2["kod"]." selected>".$row2["nama"]."</option>";
															} else { 
																echo "<option value=".$row2["kod"].">".$row2["nama"]."</option>";
															} 										
														}
													}
											?>
											</select>
											<i class="arrow double"></i>                    
										</label>
									</div><!-- end section -->
										
									<div class="section colm colm6">
										<label for="upload" class="field-label"> Gambar </label>
										<label for="order_file_1" class="field prepend-icon file">
											<span class="button btn-blue"> Browse... </span>
											<input type="file" class="gui-file" name="order_file_1" id="order_file_1" onChange="document.getElementById('orderupload').value = this.value;">
											<input type="text" class="gui-input" id="order_upload_1" readonly>
											<label for="order_file_1" class="field-icon"><i class="fa fa-upload"></i></label>
										</label>
										<span class="small-text block spacer-t10 fine-grey"> 1MB - MAX </span> 
									</div><!-- end section -->
								</div><!-- end .frm-row section -->							
								
								<div class="section">
									<label for="description" class="field-label"> Catatan </label>
									<label for="description" class="field prepend-icon">
										<textarea class="gui-textarea" id="description" name="description" placeholder="Masukkan catatan jika ada..."><?php echo $row["description"];?></textarea>
										<label for="description" class="field-icon"><i class="fa fa-comments"></i></label> 
										<span class="input-hint"> <strong>Hint: </strong>Please enter between 1 - 300 characters. <br />
									</label>
								</div><!-- end section -->
																							
							</div><!-- end .form-body section -->
							
							<div class="form-footer">
							
								<button type="submit" class="button btn-blue">Simpan</button>
							</div><!-- end .form-footer section -->
						</form>

					<?php
							}
						}
					?>

			
			<?php }elseif ($typeid == "Qty"){?>
									
				<form method="post" action="update_item_db.php?id=<?php echo $id;?>&typeid=<?php echo $typeid;?>" id="smart-form">
					<div class="form-body theme-blue">
										
						<div class="section">
							<label for="item" class="field-label"> Item </label>
								<?php
									$sql = "SELECT * FROM stok_item WHERE id = ".$id;
									$result = mysqli_query($conn, $sql);
										if (mysqli_num_rows($result) > 0) {
											while($row = mysqli_fetch_assoc($result)) {	
												echo $row["name"];
											}
										}								
								?>
						</div><!-- end section -->
						
						<div class="section">
							<label for="quantity" class="field-label"> Kuantiti <em>*</em></label>
							<label for="quantity" class="field prepend-icon">
								<input type="text" id="quantity" name="quantity" placeholder="Tambah kuantiti..." class="gui-input">
								<label class="field-icon"><i class="fa fa-folder"></i></label>  
							</label>
						</div><!-- end section -->
						
					</div><!-- end .form-body section -->
					
					<div class="form-footer">
						<button type="submit" class="button btn-blue">Simpan</button>
					</div><!-- end .form-footer section -->
				</form>			
			
				
			<?php }else{?>
				
			<?php }?>
		

				
            
        </div><!-- end .smart-forms section -->
    </div><!-- end .smart-wrap section -->
    
    <div></div><!-- end section -->

</body>
</html>
