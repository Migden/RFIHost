<?php 
//Can't utilise direct shell interaction such as system(), exec(), shell_exec()
$filename = $_GET['file']
$file = fopen($filename, 'r');
echo fread($file,filesize($filename));
fclose($file);
?>
