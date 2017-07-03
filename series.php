//trier les dates - et chercher l'intervalle le plus grand entre 2 dates
<?php
$series = [2005=>'nom', 1985=>'nom1', 1994=> 'nom2', 1997=>'nom3', 2011=>'nom4', 1978=>'nom5'];
$previousYear = 0;
$biggestDiffYear = 0;
ksort($series);
foreach ($series as $year=>$title)
{
    if($previousYear== 0)
    {
        $previousYear=$year;
    }else
    {
        $diffYear = $year-$previousYear;
    }if ($biggestDiffYear< $diffYear)
         {
    $biggestDiffYear=$diffYear;
            }
            $previousYear = $year;
}
return $biggestDiffYear;
