<?php

$nb_petals = 5;
$string = ["I love you", "a little", "a lot", "passionately", "madly", "not at all"];
$key = $nb_petals - 1 ;
$reste = $key % 6;
$result = $string[$reste];
print_r($result) ;