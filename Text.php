<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Prashant\n";
fwrite($myfile, $txt);
$txt = "Prashant\n";
fwrite($myfile, $txt);
fclose($myfile);
?>