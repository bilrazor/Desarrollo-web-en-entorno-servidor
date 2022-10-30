<?php
	$db = mysqli_connect ('localhost','root','1234','mysitedb') or die ('Fail');
?>

<html>
<body>
<?php
$buscar = $_GET["search"];

echo $buscar;
?>
</body>
</html>
 