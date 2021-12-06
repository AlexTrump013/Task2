<?php
function magic(){
    $value1 = 2;
    $value2 = 5;
    $value3 = 7;
    $value4 = 5;
    $result = (pow($value1,2) + pow($value2,2) + pow($value3,2))/$value4."\n";
    if (preg_match('/^\+?\d+$/', $result)) {
        return "Волшебство случается";
    }
    else{
        return "Никакого волшебства";
    }
}

magic();
