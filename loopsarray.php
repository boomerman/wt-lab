<html>
<head>
<title>php- loops and arrays
</title>
</head>
<body>
<h1> PHP- Loops and Arrays </h1>
<?php
$i=0; $d=1;
echo "name of cars are in an array 'car'<br>";
$car = array ("swift Dzire", "WagonR", "Santro","BMW Z1","Range Rover", "Vista","figo");
echo "displaying cars with index:<br>";
for($i=0;$i<7;$i++)
{
echo" $d $car[$i] <br>";
$d++;
}
?>
</body>
</html>