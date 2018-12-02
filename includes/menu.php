<?php
include 'connection.php';

/*
$sql1 = "SELECT access_level FROM tb_member WHERE id = ".$uid;
$result1 = mysqli_query($conn, $sql1);
	if (mysqli_num_rows($result1) > 0) {
		while($row1 = mysqli_fetch_assoc($result1)) {
			$application = $row1["application"];
		}
	}
*/
?>


                     <nav role="navigation">
                        <ul id="menu-main-nav">  

							   <!--
							   <li>
								  <a href="/pkn/kenderaan/index.php?uid=<?php echo $uid;?>"><span><strong>Permohonan Kenderaan</strong><span class="navi-description">pinjaman kenderaan</span></span></a>
								  <ul class="sub-menu">
									 <li><a href="/pkn/kenderaan/index.php?uid=<?php echo $uid;?>&sub-menu=1"><span>Borang Pinjaman Kenderaan</span></a></li>
								  </ul>
							   </li>
							   -->							   
							   
							   <li><a href="/pkn/pentadbiran/index.php?uid=<?php echo $uid;?>&typeid=1"><span><strong>Pentadbiran</strong></span></a></li>						   														   
							   <li><a href="/pkn/kenderaan/index.php?uid=<?php echo $uid;?>&typeid=1"><span><strong>Permohonan Kenderaan</strong></span></a></li>
							   <li><a href="/pkn/stok/index.php?uid=<?php echo $uid;?>&typeid=1"><span><strong>Permohonan Stok</strong></span></a></li>
                        </ul>
                     </nav>