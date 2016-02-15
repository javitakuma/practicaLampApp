<table border="1">
<tr><th>Nombre</th><th>Num.Aficiones</th></tr>

<?php foreach($listado as $persona):?>
	<tr><td><?=$persona->nombre;?></td><td><?=$persona->nafi;?></td></tr>
<?php endforeach;?>

</table>