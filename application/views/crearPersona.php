<h2>Nueva persona</h2>
<fieldset>
<legend>Datos personales</legend>
<form action="<?= base_url('Persona/crearPersonaPost') ?>" name="personaForm" method="post">
Nombre: <input type="text" id="nombre" name="nombre"/><br/>
<fieldset>
<legend>Aficiones</legend>
<br/>
	<?php foreach($aficiones as $aficion):?>
		<input type="checkbox" name="idaf[]" id="idaf[]" value="<?=$aficion->idaf?>"/><?=$aficion->nombre?><br/>
	<?php endforeach;?>
<br/>
</fieldset>

<input type="submit" value="Guardar" />
</form>


</fieldset>

<div id="footer" name="footer"></div>
<br/><br/>

