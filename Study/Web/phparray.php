<?php

//indexed array


$array = ["banana", 100, "orange", 500, "kiwi"];

echo $array[3]+$array[1]. "<br>";

//associative array
$associativeArray = [
    "name" => "John",
    "age" => 30,
    "city" => "New York"
];
echo $associativeArray["name"] . "<br>";
//multidimensional array
$multiArray = [
    "fruits" => ["banana", "orange", "kiwi"],
    "vegetables" => ["carrot", "broccoli"]
];
echo $multiArray["fruits"][1] . "<br>"; 



//array functions
$numbers = [1, 2, 3, 4, 5];
echo count($numbers) . "<br>";
echo in_array(3, $numbers) ? "3 is in the array" : "3 is not in the array" . "<br>";
//array manipulation
array_push($numbers, 6);
echo implode(", ", $numbers) . "<br>";
array_pop($numbers);
echo implode(", ", $numbers) . "<br>";  
//sorting arrays        

sort($numbers);
echo implode(", ", $numbers) . "<br>";
//filtering arrays
$evenNumbers = array_filter($numbers, function($num) {
    return $num % 2 == 0;
});
echo implode(", ", $evenNumbers) . "<br>";
//mapping arrays
$squaredNumbers = array_map(function($num) {
    return $num * $num;
}, $numbers);
echo implode(", ", $squaredNumbers) . "<br>";







?>








