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
    echo "\n\n1.revers array \n 2.travers Array \n 3.Array to Varible  \n 4. display \n";
    $opetion=(int) readLine("\nenter the choise :");

    switch ($opetion) {
        case 1:
            rsort($arr);
            print_r($arr);
            break;

            case 2:
              
                echo " \n  traverse the Array in random \n";
                shuffle($arr);
                print_r($arr);
                break;
        
                case 3:
                    echo "converting the array to individual varible \n";
                   extract($arr);
                   echo "\$amol = $amol; \$vishal = $vishal; \$sachin = $sachin \$tushar=$tushar;";
                    break;

        
                    case 4:
                                            
                        echo "assending by Array keys \n";
                        ksort($arr);
                        print_r($arr);
                        
                        break;            
                
        
        default:
          echo"\n enter the currect number : \n";
            break;
    }

  }
    
  
?>