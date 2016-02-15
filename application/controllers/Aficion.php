<?php
class Aficion extends CI_Controller {
	function crearAficion() {
		enmarcar ( $this, 'crearAficion' );
	}
	
	public function comprobarAficion($nombre) {
		$this->load->model ( 'aficion_model', 'aficion', true );
		$existe = $this->aficion->comprobarAficion ( $nombre );
		return $existe;
	}
	public function crearAficionPost() {
		$this->load->model ( 'aficion_model', 'aficion', true );
		$nombre = isset ( $_POST ['nombre'] ) ? $_POST ['nombre'] : null;
		
		$insertado ['respuesta'] = false;
		$existe = $this->comprobarAficion ( $nombre );
		
		if (! $existe) {
			$insertRealizado = $this->aficion->insertarAficion ( $nombre );
			
			if ($insertRealizado) {
				$insertado ['respuesta'] = true;
			}
			$this->load->view ( 'mensajeConfirmacion', $insertado );
		} else {
			$this->load->view ( 'mensajeConfirmacion', $insertado );
		}
	}
}
?>