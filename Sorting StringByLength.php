<!-- Sorting String By Length

Problem Statement
Write a program to create a function that returns an array of strings sorted by length in ascending order.

Input
The program will take an integer 
N as the length of an array. Then it will take the string values of the array 
M[].

Output
The output will print the strings in sorted order.

Constraints
0 ≤ |N| ≤ 100000
0 ≤ |M[]| ≤ 10000
Example:
Enter numbers

Input:
6
abcde abc abcd abcdef ab a
Output:
a ab abc abcd abcde abcdef -->


<?php

function SortString($N, $strings) {
    usort($strings, function($a, $b) {
        return strlen($a) - strlen($b);
    });

    return $strings;
}
fscanf(STDIN, "%d\n", $N);

$strings = explode(" ", trim(fgets(STDIN)));

$sortedStrings = SortString($N, $strings);
foreach ($sortedStrings as $string) {
    echo $string . " ";
}

?>