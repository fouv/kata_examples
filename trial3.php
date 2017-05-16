<?php


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
$sentence = 'wild';
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