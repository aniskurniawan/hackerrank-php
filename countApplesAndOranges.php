<?php
function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    $count_apples = 0;
    $count_oranges = 0;
    for($i=0; $i<count($apples); $i++) {
        if (inRange($a + $apples[$i], $s, $t)) {
            $count_apples += 1;
        }
    }

    for($i=0; $i<count($oranges); $i++) {
        if (inRange($b + $oranges[$i], $s, $t)) {
            $count_oranges += 1;
        }
    }
    echo "{$count_apples}\n{$count_oranges}";
}
/**
 * Check if a point is in range.
 *
 * @param int $position - The position of the point.
 * @param int $starting_point - The starting point of the range.
 * @param int $ending_point - The ending point of the range.
 *
 * @return boolean
 */
function inRange($position, $starting_point, $ending_point) {
    if ($position >= $starting_point && $position <= $ending_point) {
        return true;
    }
    return false;
}
?>
