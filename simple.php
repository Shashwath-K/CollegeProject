<?php
	include'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>None</title>
</head>
<body>
	<form method="POST">
	enter the value<input type="text" name="box">
	<input type="submit">
	</form>
</body>
</html>
<?php 
	$val=$_POST['box'];
	$query="INSERT INTO test(te1)VALUES('$val')";
	$result1=mysqli_query($query,$conn);
?>