<?php
	$db = mysqli_connect('localhost','root','1234','mysitedb') or die ('fail');
?>
<html>
<head>
<style>
	body{
		
		font-weight:900;
		background-image: url(https://www.nicepng.com/png/detail/432-4327221_pelicula-cine-png-peliculas-de-cine.png);
}

#id1 {
	color:red;
}
th {
	color:white;
	background-color:#DAC1EO;
}

.transition {
	transition:width 2s, height 2s, margin 2s;
}
.transition:hover {
	width:200px;
	height:200px;
	margin: 0 auto;
}
.transition2{
	transition:width 2s.height 2s, margin 2s;
}
.transition2:hover {
	background-color: yellow;
	font-weight : bold;
}

table {
	background-color:black;
}

p {
	background-color:white;

}
.log{
	color:red;
}
.inlog{
	color:green;
}
</style>
</head>
<body>
<?php
session_start();
echo '<h1 align="center" >Tus peliculas Online </h1>';
?>
<form action="/search.php" method="get">
	<input type="text" name="search" placeholder="search">
	<input type="submit" value="buscar">
</form>





<?php

if (isset($_SESSION['user_id'])) {
echo '<p align="right">Estas logeado</p>';
echo '<p align="right"><a class="log" href="/logout.php">Logout</a></p>';
echo '<p align="right"><a href="/contraseña.html">Cambiar Contraseña</a></p>';
echo '<p align="right"><a href="/favorites.php">Favoritos</a></p>';
}else{
echo '<p align="right">No estas logeado</p>';
echo '<p align="right"><a class="inlog" href="/logout.php">Logout</a></p>';
}

echo '<table border="1" align="center">';
echo '<tr class="transition2">';
echo	'<th id=id1>ID</th>';
echo   	'<th id=id1>NOMBRE</th>';
echo   	'<th id=id1>ULR_IMAGEN</th>';
echo   	'<th id=id1>GENERO</th>';
echo	'<th id=id1>AÑO_ESTRENO</th>';
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
	echo   	'<th class="transition">';
		?><a href="/detail.php?pelicula_id=<?php echo $row[0] ?>">
		 <img class="transition" src="<?php echo $row[2] ?>" width='100' height='100' /></a>;<?php
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
