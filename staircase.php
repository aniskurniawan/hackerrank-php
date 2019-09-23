<?php
function staircase($n) {
    $totalSteps = $n;
    $staircase = [];
    // start from the right steps
    for($n; $n>0; $n--){
        $stairs = [];
        // proceed from left stair until the reach the final stair steps
        // then gradually increase the starting stair
        for($i=1; $i<=$n; $i++){
            // if it reached the final step print the stairs "#" else the its spaces
            if($i == $n){
                // calculate the total stairs to print
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

    // print the staircases
    foreach($staircase as $stairs){
        foreach($stairs as $stair){
            echo $stair;
        }
        echo "\n";
    }
}
?>
