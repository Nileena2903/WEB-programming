<html>
<body bgcolor="lightgreen">
<h4></h4>
<?php
$name=["DHONI(c)","KARTHIK(vc)","HARDIK","NITISH","GILL","KOHLI","SANJU","JADEJA","SHAMI","BUMRAH","CHAHAL"];
$role=["WICKET KEEPER","BATSMAN","BATSMAN","BATSMAN","BATSMAN","BATSMAN","BATSMAN","ALL ROUNDER","BOWLER","BOWLER","BOWLER"];
echo "<u>STARTING XI</u>";
echo "<br>
<table border='2px'>
<tr><th> sl no.</th>
<th>player</th>
<th>ROLE</th>";
 
for ($i=0;$i<11;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th>
      <th>$role[$i]</th></tr>";
}
echo "</table>"
?>
</body>
</html>
