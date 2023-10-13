<?php

$handle1 = fopen("newfile.txt", "r");
$handle2 = fopen("secoundFile.txt", "w");


if ($handle1 && $handle2) {
   
    while (($line = fgets($handle1)) !== false) {
        fwrite($handle2, $line);
    }

    
    fclose($handle1);
    fclose($handle2);

    echo "Content of firstFile has been copied into secondFile successfully.";
} else {
    echo "Unable to open the files.";
}
?>
