<?php
  
   $arr=array(
    "amol"=>21,
    "vishal"=>32,
    "sachin"=>43,
    "tushar"=>25
   );
    print_r($arr);
    echo"\n";
    echo "plese enter u opetion \n";
  while (true) {
    echo "1.split to chunk \n 2.sort \n 3.filter \n";
    $opetion=(int) readLine("\nenter the choise :");

    switch ($opetion) {
        case 1:
            print_r(array_chunk($arr,2));
            break;

            case 2:
                print_r($arr);
                echo " \n assending by Array Value \n";
                asort($arr);
                print_r($arr);
                break;
        
                case 3:
                    foreach($arr as $val){
                        if ($val %2==0) {
                            echo"\n $val \n";

                        }
                    }
                    break;
                
        
        default:
          echo"\n enter the currect number : \n";
            break;
    }

  }
    
    $opetion
?>