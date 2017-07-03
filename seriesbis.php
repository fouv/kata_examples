//trier les dates - et chercher l'intervalle le plus grand entre 2 dates
<?php
$series = [2005=>'nom', 1985=>'nom1', 1994=> 'nom2', 1997=>'nom3', 2011=>'nom4', 1978=>'nom5'];
$biggestDiffYear = 0;
$series = array_keys($series);
sort($series);
for ($i = 1; $i < $series; $i ++){
    $diffYear = $series [$i] - $series [$i-1];
    if ($biggestDiffYear<$diffYear){
        $biggestDiffYear=$diffYear;
        }
        }
return$biggestDiffYear;


