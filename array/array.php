<head>
	<style type = "text/css">
	body{
			background-image: linear-gradient(to right, 
            orange, red);
			color: black;
			/* text-align: center; */
		}

	
	}
	
	</style>
	<title> array in php </title>
	</head>
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like $cars[0], $cars[1] and $cars[2] <br>";

$cars[0] = "Volvo";
$cars[1] =  "BMW";
$cars[2] = "Toyota";
echo "I like $cars[0], $cars[1] and $cars[2]<br>";
echo count($cars);
echo "<br><br><br>";

// foreach $cars in i
// echo $cars[i];
$length = count($cars);
for ($i = 0; $i < $length; $i++ ){
    
    echo "$cars[$i] <br><br>";

}
// php Associative Arrays
$age = array("Gir "=>35, "Bet"=> 37, "Jem" => 43);
// or

$age['Gir'] = 35;
$age['Bet'] = 37;
$age['Jem'] = 43;

// loop through
foreach ($age as $x => $x_value){
    echo "key = $x, value = $x_value <br>";
}
$y  = sort($cars);
echo $y;

?>
