<?php
/**
 * Use PHP to output the lowest 10 positive integers where the sum of the digits of each integer equals 10 
 * and contains the number 7 as one of the digits. Please provide the answer and link to your work.
 */

function checkNum($num) {
    $sum = 0;
    $isSeven = false;
    while(true) {
        $digit = $num % 10;
        $sum += $digit;
        if ($digit == 7) $isSeven = true;
        $num = (int) ($num / 10);
        if ($num == 0) break;
    }
    return ($isSeven && $sum == 10);
}

for ($num = 1, $count = 0; ; $num ++) {
    if ($count >= 10) break;
    if (checkNum($num)) {
        echo $num . "<br/>";
        $count ++;
    }
}

?>