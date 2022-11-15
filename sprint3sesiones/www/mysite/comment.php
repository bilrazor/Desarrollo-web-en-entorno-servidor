<?php
$db = mysqli_connect'172.16.0.2', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
<body>
<?php
 session_start();
$user_id_a_insertar = 'NULL';
if (!empty($_SESSION['user_id'])) {
$user_id_a_insertar = $_SESSION['user_id'];
}
$pelicula_id = $_POST['pelicula_id'];
$comentario = $_POST['new_comment'];
$query = "INSERT INTO tComentarios(comentario, pelicula_id, usuario_id, fecha)
 VALUES('".$comentario."',".$pelicula_id.",".$user_id_a_insertar.",now())";
mysqli_query($db, $query) or die('Error');
echo "<p>Nuevo comentario</p> " ;
echo mysqli_insert_id($db);
echo "<p> añadido</p>";
echo "<a href='/detail.php?pelicula_id=".$pelicula_id."'>Volver</a>";
mysqli_close($db);
?>

</body>
</html>
