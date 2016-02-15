<?php
include ('../ej01/util.php');
session_start ();
$destruir=isset ( $_REQUEST ['destruirSesion'] ) ? $_REQUEST ['destruirSesion'] : null;
if($destruir!=null){

	session_unset();
}
$botonPulsado=isset ( $_REQUEST ['conjugar'] ) ? $_REQUEST ['conjugar'] : null;
$verboNuevo = isset ( $_REQUEST ['verbo'] ) ? $_REQUEST ['verbo'] : null;
if($verboNuevo!=null && $verboNuevo!=''){
	if(isset ( $_SESSION ['verbos'] )){
		$_SESSION ['verbos'].=$verboNuevo.'#';
	}else{
		$_SESSION ['verbos']=$verboNuevo.'#';
	}

}
$verbosIntroducidos = (isset ( $_SESSION ['verbos'] )) ? $_SESSION ['verbos'] : null;
if($botonPulsado=='Conjugar'){
		header("Location: listar.php");
		exit();
}

echo <<<FORM
	<h2>Introduce un verbo</h2>
	<form action="formulario.php" method="POST">
	<input type="text" name="verbo"/><br>
	<input type="submit" name="masVerbos" value="Mas verbos"/>
	<input type="submit" name="conjugar" value="Conjugar"/>
	</form>
FORM;
?>