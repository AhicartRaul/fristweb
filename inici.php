<?php
	echo "Hola mòn";
	// mostrem la informació continguda
	echo "<hr>";
	// mostrem la IP que recuperem de l'array $_SERVER[]
	echo "Accés des de l'adreça IP: <B>".$_SERVER['REMOTE_ADDR']."</B>";
	echo "<BR>Script que s'està executant: <B>".$_SERVER['PHP_SELF']."</B>";
 ?>