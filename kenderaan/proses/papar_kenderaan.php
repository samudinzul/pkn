<?php
include '../../includes/connection.php';
$id = $_GET["id"];
?>

<!DOCTYPE html>
<html>
<head>

</head>

<body>

	<div style="text-align:left;font-size:small">Bahagian Khidmat Pengurusan</div>
	<div style="text-align:left;font-size:small">Pejabat Kewangan Negeri</div>
	<div style="text-align:left;font-size:small">Perak Darul Ridzuan.</div>
	<div style="text-align:left;font-size:small">
	<?php
		$sql1 = "SELECT no_permohonan FROM db_kenderaan WHERE id = ".$id;
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
	</div>

	<table width="85%" border="0" cellpadding="5" cellspacing="1" align="center">
	  <tr>
		<td style="text-align:center"><img src="../../images/kperak/logo_perak.png" alt="logo" class="tt-retina-logo" width="72"/></td>
	  </tr>	  	
	  <tr>
		<td style="text-align:center;font-size:large"><strong>BORANG PENGGUNAAN KENDERAAN</strong></td>
	  </tr>	  
	</table>	
	
	<?php
	$sql = "SELECT * FROM db_kenderaan WHERE id = ".$id;
	$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
	?>

		<table width="85%" border="0" cellpadding="7" cellspacing="1" align="center">
		  <tr>
			<td width="25%" style="text-align:left;font-size:small">UNIT</td>
			<td width="2%" style="text-align:center;font-size:small">:</td>
			<td width="73%" style="text-align:left;font-size:small">
			<?php
				$sql2 = "SELECT * FROM db_unit WHERE id = ".$row["unit"];
				$result2 = mysqli_query($conn, $sql2);
					if (mysqli_num_rows($result2) > 0) {
						while($row2 = mysqli_fetch_assoc($result2)) {
							echo $row2["nama"];
						}
					}			
			?>
			</td>
		  </tr>

		  <tr>
			<td width="25%" style="text-align:left;font-size:small">NAMA PEGAWAI YANG MEMOHON</td>
			<td width="2%" style="text-align:center;font-size:small">:</td>
			<td width="73%" style="text-align:left;font-size:small">
			<?php
				$sql3 = "SELECT * FROM tb_member WHERE userid = ".$row["nama_pemohon"];
				$result3 = mysqli_query($conn, $sql3);
					if (mysqli_num_rows($result3) > 0) {
						while($row3 = mysqli_fetch_assoc($result3)) {
							echo strtoupper($row3["nama"]);
						}
					}			
			?>
			</td>
		  </tr>		  
		  
		  <tr>
			<td width="25%" style="text-align:left;font-size:small">TUJUAN KEGUNAAN</td>
			<td width="2%" style="text-align:center;font-size:small">:</td>
			<td width="73%" style="text-align:left;font-size:small"><?php echo strtoupper($row["tujuan"]);?></td>
		  </tr>		  		  
		  
		  <tr>
			<td width="25%" style="text-align:left;font-size:small">BILANGAN (PENUMPANG)</td>
			<td width="2%" style="text-align:center;font-size:small">:</td>
			<td width="73%" style="text-align:left;font-size:small"><?php echo $row["bil_penumpang"];?> ORANG</td>
		  </tr>
		  
		  <tr>
			<td width="25%" style="text-align:left;font-size:small">TARIKH BERTOLAK</td>
			<td width="2%" style="text-align:center;font-size:small">:</td>
			<td width="73%" style="text-align:left;font-size:small">
			<?php 
			$yyyy0 = substr($row["tarikh_bertolak"],0,4);
			$mm0 = substr($row["tarikh_bertolak"],5,2);
			$dd0 = substr($row["tarikh_bertolak"],8,2);
			echo $dd0."/".$mm0."/".$yyyy0;
			?>
			</td>
		  </tr>		  
		  
		  <tr>
			<td width="25%" style="text-align:left;font-size:small">TARIKH KEMBALI</td>
			<td width="2%" style="text-align:center;font-size:small">:</td>
			<td width="73%" style="text-align:left;font-size:small">
			<?php 
			$yyyy1 = substr($row["tarikh_kembali"],0,4);
			$mm1 = substr($row["tarikh_kembali"],5,2);
			$dd1 = substr($row["tarikh_kembali"],8,2);
			echo $dd1."/".$mm1."/".$yyyy1;
			?>
			</td>
		  </tr>
		  
		  <tr>
			<td width="25%" style="text-align:left;font-size:small">HARI</td>
			<td width="2%" style="text-align:center;font-size:small">:</td>
			<td width="73%" style="text-align:left;font-size:small">
			<?php 
			//echo dayname($test);
			?>
			</td>
		  </tr>
		  
		  <tr>
			<td width="25%" style="text-align:left;font-size:small">WAKTU BERTOLAK/BERLEPAS</td>
			<td width="2%" style="text-align:center;font-size:small">:</td>
			<td width="73%" style="text-align:left;font-size:small">
			<?php
				$sql41 = "SELECT * FROM tb_jam WHERE id = ".$row["waktu_bertolak"];
				$result41 = mysqli_query($conn, $sql41);
					if (mysqli_num_rows($result41) > 0) {
						while($row41 = mysqli_fetch_assoc($result41)) {
							echo $row41["masa_12"];
						}
					}			
			?>			
			</td>
		  </tr>		  
		  
		  <tr>
			<td width="25%" style="text-align:left;font-size:small">WAKTU KEMBALI</td>
			<td width="2%" style="text-align:center;font-size:small">:</td>
			<td width="73%" style="text-align:left;font-size:small">
			<?php
				$sql42 = "SELECT * FROM tb_jam WHERE id = ".$row["waktu_kembali"];
				$result42 = mysqli_query($conn, $sql42);
					if (mysqli_num_rows($result42) > 0) {
						while($row42 = mysqli_fetch_assoc($result42)) {
							echo $row42["masa_12"];
						}
					}			
			?>			
			</td>
		  </tr>		  

		  <tr>
			<td width="25%" style="text-align:left;font-size:small">TARIKH MOHON</td>
			<td width="2%" style="text-align:center;font-size:small">:</td>
			<td width="73%" style="text-align:left;font-size:small">
			<?php 
			$yyyy2 = substr($row["tarikh_mohon"],0,4);
			$mm2 = substr($row["tarikh_mohon"],5,2);
			$dd2 = substr($row["tarikh_mohon"],8,2);
			echo $dd2."/".$mm2."/".$yyyy2;
			?>
			</td>
		  </tr>
		  
		</table>
		
		<hr><br />
		
		<table width="85%" border="0" cellpadding="5" cellspacing="1" align="center" bgcolor="#ccc">
		  <tr>
			<td style="text-align:center;font-size:small"><strong>ARAHAN TUGAS MEMANDU</strong></td>
		  </tr>	  
		</table>
		
		<br />
		
		<table width="85%" border="0" cellpadding="7" cellspacing="1" align="center" bgcolor="#666">
		  <tr bgcolor="#FFF">
			<td width="25%" style="text-align:left;font-size:small">1. NAMA PEMANDU</td>
			<td width="2%" style="text-align:center;font-size:small">:</td>
			<td colspan="4" style="text-align:left;font-size:small">
			<?php
				$sql51 = "SELECT * FROM db_pemandu WHERE id = ".$row["nama_pemandu"];
				$result51 = mysqli_query($conn, $sql51);
					if (mysqli_num_rows($result51) > 0) {
						while($row51 = mysqli_fetch_assoc($result51)) {
							echo strtoupper($row51["nama"]);
						}
					}			
			?>
			</td>
		  </tr>		
		  
		  <tr bgcolor="#FFF">
			<td width="25%" style="text-align:left;font-size:small">2. NO. KENDERAAN</td>
			<td width="2%" style="text-align:center;font-size:small">:</td>
			<td colspan="4" style="text-align:left;font-size:small">
			<?php
				$sql52 = "SELECT * FROM db_no_kenderaan WHERE id = ".$row["no_kenderaan"];
				$result52 = mysqli_query($conn, $sql52);
					if (mysqli_num_rows($result52) > 0) {
						while($row52 = mysqli_fetch_assoc($result52)) {
							echo strtoupper($row52["nama"]);
						}
					}			
			?>
			</td>
		  </tr>
		  
		  <tr bgcolor="#FFF">
			<td width="25%" style="text-align:left;font-size:small">3. TARIKH</td>
			<td width="2%" style="text-align:center;font-size:small">:</td>
			<td width="18%" style="text-align:left;font-size:small">MULAI DARI :</td>
			<td width="18%" style="text-align:left;font-size:small">
			<?php 
			$yyyy2 = substr($row["tarikh_dari"],0,4);
			$mm2 = substr($row["tarikh_dari"],5,2);
			$dd2 = substr($row["tarikh_dari"],8,2);
			echo $dd2."/".$mm2."/".$yyyy2;
			?>			
			</td>
			<td width="18%" style="text-align:left;font-size:small">HINGGA</td>
			<td width="18%" style="text-align:left;font-size:small">
			<?php 
			$yyyy3 = substr($row["tarikh_hingga"],0,4);
			$mm3 = substr($row["tarikh_hingga"],5,2);
			$dd3 = substr($row["tarikh_hingga"],8,2);
			echo $dd3."/".$mm3."/".$yyyy3;
			?>			
			</td>
		  </tr>

		  <tr bgcolor="#FFF">
			<td width="25%" style="text-align:left;font-size:small">4. WAKTU BERTUGAS</td>
			<td width="2%" style="text-align:center;font-size:small">:</td>
			<td width="18%" style="text-align:left;font-size:small">MULAI JAM :</td>
			<td width="18%" style="text-align:left;font-size:small">
			<?php
				$sql43 = "SELECT * FROM tb_jam WHERE id = ".$row["waktu_dari"];
				$result43 = mysqli_query($conn, $sql43);
					if (mysqli_num_rows($result43) > 0) {
						while($row43 = mysqli_fetch_assoc($result43)) {
							echo $row43["masa_12"];
						}
					}			
			?>
			</td>
			<td width="18%" style="text-align:left;font-size:small">HINGGA</td>
			<td width="18%" style="text-align:left;font-size:small">
			<?php
				$sql44 = "SELECT * FROM tb_jam WHERE id = ".$row["waktu_hingga"];
				$result44 = mysqli_query($conn, $sql44);
					if (mysqli_num_rows($result44) > 0) {
						while($row44 = mysqli_fetch_assoc($result44)) {
							echo $row44["masa_12"];
						}
					}			
			?>
			</td>
		  </tr>

		  <tr bgcolor="#FFF">
			<td width="25%" style="text-align:left;font-size:small">5. BUTIRAN TUGAS</td>
			<td width="2%" style="text-align:center;font-size:small">:</td>
			<td colspan="4" style="text-align:left;font-size:small"><?php echo $row["butiran"];?></td>
		  </tr>		
		  
		</table>
		

	
	<br /><br />
	
	<table width="85%" border="0" cellpadding="7" cellspacing="1" align="center">  	
	  <tr>
		<td style="text-align:left;font-size:small">
			Diluluskan oleh :
			<br /><br /><br /><br />
			......................................
			<br /><br />
			<?php
				$sql51 = "SELECT nama,jawatan FROM tb_member WHERE userid = ".$row["pic_status"];
				$result51 = mysqli_query($conn, $sql51);
					if (mysqli_num_rows($result51) > 0) {
						while($row51 = mysqli_fetch_assoc($result51)) {
							echo "Nama : ".$row51["nama"];
							$jawatan = $row51["jawatan"];
						}
					}			
			?>
			<br />
			<?php
				$sql52 = "SELECT nama FROM db_jawatan WHERE id = ".$jawatan;
				$result52 = mysqli_query($conn, $sql52);
					if (mysqli_num_rows($result52) > 0) {
						while($row52 = mysqli_fetch_assoc($result52)) {
							echo "Jawatan : ".$row52["nama"];
						}
					}			
			?>
			<br />
			<?php
				$yyyy1 = substr($row["tarikh_status"],0,4);
				$mm1 = substr($row["tarikh_status"],5,2);
				$dd1 = substr($row["tarikh_status"],8,2);
				echo "Tarikh : ".$dd1."/".$mm1."/".$yyyy1;							
			?>			
			
		</td>
	  </tr>	  
	</table>

	<?php
			}
		}
	?>
	
	<br />
	
	<div style="text-align:center;font-size:small">CATATAN : Perubahan adalah tertakluk kepada arahan terbaru pada bila-bila masa, semak arahan sebelum tugasan dibuat. </div>
	<div style="text-align:center;font-size:small">Kenderaan tidak dibenarkan keluar dari kawasan pejabat sebelum tugas bermula, kecuali dengan kebenaran Pegawai Pengangkutan.</div>
	
</body>
</html>
