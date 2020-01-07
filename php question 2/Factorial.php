<h2>1.Factorial of Number</h2>

<?php 
function factorial($num)
{
	$fact = 1;
	for ($x=$num; $x >= 1 ; $x--) { 
		$fact = $fact * $x ;
	}
	echo "Factorial of $num is $fact";
}
$reult = factorial(10);
 ?>