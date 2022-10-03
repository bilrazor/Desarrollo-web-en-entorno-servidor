<html>
	<body>
		<h1>jubilacion</h1>
		<?php
		
		function edad_en_17_años($edad) {
			return $edad + 17;
		}

		function mensaje ($age) {
			if (edad_en_17_años($age) > 65) {
			return "En 17 años tendras edad de jubilacion";
		} else {
		  	return "!Disfruta de tu tiempo!";
		}
           }
		?>
		<table>
		<tr>
			<th>edad</th>
			<th>Info</th>
		</tr>

		<?php
			$lista = array(44,45,46,47,48,49,50,51,52,53) ;
			foreach ($lista as $valor) {
			echo "<tr>";
			echo "<td>".$valor."</td>";
			echo "<td>".mensaje ($valor). "</td>";
			echo "</tr>";
		}
		?>
		</table>
	</body>
</html>
