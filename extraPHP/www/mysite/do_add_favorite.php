<?php
	$db = mysqli_connect('localhost','root','1234','mysitedb') or die ('fail');
?>
<html>
<body>

<?php

session_start();
$id_usuario=$_SESSION['user_id'];
$id_pelicula=$_POST['pelicula_id'];


$query = "INSERT INTO tFavoritos (idpelicula,idusuario) VALUES ('".$id_pelicula."',".$id_usuario.")";

mysqli_query($db,$query) or die ('Error');
echo "favorito añadido";
mysqli_close($db);

?>
<br>
<a href="/main.php">Volver</a>
</body>
</html>
