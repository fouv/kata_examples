<?php
//namespace wcs;
//class Random {
//public static function algo() {

    $randArray = array ();
    for ($i=0; $i<50; $i++) {
        $randArray[] = rand(1, 100);
    }
    rsort($randArray);
    var_dump($randArray);
//}
//}
//Random::algo();

