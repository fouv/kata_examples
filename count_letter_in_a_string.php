<?php
$words = explode(" ", "happy beautiful happy lines pear gin happy lines rock happy lines pear");
$result = array_combine($words, array_fill(0, count($words), 0));

foreach($words as $word) {
    $result[$word]++;
}

foreach($result as $word => $count) {
    echo "There are $count instances of $word.\n";
}

//*There are 4 instances of happy.
//There are 1 instances of beautiful.
//There are 3 instances of lines.
//There are 2 instances of pear.
//There are 1 instances of gin.
//There are 1 instances of rock.