<?php
$db = mysqli_connect('172.16.0.2', 'root', '1234', 'restauracion') or die('Fail');

$nombre_posted = $_POST['nombre'];
$password_posted = $_POST['contraseña'];

$query = "SELECT * FROM Usuarios WHERE ='".$nombre_posted."'";
$result = mysqli_query($db,$query) or die ('Query error');

if (mysqli_num_rows($result) > 0) {
    $only_row = mysqli_fetch_array($result);
}

if ($only_row[1] == $password_posted) {
    session_start();
}
$_SESSION['user_id'] = $only_row[0];
header('Location: main.php');
} else {
    echo '<p>Contraseña incorrecta :( </p>';
}
} else {
    echo 
    echo '<p>Usuario no encontrado con ese email:( </p>';
}
