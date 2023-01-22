<?php
//Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum
$a = 1;
$b = 2;
$c = $a + $b;
echo "sum of a and b " . $c . "<br>";
if ($a == $b) {
    $d = $c * $c * $c;
    echo $d;
} else {
    echo "a and b are not equal";
}
echo "<br>";

//we can also perform the above code by using functions with the single line of code

function sumOfIntegers($num, $num1)
{
    $sum = $num + $num1;
    echo "sum of Integers:: " . $sum;
    echo "<br>";
    if ($num == $num1) {
        $num2 = $sum * $sum * $sum;
        echo "number which are eqaul num=$num and num1=$num1 is:: ".$num2;
    }
}
sumOfIntegers(1,2);
sumOfIntegers(2,3);
sumOfIntegers(3,3);
