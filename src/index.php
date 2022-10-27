<!DOCTYPE html>
<html lang="en">

<title>PassGen - H4Z3</title>

<style>
body {
	padding: 25px;
	background-color: black;
	color: white;
	font-size: 20px;
}
</style>

<body>
    
<?php
$passCount = fopen("genCount.txt", "r");
$gnRead = fread($passCount,filesize("genCount.txt"));
echo nl2br("\nPasswords Generated: <font color=green>".$gnRead);
echo "<font color=white>";
fclose($passCount);
?>

<form method="post" action="pass.php">
<br>Password Length: <input type="text" name="plen"><br>
<input type="submit" name="submit" value="Generate Secure Password">
</form>

</body>
</html>
