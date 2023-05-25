<?php 
// deel 1 

// $myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
// $myArray[] = ('boot');
// print_r($myArray);

// deel 2

$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
$myArray[] = ('boot');
echo "Het array heeft nu " . count($myArray) . " elementen" . PHP_EOL;

// deel 3

// regel 2 print : bar
// regel 5 print : 4
// regel 8 print : 3
// regel 9 print : 3
// regel 12 print : 5
// regel 19 print : five

// deel4a
$cijfersPHP = [4.4, 4.6, 5.6, 6.1 , 7.6, 7.6, 7.2];

echo "Gemiddelde is: " . round(array_sum($cijfersPHP) / count($cijfersPHP), 1);

// deel4b

// Ik denk dat het beter is om de regels niet samen te voegen, omdat het overzichtelijker is.
?>