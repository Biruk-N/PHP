<!DOCTYPE html>
<html>
<body>
<style type = "text/css">
	body{
			background-image: linear-gradient(to right, orange, red);
			color: black;
			text-align: center;
		}
	
	
	</style>


<table align=center border=4 style = "border-collapse: collapse">
<?php

$num = array(5,3,25,15,100,98);
sort($num);

foreach($num as $x => $a_value){
    echo "$num[$x]<br>";
}


echo "<br><br>";
$product = array(array("<b>CODE</b>","<b>DESCRIPTION</b>","<b>PRICE</b>"),
                array("Tir","Tires",100),
                array("OIL","oil",10),
                array("SPK","spark plug",4));
      
for($i=0;$i<= 3;$i++){
    echo "<tr> \n";
    for($j=0;$j<= 2;$j++){
        echo "<td>";
        echo $product[$i][$j];
        // echo "      ";
        echo "</td> \n";
    }
    echo "</tr> \n";
    echo "<br>";
}



?>

</table>

</body>
</html>