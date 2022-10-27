<style>
body {
	padding: 25px;
	background-color: black;
	color: white;
	font-size: 20px;
}
</style>

<title>PassGen - H4Z3</title>

<?php
$n=$_POST["plen"];

function secPass($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ~`! @#$%^&*()_-+={[}]|\:;<,>.?/';
    $randomString = '';
 
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}

echo nl2br("Secure Password: <font color=blue>");
echo secPass($n);
echo "<font color=white>"
?>

<br><br><form method="POST" action="/">
    <input type="submit" value="Return"/>
</form>
