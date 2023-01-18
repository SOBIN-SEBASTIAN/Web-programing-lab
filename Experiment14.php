<html>
<head>
	<title>Electricity bill</title>
<style >
	b{
		color: red;
	}
</style>
</head>
<body>
<h1>Electricity bill</h1>
<form method="post" action="#">
<table>
<tr>
	<th>Number of Unit used:</th>
	<td><input type="text" name="n1"></td>
</tr>
<tr>
	<th></th>
	<td><input type="submit" name="n2"></td>
</tr>
</table>
</form>
<?php
$r;
if(isset($_POST["n2"]))
{
	$u=$_POST["n1"];
    $s=rate($u);
    echo "Total Charge for ",$u," Unit =<b>".$s."Rs </b>";	
}
function rate($u)
{
	if($u<=50)
	{
		$r=$u*3.50;
		return $r;
	}
	else if($u>50 && $u<=150)
	{
		$t=50*3.50;
		$u=$u-50;
		$r=$t+$u*4;
		return $r;
	}
	else if($u>150 && $u<=250)
	{
		$t=50*3.50+100*4;
		$u=$u-150;
		$r=$t+$u*5.20;
		return $r;
	}
	else if($u<250)
	{
		$t=50*3.50+100*4+100*5.20;
		$u=$u-250;
		$r=$t+$u*6;
		return $r;
	}
}
?>
</body>
</html>
