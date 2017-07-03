<?php
class KataExemple
{
public static function action($value)
{
$points = ["0", "15", "30", "40", "A"];
$p1 = 0;
$p2 = 0;
$score1 = "0";
$score2 = "0";
$game1 = 0;
$game2 = 0;
$set1 = 0;
$set2 = 0;
for($i = 0; $i < strlen($value); $i++) {
if ($value[$i] === "1"){
$p1++;
} else {
$p2++;
}
if ($game1 > 5 && $game1 - $game2 >= 2) {
$set1++;
$game1 = $game2 = 0;
} elseif ($game2 > 5 && $game2 - $game1 >= 2) {
$set2++;
$game1 = $game2 = 0;
}
if ($p1 > 3 && $p1 - $p2 >= 2) {
$game1++;
$p1 = $p2 = 0;
} elseif ($p2 > 3 && $p2 - $p1 >= 2){
$game2++;
$p1 = $p2 = 0;
}
}
if ($p1 > 3 && $p1 - $p2 == 1) {
$score1 = "A";
$score2 = "40";
} elseif ($p2 > 3 && $p2 - $p1 == 1) {
$score1 = "40";
$score2 = "A";
} else {
$score1 = $points[$p1];
$score2 = $points[$p2];
}

return $set1 . "/" . $set2 . " - " . $game1 . "/" . $game2 . " - " . $score1 . "/" . $score2;
}
}


class KataExempleTest extends \PHPUnit_Framework_TestCase
{
    public function test1() {
        $this->assertEquals ("0/0 - 0/0 - 40/30", KataExemple::action("11122"));
    }
    public function test2() {
        $this->assertEquals ("0/0 - 0/0 - 40/0", KataExemple::action("111"));
    }
    public function test3() {
        $this->assertEquals ("0/0 - 0/0 - 30/30", KataExemple::action("1122"));
    }
    public function test4() {
        $this->assertEquals ("0/0 - 0/0 - 30/15", KataExemple::action("112"));
    }
    public function test5() {
        $this->assertEquals ("0/0 - 0/0 - 40/40", KataExemple::action("111222"));
    }
    public function test6() {
        $this->assertEquals ("0/0 - 0/0 - 40/A", KataExemple::action("1112222"));
    }
    public function test7() {
        $this->assertEquals ("0/0 - 1/0 - 15/30", KataExemple::action("1111122"));
    }
    public function test8() {
        $this->assertEquals ("0/0 - 0/1 - 30/15", KataExemple::action("2222211"));
    }
    public function test9() {
        $this->assertEquals ("1/0 - 0/1 - 30/15", KataExemple::action("1111111111111111111111112222112"));
    }
    public function test10() {
        $this->assertEquals ("0/1 - 0/1 - 30/15", KataExemple::action("2222222222222222222222222222112"));
    }
    public function test11() {
        $this->assertEquals ("0/1 - 0/0 - 30/15", KataExemple::action("222222222222222222222222112"));
    }
}