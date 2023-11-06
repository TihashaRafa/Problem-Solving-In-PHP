<!-- Problem Statement
Suppose, you work in a toy car workshop, and your job is to build toy cars from a collection of parts. Each toy car needs 4 wheels, 1 car body, and 2 figures of people to be placed inside. Write a program which will calculate how many complete toy cars can be made, given the total number of wheels, car bodies and figures available.

Input
The input consists of three integers: number of wheels, car bodies, figures.

Output
The output will print the number of cars. -->


<?php
function calculate_toy_cars($wheels, $car_bodies, $figures) {
    $cars = min(intdiv($wheels, 4), $car_bodies, intdiv($figures, 2));
    return $cars;
}

$input = fgets(STDIN);
list($wheels, $car_bodies, $figures) = explode(' ', $input);

echo calculate_toy_cars((int)$wheels, (int)$car_bodies, (int)$figures) . PHP_EOL;
?>

