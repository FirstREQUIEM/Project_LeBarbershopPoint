<?php

$fp = fopen("antrean.txt", "a");    
$hitcounter = file_get_contents("hitcounter.txt");
$hitcounter++;
file_put_contents("hitcounter.txt", $hitcounter);


fwrite($fp, "<br>Nomor Antrean: $hitcounter<br>");
fwrite($fp, "Nama: ".$_POST['nama']."<br>");
fwrite($fp, "No. Telp: ".$_POST['no_telp']."<br>");
fwrite($fp, "Gaya Rambut: ".$_POST['gaya_rambut']."<br><br>");


fclose($fp);

header("Location: index.php");
exit;
?>