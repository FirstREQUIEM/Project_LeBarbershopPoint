<?php
$fp = fopen("antrean.txt", "r");
while (!feof($fp)) {
    echo fgets($fp);
}

fclose($fp);
?>