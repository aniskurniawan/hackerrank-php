<?php
function staircase($n) {
    $totalSteps = $n;
    $staircase = [];
    
    // mulai dari langkah yang benar
    for($n; $n>0; $n--){
        $stairs = [];
        // lanjutkan dari staircase kiri hingga mencapai staircase akhir
        // lalu secara bertahap tingkatkan staircase awal
        for($i=1; $i<=$n; $i++){
            // jika sudah mencapai langkah terakhir cetak staircase "#" lain jika spasi
            if($i == $n){
                // hitung total staircase yang akan dicetak
                $totalPrintOfStairs = ($totalSteps - $n) + 1;
                for($totalPrintOfStairs; $totalPrintOfStairs>0; $totalPrintOfStairs--){
                 array_push($stairs, "#");
                }
                array_push($staircase, $stairs);
                break;
            }
            array_push($stairs, " ");
        }
    }

    // cetak staircase
    foreach($staircase as $stairs){
        foreach($stairs as $stair){
            echo $stair;
        }
        echo "\n";
    }
}
?>
