Écrire une fonction qui prend en entrée du code Morse et le convertit en caractères lisibles par l’homme
Le morse est composé d'une succession de points et de tirets.
Chaque lettre est séparée par un espace, chaque mot par 3 espaces.

Alphabet

"-.-.--" => "!",
"....-" => "4",
"..--.." => "?",
"--..--" => ",",
".-.-.-" => ".",
"..---" => "2",
"...--" => "3",
"--..." => "7",
"-...." => "6",
"....." => "5",
"---.." => "8",
"-..." => "B",
"----." => "9",
".--." => "P",
"-----" => "0",
"--.." => "Z",
"-.--" => "Y",
"-..-" => "X",
"-.-." => "C",
"...-" => "V",
".----" => "1",
"..-." => "F",
"...." => "H",
".---" => "J",
"--.-" => "Q",
"-..-." => "/",
".-.." => "L",
"..." => "S",
"---" => "O",
"-.-" => "K",
".-." => "R",
"..-" => "U",
"-.." => "D",
".--" => "W",
"--." => "G",
"-." => "N",
"--" => "M",
".." => "I",
".-" => "A",
"-" => "T",
"." => "E",

tests :
$this->assertEquals ('WILD', \wcs\KataExemple::action('.-- .. .-.. -..'));
$this->assertEquals ('WILD CODE', \wcs\KataExemple::action('.-- .. .-.. -..   -.-. --- -.. .'));


<?php
namespace wcs; // or your own namespace
class KataMorse
{
    public static
        $morse = array(
        "-.-.--" => "!",
        "....-" => "4",
        "..--.." => "?",
        "--..--" => ",",
        ".-.-.-" => ".",
        "..---" => "2",
        "...--" => "3",
        "--..." => "7",
        "-...." => "6",
        "....." => "5",
        "---.." => "8",
        "-..." => "B",
        "----." => "9",
        ".--." => "P",
        "-----" => "0",
        "--.." => "Z",
        "-.--" => "Y",
        "-..-" => "X",
        "-.-." => "C",
        "...-" => "V",
        ".----" => "1",
        "..-." => "F",
        "...." => "H",
        ".---" => "J",
        "--.-" => "Q",
        "-..-." => "/",
        ".-.." => "L",
        "..." => "S",
        "---" => "O",
        "-.-" => "K",
        ".-." => "R",
        "..-" => "U",
        "-.." => "D",
        ".--" => "W",
        "--." => "G",
        "-." => "N",
        "--" => "M",
        ".." => "I",
        ".-" => "A",
        "-" => "T",
        "." => "E",
    );
    public function morse2Text($sentence)
    {
        $words = explode("   ", $sentence);
        $phrase = '';
        foreach($words as $word){
            $letters = explode(" ",$word);
            $result = '';
            foreach ($letters as $letter){
                $result .= self::$morse[$letter];
            }
            $phrase .= $result . " "  ;
        }
        return trim($phrase);
    }
    public static function text2Morse($value)
    {
        $text2morse = array_flip(self::$morse);
        $sentence = explode(" ", $value);
        $morsesentence ='';
        foreach ($sentence as $word){
            $letters = str_split($word);
            $morseletter ='';
            foreach ($letters as $letter){
                $morseletter .= $text2morse[$letter] . " ";
            }
            $morsesentence .= $morseletter . "  ";
        }
        return trim($morsesentence);
    }
}