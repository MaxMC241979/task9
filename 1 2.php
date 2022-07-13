<?php
$ar = [[47, 71, 29, 15],[15, 0, 477, 4],[19, 410, 789, 47, 558],[12, 444, 44, 47, 78]];
echo "<pre>";
print_r($ar);
echo "</pre>";
$sum = 0;

for ($i=0; $i < count($ar); $i++) {
    for ($j=0; $j < count($ar[$i]); $j++) {
        $sum += $ar[$i][$j];
    }
}
echo " сумма ". $sum ;

?>