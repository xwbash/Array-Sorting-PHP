<?php
$arrays = array();
$arrays_Size = count($arrays);
for ($i = 0; $i < $arrays_Sizee; $i++) { 
    for($a = 0; $a < $arrays_Size; $a++){
        if($arrays[$i] < $arrays[$a])
        {
            $c = $merhaba[$a];
            $arrays[$a] = $arrays[$i];
            $arrays[$i] = $c;
        }
    }
}
print_r($arrays);
?>
