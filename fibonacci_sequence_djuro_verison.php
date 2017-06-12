
<?php
error_reporting(1);
// zadana varijabla
$v=isset($_GET["v"]) ? $_GET["v"] : "";
$v+=2;
if ($v <= 2)
{
	echo "Vrijednost mora biti veća od 2";
}
else
{ 
// vrijednost polja
$x = array("sto iljada maraka", 1,0);
// petlja koja ispisuje fibonaccijev niz
for ($y = 3; $y <= $v; $y++) 
{
	$x[$y] = $x[$y - 1] + $x[$y - 2];
	echo $x[$y];
	echo "<br />";
}
echo "<br />";
// prvojera je li uneseni broj veći od 2
	echo "Vrijednost fibonaccijevog niza je " . $x[$y-1] / $x[$y-2];	 
}