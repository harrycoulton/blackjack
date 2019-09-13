<?php


/*
 * $suitearray and $cardarray are arrays in which the values
 * for suites and cards are held, for functions to be done on them
 * later on.
 */

$suitearray = [
    'Spades', 'Hearts', 'Clubs', 'Diamonds'
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


function deal($array) {
        shuffle($array);
        return $array;
};

$dealtcardarray = deal($cardarray);
$dealtsuitearray = deal($suitearray);



foreach ($dealtsuitearray as $suiteselector => $dealtsuite){
        echo $dealtsuite . '<br>';
    }

foreach ($firstfour as $dealtfirstfour => $cardvalue) {
    echo $dealtfirstfour . '<br>';
}








?>