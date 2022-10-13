<?php
	$db = mysqli_connect ('localhost','root','1234','mysitedb') or die ('Fail');
?>
<html>
	<body>
	<?php
	if (!isset($_GET['pelicula_id'])) {
		die('No se  ha especificado una pelicula');
}
$pelicula_id = $_GET['pelicula_id'];
$query =  'select * from tPeliculas where id='.$pelicula_id;
$result = mysqli_query($db, $query) or die('Query error');
$only_row = mysqli_fetch_array($result);
echo '<table border="1" align="center">';
echo '<caption>ID SELECCIONADO</caption>';
echo  '<tr>';
echo '<th>'.$only_row['id'].'</th>';
echo '<th>'.$only_row['nombre'].'</th>';
echo '<th>'.$only_row['genero'].'</th>';
echo '<th>';
?> <img src="<?php echo $only_row['url_imagen']?>" width="100" hight="100"/>;<?php
echo '</th>';
echo '</tr>';
echo '</table>';

?>
<h3>Comentarios:</h3>
<ul>
	<?php
	$query2 ='select * from tComentarios where id='.$pelicula_id;
	$result2 = mysqli_query($db, $query2) or die ('Query error');
	while ($row = mysqli_fetch_array($result2)) {
		echo '<li>'.$row['comentario'].'</li>';
}

mysqli_close($db);
?>
</ul>
</body>
</html>
