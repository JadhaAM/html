<?php
$myfile=fopen("firstFile.php","w") or die("not openig file \n");

$myfile1 = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile1, $txt);
$txt = "Jane Doe\n";
fwrite($myfile1, $txt);

fclose($myfile);

echo readfile('newfile.txt');

?> 