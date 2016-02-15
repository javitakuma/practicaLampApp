<?php

$conjugacion;
$conjugaciones=['1'=>['o','as','a','amos','ais','an'],'2'=>['o','es','e','emos','eis','en'],'3'=>['o','es','e','imos','is','en']];

function conjugar($verbo) {
	global $conjugaciones;
	$conjugacion;
	$raiz = substr ( $verbo, 0, - 2 );
	$respuesta="";
	$conjugacion=conjugaciones($verbo);
	$respuesta='<select name="verboConjugaciones">';
	for($i=0;$i<6;$i++){
		$respuesta.= "<option value=\"$i\">{$raiz}{$conjugaciones[$conjugacion][$i]}</option>";
	}
	$respuesta.='</select>';
	
	return $respuesta;
}

function conjugaciones($verbo){
	$conjugacion="";
	$terminacion = substr ( $verbo, - 2, 2 );
	if ($terminacion == 'ar') {
		$conjugacion = '1';
	} elseif ($terminacion == 'er') {
		$conjugacion = '2';
	} elseif ($terminacion == 'ir') {
		$conjugacion = '3';
	}
	
	return $conjugacion;
}

?>