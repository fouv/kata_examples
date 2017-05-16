Objectifs :

1 : compter le nombre de voyelles et de consonnes dans une phrase
2 : afficher le mot contenant le plus de voyelles
3 : afficher le mot contenant le plus de consonnes
4 : afficher le mot ayant le rapport voyelle par consonne le plus fort

En entrée, une phrase
En sortie, un tableau :

array(
"vowel" => xx,
"consonant" => yy,
"most_consonant" => zz,
"best_report" => zx
)

La phrase : Portez ce vieux whisky au juge blond qui fume
Contact GitHub API Training Shop Blog About
<?php


        $totalVowels = 0;
        $totalConsonants = 0;
        $BestTotalVowels = 0;
        $BestTotalConsonants = 0;
        $BestVowelRatio = 0;
        $bestVowelWord = "";
        $bestConsonantWord = "";
        $bestVowelRatioWord = "";
        $vowelsStr = "aeiouy";
        $sentence = "Portez ce vieux whisky au juge blond qui fume";
        $words = explode(" ", strtolower($sentence));
        foreach($words as $word){
            $vowels = 0;
            $consonants = 0;
            for($i = 0; $i < strlen($word); $i++){
                if (false === strpos($vowelsStr, $word[$i])){
                    $totalConsonants++;
                    $consonants++;
                } else {
                    $totalVowels++;
                    $vowels++;
                }
            }
            if($consonants > $BestTotalConsonants){
                $BestTotalConsonants = $consonants;
                $bestConsonantWord = $word;

            }
                 $BestTotalVowels = $vowels;
                $bestVowelWord = $word;
            }
            $ratioVowels = round($vowels / $consonants, 1);
            if($ratioVowels > $BestVowelRatio){
                $BestVowelRatio = $ratioVowels;
                $bestVowelRatioWord = $word;

        }
        $result = [
            "total vowels : "           => $totalVowels,
            "total consonants : "       => $totalConsonants,
            "Best consonant word : "    => $bestConsonantWord,
            "Best vowel word : "        => $bestVowelWord,
            "Best vowel ratio : "       => $bestVowelRatioWord,
        ];
        var_dump($result);