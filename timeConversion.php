<?php
function timeConversion($s) {
    $strToTime = strtotime($s);
    return date('H:i:s', $strToTime);
}
?>
