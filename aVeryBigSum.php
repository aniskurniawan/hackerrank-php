<?php
function aVeryBigSum($ar) {
    $sum = 0;
    foreach($ar as $value){
        $sum+=$value;
    }
    return $sum;
}
?>
