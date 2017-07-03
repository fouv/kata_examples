<?php

//function toNumberArray(array $stringArray) : array {
    $stringArray = ["1.1","2.2","3.3"];
    $result = array();

   foreach($stringArray as $index){
       $result[] = floatval($index);

    }
        print_r($result);

//}