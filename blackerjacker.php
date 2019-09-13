<?php


/*
 * $suitearray and $cardarray are arrays in which the values
 * for suites and cards are held, for functions to be done on them
 * later on.
 */

$suitearray = [
    1 => 'Spades', 2=> 'Hearts', 3=> 'Clubs', 4=> 'Diamonds'
];


$cardarray = [
    2 => 2,
    3 => 3,
    4 => 4,
    5 => 5,
    6 => 6,
    7 => 7,
    8 => 8,
    9 => 9,
    10 => 10,
    'J' => 10,
    'Q' => 10,
    'K' => 10,
    'A' => 11,
];

/*
 * The below function will loop around 4 times, randomise
 * both the card and the suite, and output those random values.
 */

for ($i=0; $i<4; $i++) {
    $cardrandomiser = array_rand($cardarray);
    $suiterandomiser = rand(1, 4);
    foreach ($suitearray as $suiteselector => $suite) {
        if ($suiteselector === $suiterandomiser) {
            echo $cardrandomiser . ' of ' . $suite . '<br>';
        }
    }
};


















?>