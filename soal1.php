<?php
    $data = "9.327.421";
    $str = str_replace(".", "",$data);

    for($a = 0; $a<strlen($str); $a++){
        echo $str[$a];
        for($c=strlen($str)-1; $c>$a; $c-=1){
            echo "0";
        }
        echo"<br>";
    }
?>