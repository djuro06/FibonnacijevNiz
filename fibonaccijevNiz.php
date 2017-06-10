<?php
// Vrijednost Fibonaccijevog niz za prvih n brojeva

error_reporting(0);
// zadana varijabla
$v=isset($_GET["v"]) ? $_GET["v"] : "";
$v++;

// vrijednost polja
$x = array(-1, 1);

// sljedeća vrijednost polja
$x[2] = $x[0] + $x[1];

// petlja koja ispisuje fibonaccijev niz
for ($y = 2; $y <= $v; ++$y) {
	$x[$y] = $x[$y - 1] + $x[$y - 2];
	echo $x[$y];
	echo "<br />";
}
echo "<br />";

// prvojera je li uneseni broj veći od 2
if ($v = $_GET["v"] <= 2){
	echo "Vrijednost mora biti veća od 2";
} else {
	echo "Vrijednost fibonaccijevog niza je " . $x[$y-1] / $x[$y-2];	 
}