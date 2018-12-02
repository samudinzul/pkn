<?php
$to = "faaib.jaafar@kperak.com.my";
$subject = "STATIONERY - NEW ORDER!";
$txt = "Hi Pentadbir Sistem, \n\nTempahan alat tulis baru dibuat. Mohon semakan dan tindakan pentadbir. \n\nTerima kasih.";
$headers = "From: hrms@kperak.com.my" . "\r\n" .
"CC: faaibj@gmail.com";
mail($to,$subject,$txt,$headers);
?>