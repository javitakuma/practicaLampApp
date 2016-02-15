<html>
<head>
<script>

function mostrarSelect()
{
		var verbo=document.getElementById('verbo').value;
		var xmlhttp=new XMLHttpRequest();
		xmlhttp.open('GET', 'ajaxConjugar.php?verbo='+verbo, true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function() {
			if(xmlhttp.readyState==4 && xmlhttp.status==200) {
				var respuesta=xmlhttp.responseText;
				document.getElementById('resultado').innerHTML=respuesta;
			}
		}
}
function mostrarConjugacion()
{
		var verbo=document.getElementById('verbo').value;
		var xmlhttp=new XMLHttpRequest();
		xmlhttp.open('GET', 'ajaxConjugacion.php?verbo='+verbo, true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function() {
			if(xmlhttp.readyState==4 && xmlhttp.status==200) {
				var respuesta=xmlhttp.responseText;
				document.getElementById('resultado').innerHTML=respuesta;
			}
		}
}

</script>
</head>
<body>
	<h2>Introduce un verbo</h2>
	<form method="GET">
		<input type="text" name="verbo" /><br> 
		<input type="button" name="conjugacion" value="Conjugacion" onClick="mostrarConjugacion()" /> 
		<input type="button" name="conjugar" value="Conjugar" onClick="mostrarSelect()" />
	</form>
	<div id="resultado"></div>
	...y observa el resultado
</body>
</html>


