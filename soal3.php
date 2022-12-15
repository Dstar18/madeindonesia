<?php
    $oddCount = 15;
    $x1 = 0;
    $a = array();
    for ($x=1; $x < $oddCount; $x++){ 
        if ( $x % 2 == 1 ){ 
          $a[] = $x;
          $x1++;
        }
      }
      $zx = implode(", ", $a);  
      echo $x1 ."----> [".$zx."]";
?>