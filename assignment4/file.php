<?php
$file = fopen("file.txt","r");
$data= fread ($file ,filesize("file.txt"));
echo $data;
fclose($file);
?>