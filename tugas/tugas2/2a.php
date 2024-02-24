<?php
$first_name = 'Silma';
$last_name = 'Tsania';

for ($x = 1; $x < 100; $x++) {
    if ($x % 3 == 0 && $x % 5 == 0) {
        echo $first_name. " " . $last_name;
    } else if ($x % 3 == 0) {
        echo $first_name;
    } elseif ($x % 5 == 0) {
        echo $last_name;
    } else {
        echo $x;
    };
    echo "<br>";
}