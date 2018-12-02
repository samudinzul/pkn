<?php
include '../../includes/connection.php';
$id = $_GET["id"];
?>

<!DOCTYPE html>
<html>
<head>
	<style>
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;

	}
	th, td {
		padding: 5px;
		text-align: left;
	}
	table#t01 {
		width: 95%;    
		background-color: #fff;
	}
	</style>
	
	<script type='text/javascript'>
		window.onunload = function(){
		window.opener.location.reload();}
	</script>		
</head>


<body>

	<br />

	<?php
	$sql = "SELECT * FROM stok_item WHERE id = ".$id;
	$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {				
	?>

			<table style="width:95%">
			  <tr>
			    <td>Pic</td>
				<td style="text-align:center"><img src="../img/item/<?php echo $row["pics"];?>" width="250"></td>
			  </tr>

			  <tr>			  
				<td>Category</td>
				<td>
				<?php
				if ($row["id_category"] == 1) {
					echo "<strong>Stationery</strong>";
				}elseif ($row["id_category"] == 2){
					echo "<strong>Corporate Item</strong>";
				}elseif ($row["id_category"] == 3){
					echo "<strong>Internal Item</strong>";
				}else{
					echo "error";
				}
				?>
				</td> 
			  </tr>
			  
			  <tr>
			    <td>Item</td>
				<td><?php echo $row["name"];?></td>
			  </tr>
			  
			  <tr>
			    <td>Kod Kawalan</td>
				<td><?php echo $row["kod_kawalan"];?></td>
			  </tr>

			  <tr>
			    <td>Kod Barang</td>
				<td><?php echo $row["kod_barang"];?></td>
			  </tr>			  
			  
			  <tr>
			    <td>Description</td>
				<td><?php echo $row["description"];?></td>
			  </tr>
			  
			  <tr>
			    <td>Publish</td>
				<td>
				<?php 
				if ($row["publish"] == 'Y'){
					echo "Yes";
				}else{
					echo "No";
				}?>				
				</td>
			  </tr>			  			  
			  
			</table>
		
	<?php
			}
		}
	?>

	<br>



	<table id="t01">
	  <tr>
		<th style="text-align:center">DATE</th>
		<th style="text-align:center">QUANTITY</th>
		<th style="text-align:center"></th>
	  </tr>
	  
	<?php
	$sql2 = "SELECT * FROM stok_item_detail WHERE id_item = ".$id." ORDER BY item_date DESC";
	$result2 = mysqli_query($conn, $sql2);
		if (mysqli_num_rows($result2) > 0) {
			while($row2 = mysqli_fetch_assoc($result2)) {
	?>		  
		  <tr>
			<td style="text-align:center">
			<?php 
			$yyyy = substr($row2["item_date"],0,4);
			$mm = substr($row2["item_date"],5,2);
			$dd = substr($row2["item_date"],8,2);
			echo $dd."/".$mm."/".$yyyy;
			?>
			</td>
			
			<td style="text-align:center"><?php echo $row2["quantity"]; ?></td>
			<td style="text-align:center"><a href="update_item_db.php?id=<?php echo $id;?>&quantity=<?php echo $row2["id"]; ?>&typeid=Delete" onclick="return confirm('Are you sure you want to delete this quantity?');">Delete</a></td>
		  </tr>
		  
	<?php
			}
		}
	?>		  
	
	</table>
		

	
</body>
</html>
