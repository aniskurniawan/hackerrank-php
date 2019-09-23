function compareTriplets($a, $b) {
    $length = count($a);
    $aliceScore = 0;
    $bobScore = 0;
    for($i=0; $i<$length; $i++){
        if($a[$i] == $b[$i]){
            continue;
        }
        if($a[$i] > $b[$i]){
            $aliceScore++;
            continue;
        }
        $bobScore++;
    }
    return [$aliceScore, $bobScore];
}
