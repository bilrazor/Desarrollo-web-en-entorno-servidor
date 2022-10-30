<?php
	$db = mysqli_connect('localhost','root','1234','mysitedb') or die ('fail');
?>

<html>
<body>
<?php
$query = "SELECT * FROM  tPeliculas  p join tFavoritos f on (p.id=f.idPelicula)";


//$query = "SELECT * FROM tFavoritos" ;
$result = mysqli_query($db , $query) or die ('Query error');

while ($row = mysqli_fetch_array($result)) {
	echo "id_pelicula: ".$row['idPelicula'];
	echo "<br>";
	echo "id_usuario: ".$row['idUsuario'];
	echo "<br>";
	echo  "nombre de la pelicula: ".$row['nombre'];
	echo "<br>";
	echo "genero de la pelicula: ".$row['genero'];
	echo "<br>";
	echo "Año del estreno: ".$row['año_estreno'];
	echo "<br>";
	echo "<br>";
}


mysqli_close($db);
?>




</html>
</body>
