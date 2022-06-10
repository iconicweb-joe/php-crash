<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'banana', 'orange'];

// Get array length
echo count($fruits);

// Search array
echo in_array('banana', $fruits);

// Add to an array
$fruits[] = 'grape';
array_push($fruits, 'mango', 'raspberry');
array_unshift($fruits, 'kiwi'); // Adds to the beginning

// Remove from array
array_pop($fruits); // Removes last
array_shift($fruits); // Removes first
// Remove specific element
unset($fruits[2]);

// Split into chunks of 2
$chunkedArray = array_chunk($fruits, 2);
var_dump($chunkedArray);

// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
var_dump($arr3);
$arr4 = [...$arr1, ...$arr2]; // Use Spread
var_dump($arr4);

// Combine arrays (Keys & values)
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);

// Array of keys
$keys = array_keys($c);

// Flip keys with values
$flipped = array_flip($c);
var_dump($flipped);

// Create array of numbers with range()
$numbers = range(1, 20);

// Map through array and create a new one
$newNumbers = array_map(function ($test) {
  return "Number ${test}";
}, $numbers);

print_r($newNumbers);

// Filter array
$lessThan10 = array_filter($numbers, fn ($number) => $number < 10);

// Array Reduce
// "carry" holds the return value of the previous iteration
$sum = array_reduce($numbers, fn ($carry, $number) => $carry + $number);
var_dump($sum);




// My Attempt
echo "<br><br>";
$colors = ['red', 'blue', 'green', 'white', 'orange'];
print_r($colors);
array_unshift($colors, 'black');
echo "<br>" . $colors[0] . "<br>";
print_r($colors[1]);
echo "<br>" . count($colors);

// Chunked
$chucked_array = array_chunk($colors, 2);
echo "<br>";
print_r($chucked_array);

// Combined Arrays
echo "<br><br>";
$colors_fruits = [
  "green" => "avacado",
  "red" => "apple",
  "yellow" => "banana",
];
print_r($colors_fruits);
$colors_1 = ['green', 'red', 'yellow'];
$fruits_1 = ['avacado', 'apple', 'banana'];
$colors_1_fruits_1 = array_combine($colors_1, $fruits_1);
echo "<br>";
print_r($colors_1_fruits_1);

// Print Keys
$the_keys = array_keys($colors_1_fruits_1);
echo "<br>";
print_r($the_keys);

// Flipped Array
$flipped_array = array_flip($the_keys);
echo "<br>";
print_r($flipped_array);


// Range
$range = range(1, 20);
echo "<br>";
print_r($range);

// Bryce
echo "<br><br>" . "Bryce big poopy";

// Bryce, but in an array
$bryce_but_an_array = [
  "name" => "not bryce",
  "age" => "not 24",
  "eye color" => "not green"
];

echo "<br><br>";
print_r($bryce_but_an_array);
