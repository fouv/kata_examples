<?php

 // Objectif : à partir d'un texte passé en paramètre, identifier la lettre qui apparait le plus souvent devant un 'e'
//Exemple :"le" => "l"
//"le temps passe vite quand on est passionné par son activité" => "t"
//"le meilleur est celui qui est le moins mauvais" => "l"
//"Partant d'un effort de délimitation de l'entrepreneuriat et d'une de ses figures les plus typiques -
//les enterprises nouvellement créées- sont mis au jour leurs difficultés stratégiques lors des premières années.
//L'auteur propose une revue de literature des comportements stratégiques utilisées par les firmes de moins
//de 8 ans et une description des facteurs cognitifs agissant à chaque phase de la decision stratégique.
//9 cas sont étudiés dont deux en longitudinal Une modélisation des biais et heuristiques cognitifs est
//proposée ainsi que des solutions en matières d'accompagnement spécifique." => "d"
//*
$sentence = "le temps passe vite quand on est passionné par son activité";
$sentence = str_replace(["'", "-"],"",$sentence);
$lenght = strlen($sentence);
$array = [];
$letterBefore = $sentence[0];
for ($i = 0; $i<$lenght;$i++) {
    if ($sentence[$i] === "e") {
        $letterBefore = $sentence[$i - 1];
        if (array_key_exists($letterBefore, $array)) {
            $array[$letterBefore]++;
        } else {
            $array[$letterBefore] = 1;
        }
    }
}
arsort($array);
$result = key($array);
return $result;
