<?php

$entries = [];
$results = [];
$position = 1;

echo "How many entries? ";

$amount = rtrim(fgets(STDIN));

while (count($entries) < $amount) {
    echo "Enter ". $position . " value: ";
    $position++;
    $entries[] = rtrim(fgets(STDIN));
};

foreach ($entries as $entry) {
    $entry = explode(" ", $entry);
    if (count(array_unique($entry)) === 1) {
        echo "YES\n";
    } else {
        echo "NO\n";
    }
};