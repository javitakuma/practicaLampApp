<script type="text/javascript">
var xmlhttp
function crearAficion()
{
	var parametros="nombre="+document.getElementById('nombre').value;
	xmlhttp=new XMLHttpRequest();
	xmlhttp.open("POST","<?= base_url('Aficion/crearAficionPost') ?>",true);
	xmlhttp.setRequestHeader('X-Requested-With','XMLHttpRequest');
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send(parametros);
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4&&xmlhttp.status==200)
		{
			generarAjax();
		}
	}
}

function generarAjax()
{
	document.getElementById("footer").innerHTML=xmlhttp.response;
}
</script>
</head>
<body>

<h2>Nueva afición</h2>

<form method="post">
Nombre: <input type="text" id="nombre" name="nombre"/><br/>
<input type="button" value="Guardar" onclick="crearAficion()"/>
</form>

<div id="footer" name="footer"></div>
<br/><br/>

