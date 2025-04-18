<?php

while (true) {
 print("Enter Some Numbers( Numbers Separated by space and exit to quite): ");
 $inputs = trim(fgets(STDIN));
 //$inputs = readline();

 if (strtolower($inputs) === 'exit') {
  echo "Exiting program...\n";
  exit();
 }

 $numbers = explode(" ", $inputs);
 $all_valid = true;
 $invalid_numbers = [];

 foreach ($numbers as $number) {
  if (!is_numeric($number)) {
   $invalid_numbers[] = $number;
   $all_valid = false;
  }
 }

 if (!empty($invalid_numbers)) {
  echo "Please enter only numbers. \n";
  echo "Invalid inputs: " . implode(", ", $invalid_numbers) . "\n";
 }
 if (!$all_valid) {
  continue; //ask for re-enter
 }
 $numbers = $numbers = array_map(function ($n) {
  return floatval($n);
 }, $numbers);
 // $numbers = array_map('floatval', $numbers); //short form
 print_r($numbers);
 echo "Your valid inputs are " . implode(', ', $numbers) . "\n";

 echo "Minimum:" . " " . min($numbers) . "\n";
 echo "Maximum:" . " " . max($numbers) . "\n";

 $count = count($numbers);
 $sum = 0;

 foreach ($numbers as $number) {
  $sum += $number;
 }

 echo "Sum of the Numbers is :" . " " . $sum . "\n";
 echo "Average of the Numbers is: " . " " . $sum / $count . "\n";

 echo "\n";
}
