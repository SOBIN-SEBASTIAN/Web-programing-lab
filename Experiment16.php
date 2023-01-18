<html>
<head>
	<title>Indian Cricket team </title>
	<style>
	table,td{
		 border: 1px solid;
	}
		th{
			background-color: skyblue;
		}

	</style>
</head>
<body>
<?php
$a=array("Rohit Sharma",
"KL Rahul",
"Shikhar Dhawan",
"Ruturaj Gaikwad",
"Shubman Gill",
"Prithvi Shaw",		
"Shreyas Iyer",	
"Manish Pandey",
"Cheteshwar Pujara",	 	 	
"Ravindra Jadeja",	
"Hardik Pandya",
"Krunal Pandya");
?>
<table>
	<tr>
		<th>Name Of the Player </th>
	</tr>
	<?php	
	foreach($a as $x)
   	{
   		echo "<tr><td>".$x."</td></tr>";
   }
   ?>
</table>
</body>
</html>