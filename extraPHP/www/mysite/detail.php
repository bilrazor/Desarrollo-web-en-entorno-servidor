<?php
	$db = mysqli_connect ('localhost','root','1234','mysitedb') or die ('Fail');
?>
<html>
<style>
body{	
	background-image: url(https://www.nicepng.com/png/detail/432-4327221_pelicula-cine-png-peliculas-de-cine.png);
	font-weight:900;
}
th{
color: red;
background-color:white;
}
li{
	background-color:white;
	width:50%;
}
</style>
	<body>
<p align="right"><a href="/logout.php">logout</a></p>
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
	$query2 ='SELECT * FROM tComentarios c join tUsuarios u on u.id=c.usuario_id WHERE c.pelicula_id='.$pelicula_id;
	$result2 = mysqli_query($db, $query2) or die ('Query error');
	while ($row = mysqli_fetch_array($result2)) {
		echo '<li>'.$row['nombre'].' : '.$row['comentario'].' '.$row['fecha'];'</li>';		
}
mysqli_close($db);
?>
</ul>
<p>Deja un nuevo comentario:</p>
<form action="/comment.php" method="post">
<textarea rows="4" cols="50" name="new_comment"></textarea><br>
<input type="hidden" name="pelicula_id" value="<?php echo $pelicula_id; ?>">
<input type="submit" value="Comentar">
</form>


</body>
</html>
