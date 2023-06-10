<?php
$info =array ("1"=> "Tanishk", "2"=>"Rishav" ,"3" => "Mishra" , "4" => "shreesh");
$ch =$_POST['a'];
switch($ch)
{

	case 1: echo "<h3>Display Associative Array</h3>";
		  echo "The student Informations: <br><br>";
		  echo "ROLL NO &emsp;&emsp; STUDENT NAME <br>";
		  foreach ($info as $roll_num => $student_name)
			{
				echo "Key=$roll_num &emsp;&emsp;&emsp;&emsp; value=$student_name <br>";
			}
			break;
			
	case 2: echo"<h3>Display Size of Associative Array</h3>";
		  echo"The Size of Associative Array is <br><br>";
		  echo sizeof($info);
		  break;
		  
	case 3: echo "<h3>Delete Operation on Associative Array</h3>";
		  echo "Associative array Before deleting the elemlent <br><br>";
		  print_r($info);
		  unset($info["l"]);
		  echo "<br><br> Associative array After delete the element <br><br>";
		  print_r($info);
		  break;
}
?>