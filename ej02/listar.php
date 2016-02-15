<?php
include ('../ej01/util.php');
session_start ();
$verbosIntroducidos = (isset ( $_SESSION ['verbos'] )) ? $_SESSION ['verbos'] : null;
$verbos=explode("#", $verbosIntroducidos);

echo "<h2>Lista de verbos</h2>";
echo"<table border=\"1\"><tr><th>Infinitivo</th><th>Conjugacion</th><th>Presente de indicativo</th></tr>";
	for($i=0;$i<sizeof($verbos)-1;$i++){
		echo "<tr><td>$verbos[$i]</td><td>".conjugaciones($verbos[$i])."</td><td>".conjugar($verbos[$i])."</td></tr>";
	}
echo"</table>";

echo <<<FORM
<form action="formulario.php">
	<input type="submit" name="destruirSesion" value="Volver a introducir verbos" />
</form>
FORM;
?>