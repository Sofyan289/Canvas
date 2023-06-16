<?php
// Opdracht 1
$tijd = date("h:i");

if($tijd < 12) {
    echo "goedemorgen";
} elseif ($tijd < 18) {
    echo "goedemiddag";
} else {
    echo "Goedenavond";
}
// Opdracht 2
echo "\n";
function Gemiddelde ($getal1, $getal2) {
    $gemiddelde = $getal1 / $getal2;
    return $gemiddelde;
}
$resultaat = Gemiddelde(50,5);
echo $resultaat;
echo "\n";

// Opdracht 3
function resterendedagen ($Begindatum, $Eindejaar) {
$Begindatum = date("Y-m-d");
$Eindejaar = date("Y-12-31");
$dagen = (strtotime($Eindejaar) - strtotime($Begindatum)) / (60 * 60 * 24);
echo $dagen;
};
echo "\n";
// opdracht 4

function stringcount ($array) {
    foreach($array as $value) {
    echo strlen($value);
    }
    echo $value;
};

$test = array("twee", "vier" , "zes");

stringcount($test);

?>