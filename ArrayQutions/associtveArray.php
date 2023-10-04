<?php
 
 $arr=array(
  "Sagar"=>31,
    "Vicky"=>41,
    "Leena"=>39,
    "Ramesh"=>40

 );
 print_r($arr);
 echo "assending by Array Value \n";
 asort($arr);
 print_r($arr);
 
 echo "assending by Array keys \n";
 ksort($arr);
 print_r($arr);
 
 print_r($arr);
 echo "dessending by Array Value \n";
 arsort($arr);
 print_r($arr);
 
 echo "dessending by Array keys \n";
 krsort($arr);
 print_r($arr);
?>