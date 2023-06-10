<?php 

echo "/n","Display elements of associative array with both Key and Value strings"."\n";
$gk = array ("India" => "Delhi", "Italy" => "Rome", "France" => "Paris", "Germany" => "Berlin" , "Spain" => "Madrid", "Unied Kingdom" => "London" );
foreach($gk as $country => $capital)
{
echo "The capital of $country is $capital"."\n" ;
}

echo "\n"."Display size of associative array"."\n";
$len = 0;
foreach ($gk as $key => $val)
{
	$len++;
}
echo $len."\n";

echo "\n"."Delete operation on associaative array";
echo "\n"."Associative array Before deleting the element"."\n";
var_dump ($gk);
unset ($gk["Spain"]);
echo "\n"."Associative Array After delete the element"."\n";
var_dump ($gk);

?>