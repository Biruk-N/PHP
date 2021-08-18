
<?php
echo "Today is ".date("d.m.y");
echo "<br>Today is ".date("m-d-y");
echo "<br>Today is ".date("m/d/y");
echo "<br>Today is ".date("l");

?>
<br>
<b>copyright from</b> © 2018-<?php echo date("Y")?>

<br><br>
<?php 
date_default_timezone_set("Africa/Addis_Ababa");
echo "date_default_timezone_get()";
echo "<br> today is ".date("l");
echo "<br>";
echo "date_default_timezone_get()";
echo 'This time is <br> '.date("h:i:sa");
header("Refresh:01");
?>

<?php 
date_default_timezone_set("America/New_York");
echo "<br>New York";
echo "<br> today is ".date("l");
echo "<br>";
echo "date_default_timezone_get()";
echo 'This time is <br> '.date("h:i:sa");
header("Refresh:01");
?>
<?php 
date_default_timezone_set("Europe/London");
echo "<br>London";
echo "<br> today is ".date("l");
echo "<br>";
echo "date_default_timezone_get()";
echo 'This time is <br> '.date("h:i:sa");
header("Refresh:01");
?>
<?php
$ol = strtotime("Tomorrow");
echo "<br>";
echo "Tomorrow is ".date("d-m-y h:i:sa");
echo "<br>";
echo $ol;
echo "<br>";
$d = strtotime("Next Saturday");
echo "Next Saturday at this time".date("d-m-y h:i:sa");
echo "<br>";
$d = strtotime("+3 months", $d);
echo "After there month the date & this is !".date("d-m-y h:i:s:a", $d);

echo "<br>";
$d = strtotime("Next Saturday");
echo "Next Saturday at this time".date("d-m-y h:i:sa");
echo "<br>";
$d = strtotime("+6 months", $d);
echo "After there month the date & this is !".date("d-m-y h:i:s:a", $d);

include "getresult.php";

?>
