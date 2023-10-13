<?php
  function insert(&$arr,$val) {
    array_push($arr,"$val");
    echo "\nelement inserted \n";
  }
  function delete(&$arr) {
    if (empty($arr)) 
        echo "\nnothing to delete \n";
    else{
        array_pop($arr);
        echo "\nelement deleted\n";
    }
  }  
    $array=array();
    echo "plese enter u opetion \n";
  while (true) {
    echo "\n\n1.push \n 2.pop  \n 3. display \n";
    $opetion=(int) readLine("\nenter the choise :");
    switch ($opetion) {
        case 1:
          echo "\n inset the element in stack \n";
          $value=(int) readLine("\nenter the value :");
            insert($array,$value);
            break;
            case 2:
              delete($array);
                break;
                case 3:
                    echo "\n the stack elments is \n";
                 print_r($array);
                    break;    
        default:
          echo"\n enter the currect number : \n";
            break;
    }
  }    
?>