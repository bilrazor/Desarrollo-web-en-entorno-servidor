<html>
	<body>
		<h1>Jubilacion </h1>
		<?php
			function edad_en_10_años($edad) {
				return $edad + 10;
			}

		if ($_GET["edad"] > 58 ) {
			echo "En 10 años tendras edad de jubilacion";
		} else {
		echo "!disfruta de tu tiempo !";
		}
		?>
	</body>
</html>
