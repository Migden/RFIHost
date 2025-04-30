<?php 
//Can't utilise direct shell interaction such as system(), exec(), shell_exec()
$filename = $_GET['file']
$file = fopen($filename, "r") or die("Can't Open File, or File does not exist!");
echo fread($file,filesize($filename));
fclose($file);
?>
