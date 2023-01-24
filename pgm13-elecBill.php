<html>
<head>
<title>kseb</title>
<style>
body{
background-color:pink;
}
</style>
</head>
<body>
<?php
if($_POST)
{
$consumer_number=$_POST["consumer_number"];
$consumer_name=$_POST["consumer_name"];
$previous_reading=$_POST["previous_reading"];
$present_reading=$_POST["present_reading"];
$unit=$present_reading-$previous_reading;
if($unit<100)
{
$amt=$unit*3;
}
elseif(100<=$unit && $unit<=200)
{
$amt=$unit*4;
}
elseif(200<=$unit && $unit<=300)
{
$amt=$unit*5;
}
else
{
$amt=$unit*6;
}
echo"<table width=50% border=1 cellspacing=1 cellpadding=1>";
echo"<tr><th colspan=2><h2>ELECTRICITY BILL</h2></th></tr>";
echo"<tr><td>Consumer Number</td>
     <td>$consumer_number</td></tr>";

echo"<tr><td>Consumer Name</td>
     <td>$consumer_name</td></tr>";

echo"<tr><td>Previous Reading</td>
     <td>$previous_reading</td></tr>";

echo"<tr><td>Present Reading</td>
     <td>$present_reading</td></tr>";

echo"<tr><td>Unit consumer</td>
     <td>$unit</td></tr>";

echo"<tr><td>Amount</td>
     <td>$amt</td></tr></table>";
exit;
}
?>
<form action="" method="POST">
<center>
<table width="50%" border="1" cellspacing="1" cellpadding="1">
<tr><th colspan="2"><h2>ELECTRICITY BILL</h2></th></tr>
<tr><td> Enter Consumer Number</td>
<td><input type="text" name="consumer_number"></td></tr>

<tr><td> Enter Consumer Name</td>
<td><input type="text" name="consumer_name"></td></tr>

<tr><td> Enter Previous Reading</td>
<td><input type="text" name="previous_reading"></td></tr>

<tr><td> Enter present Reading</td>
<td><input type="text" name="present_reading"></td></tr>

<tr><th colspan="2">
<input type="submit" value="submit">
<input type="reset" value="reset"></th></tr></table></center>
</form>
</body>
</html>


