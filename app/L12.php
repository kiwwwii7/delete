<?php

function myGetType($variable) : string
{
    $result = null;

    if (is_int($variable)) {
        $result =  "int";
    } elseif(is_float($variable)) {
        $result = "float";
    } elseif(is_string($variable)) {
        $result = "string";
    }

    return "$variable is $result\r\n";
}

$numberOne = 11; // integer / int
$numberTwo = 11.6; // float / double
$numberThree = 835962582385293856826395692365;
$numberFour = 18446744073709551616;
$numberFive = -9223372036854775807;
$numberSix = 1.0000000000000005;
$numberSeven = 1.0000000000000004;


var_dump($numberOne, $numberTwo, $numberThree, $numberFour, $numberFive -2, $numberSix, ($numberSix - $numberSeven) < 0.000000000000000001);

$numberSix = 1.0000000000000005 + 3.06;
$numberSeven = 1.0000000000000004 + 0.0005;

var_dump($numberSix, $numberSeven);

$booleanOne = true;
$booleanTwo = false;

var_dump($booleanOne, $booleanTwo);

$null = null;

var_dump($null);

$stringOne = "iuhfiw";
$stringTwo = 'iuhfiw';

$stringThree = '<p>'.$numberTwo.'</p>';
$stringFour = "<p>".$numberTwo."</p>";
$stringFive = "<p> $numberTwo </p>";
$stringSix = '<p> $numberTwo </p>';

var_dump($stringOne, $stringTwo, $stringThree, $stringFour, $stringFive, $stringSix, ord('Z'), chr(68));

$numberEight = '11';

echo myGetType($numberOne);

if ($numberOne == intval(round($numberTwo, ))) {
    echo '11 is 11';
} else {
    echo '11 is not 11';
}

var_dump(floatval('49645.45'));

define('FOO', 'bar');

echo FOO;



/*

char (1byte)
short
int (32bit / 4byte)
unsigned int (32bit / 4byte)
long (64bit / 8byte)
unsigned long (64bit / 8byte)

*/

?>