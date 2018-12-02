<?php
include '../../includes/connection.php';
$id = $_GET["id"];
?>

<!DOCTYPE html>
<html>
<head>

</head>

<body>

	<div style="text-align:left;font-size:small"></div>
	<div style="text-align:left;font-size:small"></div>
	<div style="text-align:left;font-size:small"></div>
	<div style="text-align:left;font-size:small">

	<table width="85%" border="0" cellpadding="5" cellspacing="1" align="center">
	  <tr>
		<td width="50%" style="text-align:left;font-size:small">
		Bahagian Khidmat Pengurusan <br />
		Pejabat Kewangan Negeri <br />
		Perak Darul Ridzuan. <br />
		<?php
			$sql1 = "SELECT no_permohonan FROM stok_order WHERE id = ".$id;
			$result1 = mysqli_query($conn, $sql1);
				if (mysqli_num_rows($result1) > 0) {
					while($row1 = mysqli_fetch_assoc($result1)) {
						echo "No. Permohonan : ";
						echo sprintf('%03d',$row1["no_permohonan"]);
						echo "/";
						echo date("Y");
					}
				}			
		?>		
		
		</td>		
		<td width="50%" style="text-align:right;font-size:small">
		AM 6.5 Lampiran B<br />
		<strong>LAMPIRAN B<br />KEW.PS-11</strong>		
		</td>
	  </tr>	  
	  <tr>
		<td colspan="2" style="text-align:center"><img src="../../images/kperak/logo_perak.png" alt="logo" class="tt-retina-logo" width="72"/></td>
	  </tr>		  
	  <tr>
		<td colspan="2" style="text-align:center;font-size:large"><strong>BORANG PERMOHONAN STOK</strong></td>
	  </tr>	  
	</table>	


	<table width="85%" border="0" cellpadding="7" cellspacing="1" align="center" bgcolor="#666">
	  <tr bgcolor="#ccc">
		<td width="4%" style="text-align:left;font-size:small"></td>
		<td colspan="3" style="text-align:center;font-size:small">Permohonan</td>
		<td colspan="3" style="text-align:center;font-size:small">Pegawai Pelulus</td>
	  </tr>
	  
	  <tr bgcolor="#ccc">
		<td width="4%" style="text-align:left;font-size:small">Bil.</td>
		<td width="16%" style="text-align:center;font-size:small">Perihal Stok</td>
		<td width="16%" style="text-align:center;font-size:small">Kuantiti Dipesan</td>
		<td width="16%" style="text-align:center;font-size:small">Catatan</td>
		<td width="16%" style="text-align:center;font-size:small">Kuantiti Diluluskan</td>
		<td width="16%" style="text-align:center;font-size:small">Baki Kuantiti Dipesan</td>
		<td width="16%" style="text-align:center;font-size:small">Catatan</td>		
	  </tr>	  

	
	<?php
	$x = 1;
	$sql = "SELECT * FROM stok_order_detail WHERE id_order = ".$id;
	$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
	?>

	  <tr bgcolor="#fff">
		<td width="4%" style="text-align:left;font-size:small"><?php echo $x;?>.</td>
		<td width="16%" style="text-align:left;font-size:small">
		<?php
			$sql2 = "SELECT * FROM stok_item WHERE id = ".$row["id_item"];
			$result2 = mysqli_query($conn, $sql2);
				if (mysqli_num_rows($result2) > 0) {
					while($row2 = mysqli_fetch_assoc($result2)) {
						echo $row2["name"];
					}
				}			
		?>		
		</td>
		<td width="16%" style="text-align:center;font-size:small"><?php echo $row["requested_quantity"];?></td>
		<td width="16%" style="text-align:center;font-size:small">&nbsp;</td>
		<td width="16%" style="text-align:center;font-size:small"><?php echo $row["approved_quantity"];?></td>
		<td width="16%" style="text-align:center;font-size:small">&nbsp;</td>
		<td width="16%" style="text-align:center;font-size:small">&nbsp;</td>
	  </tr>	

	<?php
		$userid = $row["userid"];
		$x = $x + 1;
			}
		}
	?>
	
	
	  <tr bgcolor="#fff">
		<td colspan="4" style="text-align:left;font-size:small;vertical-align:text-top">
			<br /><br /><br /><br />
			......................................
			<br />
			(Tandatangan Pemohon)
			<br /><br />
			<?php
				$sql31 = "SELECT nama,jawatan FROM tb_member WHERE userid = '".$userid."'";
				$result31 = mysqli_query($conn, $sql31);
					if (mysqli_num_rows($result31) > 0) {
						while($row31 = mysqli_fetch_assoc($result31)) {
							echo "Nama : ".$row31["nama"];
							$jawatan = $row31["jawatan"];
						}
					}			
			?>
			<br />
			<?php
				$sql32 = "SELECT nama FROM db_jawatan WHERE id = ".$jawatan;
				$result32 = mysqli_query($conn, $sql32);
					if (mysqli_num_rows($result32) > 0) {
						while($row32 = mysqli_fetch_assoc($result32)) {
							echo "Jawatan : ".$row32["nama"];
						}
					}			
			?>
			<br />
			<?php
				$sql33 = "SELECT order_date FROM stok_order WHERE id = ".$id;
				$result33 = mysqli_query($conn, $sql33);
					if (mysqli_num_rows($result33) > 0) {
						while($row33 = mysqli_fetch_assoc($result33)) {
							$yyyy1 = substr($row33["order_date"],0,4);
							$mm1 = substr($row33["order_date"],5,2);
							$dd1 = substr($row33["order_date"],8,2);
							echo "Tarikh : ".$dd1."/".$mm1."/".$yyyy1;							
						}
					}			
			?>
		</td>
		<td colspan="3" style="text-align:left;font-size:small;vertical-align:text-top">
			<strong>Kelulusan:</strong> <br />
			Pemohonan <br /><br /><br />
			......................................<br />
			(Tandatangan Pegawai Pelulus)<br /><br />
			Nama: <br />
			Jawatan: <br />
			Tarikh: <br />
		</td>
	  </tr>	
	</table>
	
	<br />
	
	<table width="85%" border="0" cellpadding="7" cellspacing="1" align="center" bgcolor="#666">
	  <tr bgcolor="#fff">
		<td width="50%" style="text-align:left;font-size:small">
			<strong>Kemaskini Rekod:</strong> <br /><br />
			Stok telah dikeluarkan dan direkod di Kad Petak No .......................<br /><br /><br />
			......................................<br />
			(Tandatangan Pegawai Pelulus)<br /><br />
			Nama: <br />
			Jawatan: <br />
			Tarikh: <br />		
		</td>
		<td width="50%" style="text-align:left;font-size:small">
			<strong>Perakuan Penerimaan:</strong> <br /><br />
			Disahkan bahawa stok yang diluluskan telah diterima.<br /><br /><br /><br />
			......................................<br />
			(Tandatangan Pemohon/Wakil)<br /><br />
			Nama: <br />
			Jawatan: <br />
			Tarikh: <br />		
		</td>
	  </tr>
	</table>
	  
</body>
</html>
