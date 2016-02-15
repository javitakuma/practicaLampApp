<?php
class Persona extends CI_Controller {
	function listarPersona(){
		$this->load->model ( 'afi_per_model', 'afiPer', true );
		$datos['listado'] = $this->afiPer->getListadoPersonas ();
		
		enmarcar ( $this, 'listarPersonas',$datos);
	}
	function crearPersona() {
		$this->load->model ( 'aficion_model', 'aficion', true );
		$datos['aficiones'] = $this->aficion->getAficiones ();
		enmarcar ( $this, 'crearPersona',$datos);
	}
	
	
	function crearPersonaPost() {
			
		$nombre = isset ( $_POST ['nombre'] ) ? $_POST ['nombre'] : null;
		$aficiones=isset ( $_POST ['idaf'] ) ? $_POST ['idaf'] : null;
		
		$this->load->model ( 'persona_model', 'persona', true );
		$insertRealizado = $this->persona->insertarPersona ( $nombre );
			
		if ($aficiones!=null){
			$this->load->model ( 'afi_per_model', 'afiPer', true );
			$insertRealizado = $this->afiPer->insertarPersonayAficion ( $aficiones );
		}		
		
		if ($insertRealizado) {
			$insert ['respuesta'] = true;
		} else {
			$insert ['respuesta'] = false;
		}
		$this->load->view ( 'mensajeConfirmacion', $insert );
	}
	
}
?>