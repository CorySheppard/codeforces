<?php

/*

Hey! This is contest number 2167, challenge letter A.

https://codeforces.com/contest/2167/problem/A

*/

// Declare entries and results variables.
$entries = [];
$results = [];
$position = 1;

echo "How many entries? ";

// Fetch user's input for number of entries.
$amount = rtrim(fgets(STDIN));


// Fetch user's input for individual entries.
while (count($entries) < $amount) {
    echo "Enter ". $position . " value: ";
    $position++;
    $entries[] = rtrim(fgets(STDIN));
};

// Check each entry contains the same values.
foreach ($entries as $entry) {
    $entry = explode(" ", $entry);
    if (count(array_unique($entry)) === 1) {
        echo "YES\n";
    } else {
        echo "NO\n";
    }
};