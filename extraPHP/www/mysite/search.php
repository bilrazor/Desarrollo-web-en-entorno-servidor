<?php
	$db = mysqli_connect ('localhost','root','1234','mysitedb') or die ('Fail');
?>

<html>
<body>
<?php
$search = $_GET['search'];


$query = "SELECT * FROM tPeliculas where nombre='".$search."'or genero='".$search."' or año_estreno='".$search."'";
$result = mysqli_query ($db,$query) or die ('ERROR');



while ($row = mysqli_fetch_array($result)) {
	echo $row[0];
	echo '<br>';
	echo $row[1];
	echo '<br>';
	echo $row[3];
?>
	<form action="/do_add_favorite.php"  method="post">
		<input type="hidden" name="pelicula_id" value="<?php echo $row[0]; ?>">
		<input type="submit">
   	</form>
<?php

}
echo '<br>';
echo '<a href="/main.php">Volver</a>';
mysqli_close($db);
?>
</body>
</html>
 
