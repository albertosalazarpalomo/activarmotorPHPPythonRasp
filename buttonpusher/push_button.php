<?php
$comando = "sudo /var/www/buttonpusher/python/open-tray.py";
$output = shell_exec($comando);
$output = trim($output);
echo $output;
?>
