<?php 

echo "\n"."Display elements of associative array with Key string and value integer"."\n";
$info = array ("l" => "Tanishk", "2" => "Rishav" , "3" => "Mishra" , "4" => "shreesh" );
echo "The student information is: "."\n";
echo "ROLL NO"."\t\t"."Studnet Name"."\n";
foreach($info as $roll_num => $student_name)
{
echo "$roll_num"."\t\t"."student_name"."\n";
}

echo "\n"."Display size of associative array"."\n";
echo "\n";

echo "\n"."Delete operation on associative array";
echo "\n"."Associative array Before deleting the element"."\n";
print_r($info);
unset($info[1]);
echo "\n"."Associative array After delete the element"."\n";
print_r($info);
?> 