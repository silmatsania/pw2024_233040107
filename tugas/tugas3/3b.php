<?php

function urutan_angka($no) {
    $monno =1;
    for ($i = 1; $i <= $no; $i++) {
        for($j = 1; $j <=$i; $j++) {
            echo $monno++." ";
        }
        echo("<br>");
    }
}

echo urutan_angka(5);

?>