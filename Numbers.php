<?php

while (true) {
 print("Enter Some Numbers( Numbers Separated by space): ");
 $inputs = trim(fgets(STDIN));
 //$inputs = readline();

 if (strtolower($inputs) === 'exit') {
  echo "Exiting program...\n";
  exit();
 }

 $numbers = explode(" ", $inputs);

 $valid_numbers = [];

 foreach ($numbers as $number) {
  if (is_numeric($number)) {
   $valid_numbers[] = $number;
  } else {
   echo "$number, is not a valid number \n";
  }
 }
 if (!empty($valid_numbers)) {
  print_r($valid_numbers);

  echo "Minimum:" . " " . min($valid_numbers) . "\n";
  echo "Maximum:" . " " . max($valid_numbers) . "\n";

  $count = count($valid_numbers);
  $sum = 0;

  foreach ($valid_numbers as $number) {
   $sum += $number;
  }

  echo "Sum of the Numbers is :" . " " . $sum . "\n";
  echo "Average of the Numbers is: " . " " . $sum / $count . "\n";
 } else {
  echo "No valid number is available";
 }
 echo "\n";
}
