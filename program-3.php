<html>
<head><title>Student</title></head>
<body bgcolor="lightgreen">
<?php
echo"<h3>STUDENTS</h3>";
$a="<h3 style='color:blue'>";
$b="<h3 style='color:red'>";
$c="</h3>";
$name=["Amrutha","Neenu","Aleefa","Sreya","Nileena"];
$t=$name;
echo"$a printing using print_r $c";
print_r($name);
echo"<br>";
asort($name);
echo"$b sorting using asort() $c";
foreach($name as $i)
  echo",".$i;
  echo"<br>";
asort($name);
echo"$a sorting using asort() $c";
foreach($name as $i)
echo",".$i;
echo"</h3>";
?>
</body>
</html>    
