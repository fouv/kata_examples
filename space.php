<?php

$string = " la vie est dure ";
$explodeString = explode(" ",$string);
$deleteFirstWord = preg_replace('/\s+/','',$explodeString[0]);
$deleteLastWord = preg_replace('/\s+/','',$explodeString[3]);
$space = " ";
$finalString = $deleteFirstWord .$space.$explodeString[1].$space.$explodeString[2].$space.$deleteLastWord;
echo $finalString;

