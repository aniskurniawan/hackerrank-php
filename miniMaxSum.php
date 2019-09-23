<?php
function miniMaxSum($arr) {
    $maxSumTempArr = $arr;
    $minSumTempArr = $arr;

    // sort into ascending order and get the first four values
    sort($minSumTempArr);
    $minSumArr = array_splice($minSumTempArr, 0 ,4);

    // sort into descending order and get the first four values
    rsort($maxSumTempArr);
    $maxSumArr = array_splice($maxSumTempArr, 0, 4);    

    echo array_sum($minSumArr) . ' ' . array_sum($maxSumArr);
}
Birthday Cake Candles
function birthdayCakeCandles($ar) {
   // count the recurring of the candle
   $candles = array_count_values($ar);
   // sort the recurring candle by descending & get the most recurring candle
   krsort($candles);
   $candlesBlowsValue = array_values($candles);
   return $candlesBlowsValue[0];
}
?>
