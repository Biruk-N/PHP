<Doctype html>
<html>
<head>
<style>
.error{
    color :#ff0000; 
    }
</style>
<title> Form validation </title>9

</head>
<body>
<?php
//define variables and set to empty
$nameErr=$emailErr=$websiteErr=$genderErr=" ";
$name=$email=$website=$comment=$gender=" ";
if ($_SERVER ["REQUEST_METHOD"]=="POST")
  {
      if (empty($_POST['name']))
      {
          $nameErr="name is required"; 
      }
      else {
          $name=test_input($_POST['name']);
         }
  }
      //check if name only contains letters and whitespace 
if (!preg_match ("/^[a-zA-Z]*$/",$name))
    { 
        $nameErr="only letters and whitespace allowed"; 
    }
if (empty($_POST['email']))
    {
        $emailErr="email required";
    }
else 
    {
        $email=test_input($_POST['email']);
    }
//cheak is email address is well formed

if (!filter_var ($email ,FILTER_VALIDATE_EMAIL))
    {
        $emailErr="invalid email format ";
    }
if(empty($_POST[''])){
    $website = "";

}else{
    $website = test_input($_POST['website']);
}
// check if URL Address syntax is valid
if(!preg_match("/\b(?:https?:| ftp:\/\/|www\.)[-a-z0-9+&@#\/%?=~_||:.;]*[-a-z0-9+&@#\/%?=~_|]/i",$website))
{
    $websiteErr = "Invalid url";
}
if(empty($_POST['comment'])){
    $comment = "";
}else{
    $comment = test_input($_POST['comment']);

}
if (empty($_POST['gender'])) {
    $genderErr = "Gender is Required";
}else{
    $gender = test_input($_POST['gender']);
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}?>
<h2>PHP form Vaalidation Example</h2>
<p><span class = "error">*Required field</span></p>
    <form method = "post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
Name:- <input type="text" name = "name" value = "<?php echo $name;?>">
    <span class = "error"> *<?php echo $nameErr;?></span><br><br>
    Email:- <input type="text" name = "email" value = "<?php echo $email;?>">
    <span class = "error"> *<?php echo $emailErr;?></span><br><br>
    Website:-<input type="text" name = "website" value = "<?php echo $website;?>">
    <span class = "error"> *<?php echo $websiteErr;?></span><br><br>
    Comment:- <textarea name="comment" id="" cols="40" rows="5"></textarea><br><br>
    Gender: <input type="radio" name = "gender" <?php if (isset($gender)&& $gender == "female")
    echo "checked"; ?> vlaue = "female">Female
    <input type="radio" name = "gender"
    <?php
    if (isset($gender) && $gender == "male") {
        echo "Checked";
    }?> value = "male">Male
   <input type="submit" value = "submit">
</form>
<?php
echo "<h2>Your Input</h2>";
echo "$name<br>";
echo "$email<br>";
echo "$website<br>";
echo "$gender<br>";

?>
</body>
</html>
