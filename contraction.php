Le but est de convertir un signe non abbrégé en sa version abbrégée (majuscules séparées par des points).
Exemple : ‘Wild Code School’ => ‘W.C.S.’

Dans un second temps, ajouter un 1er cas particulier
Société Nationale du Chemin de Fer Français doit donner ‘S.N.C.F.’ et non ‘S.N.D.C.D.F.F’
Tandis que
‘Electricité de France’ doit bien donner ‘E.D.F.’


Puis un autre cas particulier
‘World Wide Web Consortium’ => W.3.C. (et les autres sigles fonctionnent bien entendu toujours comme attendus)


<?php
//namespace wcs; // or your own namespace
//class KataContraction
//{
 //   public static function action($value)
 //   {
        $value = "World Wide Web Consortium";
        $array = explode(" ", $value);
        $accronym = "";
        $prevChar = "";
        $countChar = 0;
        foreach ($array as $word){
            $firstLetter = "";
            if (strlen($word) > 3 or $countChar >= 2) {
                $firstLetter = $word[0];
                $accronym .= $firstLetter . ".";
            } else if (count($array) <= 3){
                $firstLetter = $word[0];
                $accronym .= strtoupper($firstLetter) . ".";
            }
            if ($firstLetter !== ""){
                if ($firstLetter !== $prevChar){
                    $countChar = 1;
                    $prevChar = $firstLetter;
                } else {
                    $countChar++;
                    if ($countChar === 3){
                        $accronym = $firstLetter . ".3.";
                    }
                }
            }
        }
        return $accronym;
   // }
//}
