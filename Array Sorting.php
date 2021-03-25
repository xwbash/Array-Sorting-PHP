<?php
$merhaba = array(1,20,50,6,23,5,6,22,2,3,3);
for ($i = 0; $i < 11; $i++) { 
    for($a = 0; $a < 11; $a++){
        if($merhaba[$i] < $merhaba[$a])
        {
            $c = $merhaba[$a];
            $merhaba[$a] = $merhaba[$i];
            $merhaba[$i] = $c;
        }
    }
}
print_r($merhaba);
?>