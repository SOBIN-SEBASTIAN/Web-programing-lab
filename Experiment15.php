<html>
<head>
	<title>
		
	</title>
</head>
<body>
<?php
$a=array("a"=>"Naveen","b"=>"Bibin","c"=>"Jeswin","d"=>"Alan","e"=>"Bittu" );
print_r($a);
echo"<br><h3>Array in ascending order</h3>";
asort($a);
foreach($a as $x=>$x_value)
   {
   echo  $x_value;
   echo "<br>";
   }
arsort($a);
echo"<br><h3>Array in Descending order</h3>";
foreach($a as $x=>$x_value)
   {
   echo  $x_value;
   echo "<br>";
   }

?>
</body>
</html>