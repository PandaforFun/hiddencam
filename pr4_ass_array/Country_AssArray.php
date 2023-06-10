<?php
$info = array(
    "India" => "Delhi",
    "Italy" => "Rome",
    "France" => "Paris",
    "Germany" => "Berlin",
    "Spain" => "Madrid",
    "United Kingdom" => "London"
);

$ch = $_POST['a'];

switch ($ch) {

    case 1:
        echo "<h3>Display Elements of Associative Array with Both Key and Value Strings</h3>";
        echo "The country and capital information: <br><br>";
        echo "COUNTRY &emsp;&emsp; CAPITAL <br>";
        foreach ($info as $country => $capital) {
            echo "$country &emsp;&emsp;&emsp;&emsp; $capital <br>";
        }
        break;

    case 2:
        echo "<h3>Display Size of Associative Array</h3>";
        echo "The size of the associative array is: <br><br>";
        echo count($info);
        break;

    case 3:
        echo "<h3>Delete Operation on Associative Array</h3>";
        echo "Associative array before deleting the element: <br><br>";
        print_r($info);
        unset($info["Spain"]);
        echo "<br><br>Associative array after deleting the element: <br><br>";
        print_r($info);
        break;

}
?>
