<?php
function gradingStudents($grades) {
     $MODULO = 5;
     $finalGrades = [];

     $finalGrades = array_map(function($grade) use ($MODULO){
         // dapatkan multiplier berikutnya sebesar 5
         $nextMultiplier = $grade + ($MODULO - $grade % $MODULO);
         $difference = $nextMultiplier - $grade;
         // jangan dibulatkan jika nilai kurang dari 40
         // perbedaannya adalah 3 dan lebih besar dari 3
         if($nextMultiplier < 40 || $difference === 3 || $difference > 3){
             return $grade;
         }
         // kumpulkan jika selisihnya kurang dari 3
         return $nextMultiplier;
     }, $grades);

     return $finalGrades;
}
?>
