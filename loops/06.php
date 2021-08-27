<?php

$input=readline("enter levels:");
$figure = "";
for ($i = 0; $i < $input; $i++) {
    $stars = $i * 8;
    $drawing = (($input - 1) * 8 - $stars) / 2;
    $left = $drawing;
    $right = $drawing;
    $figure .= str_repeat('/', $left) . str_repeat('*', $stars) . str_repeat('\\', $right) . PHP_EOL;
}
echo $figure;