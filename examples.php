<?php

use KrvvkoHuh\NoNumbersKeyboardLibrary\nnkb\NoNumbersKB;

require_once('NoNumbersKB.php');


// Creating the object for users that have no access to numbers on keyboard
$nnkb = new NoNumbersKB();


$five = $nnkb->five();             // Number 5
$nine = $nnkb->nine();             // Number 9

echo $five;                        // Output: 5
echo $five + 5;                    // Output: 10
echo "\n";
echo $five + $nine;                // Output: 14
echo "\n";
var_dump($five == 5);        // True
var_dump($five == 9);        // False
