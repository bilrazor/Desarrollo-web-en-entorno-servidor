<?php
	$db = mysqli_connect('localhost','root','1234','mysitedb') or die ('fail');
?>
<html>
<body>
<?php
echo'<h1 align="center"> Conexion establecida </h1>';
echo '<table border="1" align="center">';
echo '<tr>';
echo	'<th>ID</th>';
echo   	'<th>NOMBRE</th>';
echo   	'<th>ULR_IMAGEN</th>';
echo   	'<th>GENERO</th>';
echo	'<th>AÑO_ESTRENO</th>';
echo '</tr>';


	//lanzar una query
	$query = 'Select * from tPeliculas'  ;
	$result = mysqli_query ($db, $query) or die('Query error');
	// Recorrer el resultado
?>

<?php
	while ($row = mysqli_fetch_array ($result)) {
	echo 	'<tr>';
	echo	'<th>';
		echo $row[0];
		echo '<br>';
	echo	'</th>';
	echo   	'<th>';
		echo $row['nombre'];
		echo '<br>';
	echo	'</th>';
	echo   	'<th>';
		?><a href="http://localhost:8083/detail.php"><img src="<?php echo $row[2]; ?>" width='100' height='100' /></a>;<?php
		echo '<br>';
		
	echo	'</th>';
	echo	'<th>';
		echo $row['genero'];
		echo '<br>';
	echo	'</th>';
	echo	'<th>';
		echo $row[4];
		echo '<br>';
	echo	'</th>';
	echo 	'</tr>';
}

	mysqli_close($db);
echo '</table>';
?>	

</body>
</html>
