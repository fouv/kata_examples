<?php
$array = [5,10,3,15,7,24];
// nbre de notes comprises entre 15 et 20
$count = 0;
foreach ($array as $value) {
    if ($value >= 5 && $value <= 10 ){
        $count = $count +1;
            }
}

//fonction lambda
$tableau = array_filter($array, function ($element){
    return $element >= 5 && $element <= 10;

});
// nbre de notes comprises entre 5 et 10
$array = [5,10,3,15,7,24];
$count = 0;
foreach ($array as $value) {
   if($value>=5 && $value<=10){
       $count = $count + 1;
   }
}
//version lambda
$array = [5,10,3,15,7,24];
$array = array_filter($array, function ($element)
{
    return($element >=5 && $element<=10);
});


// calculer la moyenne des notes
$array = [5,10,3,15,7,24];
$sum = 0;
foreach ($array as $value){
    $sum = $value++;
}
$count = count($array);
$average = $sum / $count;

// version lambda
$array = [5,10,3,15,7,24];


// sortir la note la plus haute
$array = [5,10,3,15,7,24];

// afficher uniquement les notes qui ont la moyenne
$array = [5,10,3,15,7,24];