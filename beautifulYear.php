<?php

// Have the user input a year and turn to integer

echo "Please enter a year to find the next year with distinct digits: ";
$year = trim(fgets(STDIN));
$year = intval($year);
$year++;

// Turn year into string and split year into 4 digits
$year = strval($year);
$yearDigits = str_split($year);

// Function to check if all numbers unique
function isUnique (array $digits) {
    return count(array_unique($digits));
};

if (isUnique($yearDigits) === 4) {
    print_r(implode($yearDigits));
} else {
    $unique = false;
    while ($unique === false) {
        $year = implode($yearDigits);
        $year = intval($year);
        $year++;
        $year = strval($year);
        $yearDigits = str_split($year);
        if (isUnique($yearDigits) === 4) {
            print_r(implode($yearDigits));
            $unique = true;
        }
    }
}