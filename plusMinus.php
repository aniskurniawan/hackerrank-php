<?php
function plusMinus($arr) {
    $POSITIVES = 0;
    $NEGATIVES = 1;
    $ZEROES = 2;

    $length = count($arr);
    // nyatakan nomor temp ke posisi indeks
    $numbers = [0, 0, 0];

    // tentukan plusMinus dari angka-angka
    foreach($arr as $val){
        if($val === 0){
            $numbers[$ZEROES] = $numbers[$ZEROES] + 1;
            continue;
        }
        if($val > 0){
            $numbers[$POSITIVES] = $numbers[$POSITIVES] + 1;
            continue;
        }
        $numbers[$NEGATIVES] = $numbers[$NEGATIVES] + 1;
    }

    $plusMinusArr = array_map(function ($number) use ($length) {
        return number_format($number/$length, 6);
    }, $numbers);

    foreach($plusMinusArr as $plusMinus){
        echo $plusMinus;
        echo "\n";
    }
}
?>
