<?php
// function convert 1000 to 1K
function convert_to_k($obj) {
    $obj   = intval($obj); 
    $hasil = $obj;
    if($obj >= 1000) {
        $itung = $obj/1000;
        $dt    = number_format((float)$itung,2,'.','');
        $hasil = "{$dt}k";
    }
    return $hasil;
}

// how to use?
$before = 1500;
$after  = convert_to_k($before);
// display results
echo $after;
// 1,5K

?>
