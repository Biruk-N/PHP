<?php 
echo readfile("webDictionary.txt");
// fopen('webDictionary.txt', mode:list(aa));
$myfile =  fopen('webDictionary.txt', "r");
echo "<br><br><br>";

//fgets only read first line
// echo fgets($myfile);
// fclose($myfile);

$x = feof($myfile);

// for ($i=0; $i < $x; $i++) { 
//     echo fgets($myfile);
// }
// fclose($myfile);
$myfile =  fopen('webDictionary.txt', "r");
while (!feof($myfile)) {
    echo fgets($myfile);
    echo "<br>";
    
}fclose($myfile);
// Output one line until end-of-file

// // fclose($myfile);
// echo fread($myfile,filesize('webDictionary.txt'));
// fclose($myfile);
// echo "<br><br><br>";


// echo "<br><br><br>";
// $myfile =  fopen('webDictionary1.txt', "r") or die("unable to open");
// echo fread($myfile,filesize('webDictionary.txt'));
// fclose($myfile);


?>