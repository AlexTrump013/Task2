<?php
function all_eq($lst){

    $toStr = implode(",",$lst);
    $keywords = preg_split("/[\s,]+/", $toStr);
    $maxLength = 0;

    foreach ($keywords as $keyword){
        if(mb_strlen($keyword)>$maxLength){
            $maxLength = mb_strlen($keyword);
        }
    }

    foreach ($keywords as $index=>$keyword){
        $number = $maxLength-mb_strlen($keyword);
        $keywords[$index] = $keyword.str_repeat("_", $number);
    }

    foreach ($keywords as $keyword){
        echo "'".$keyword."',";
    }

}

$str = ['a', 'aa', 'aaa', 'aaaa', 'aaaaa'];
all_eq($str);