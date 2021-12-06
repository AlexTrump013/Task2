<?php
function set_gen($list){
    $resStr = "";

    foreach (count_chars(implode($list), 1) as $i => $val) {
        $resStr .= chr($i).", ";
        $a = 1;
        $s = chr($i);

        while ($a <= $val){
            $a++;
            $resStr .="'". str_pad($s, $a, $s, STR_PAD_LEFT)."', ";
        }
    }
    echo substr($resStr,0,-2)."\n";
}

$list = [1, 1, 3, 3, 1];
set_gen($list);