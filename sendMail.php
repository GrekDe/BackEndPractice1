<?php
$subject = 'EMAIL FOR YOU»';

echo '============' . "\n";
echo $subject . "\n";
echo '============' . "\n";

$firstName = 'Denis';
$name = "First Name: {$firstName}.";
$myAge = 'My age: 21.';
$myCity = 'A live in Kharkov.';
$myNumberPhone = 'My number phone is 09978900023.';
$message = $name . "\n" . $myAge . "\n". $myCity .  "\n" . $myNumberPhone;
echo $message;

$headers = 'From: d.y.hrek@student.khai.edu';
mail('denyyss90@gmail.com', $subject, $message, $headers);