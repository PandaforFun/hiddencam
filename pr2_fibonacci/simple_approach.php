
<?php
 
$num= 0;
$nl = 0;
$n2 = 1;
echo "Fibonacci series for first 12 numbers: ";
 
echo "\n";
 
echo $nl.' ' . $n2. ' ';
 
while ($num <10)
{
$n3 =$n2+ $nl;
 
echo $n3. ' ';
$nl = $n2;
 
$n2 = $n3;
 
$num=$num + 1;
 
}
 
?>