<?php
function diagonalDifference($arr) {
    $length = count($arr);
    $primaryDiagonal = 0;
    $secondaryDiagonal = 0;
    $lastIndex = $length - 1;
    for($i = 0; $i<$length; $i++){
        $primaryDiagonal+=$arr[$i][$i];
        $secondaryDiagonal+=$arr[$i][$lastIndex--];
    }
    return abs($primaryDiagonal - $secondaryDiagonal);
}
?>
