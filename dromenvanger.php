<?php

$vrienden = array();

echo "Hoeveel vrienden wil je vragen om hun droom?\n";
$hoeveelheid = readline();

for($i = 1; $i <= $hoeveelheid; $i++) {
    echo "Wat is je naam?\n";
    $naam = readline();
    echo "Hoeveel dromen wil je opgeven?\n";
    $hoeveelheiddroom = readline();
    $dromen = array();
    $vrienden[$naam]= array();
    for($j = 1; $j <= $hoeveelheiddroom; $j++) {
        $droom = readline();
        array_push($vrienden[$naam], $droom);
    }
}

foreach ($vrienden as $key1 => $value1) {
    foreach ($value1 as $key2 => $value2) {
        echo $key1 . " heeft als droom $value2\n";
    }

}

?>