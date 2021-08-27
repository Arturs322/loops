<?php


//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function

$startNum = 2;
$endNum= rand(1,10);
$result = $startNum;
for ($i = 0; $i < $endNum; $i++)
{
    echo $result = $result * $startNum;
    echo PHP_EOL;
}
echo "I is {$startNum} * {$startNum} ^ {$endNum} = {$result}" . PHP_EOL;




