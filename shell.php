<?php 
//Can't utilise direct shell interaction such as system(), exec(), shell_exec()
$file = fopen("index.php", "r") or die("Can't Open File, or File does not exist!");
echo fread($file,filesize("index.php"));
fclose($file);
?>
