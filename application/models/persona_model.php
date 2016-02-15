<?php
class Persona_model extends CI_Model {
	public $idper;
	public $nombre;

	public function insertarPersona($nombre) {
		$this->nombre=$nombre;
	
		$sol=true;
	
		$this->load->database ();
		if(!$this->db->insert ( 'personas', $this )){
			$error = $this->db->error();
			var_dump($error);
			$sol=false;
		}

		return $sol;
	}
	
	public function insertarPersonayAficion($nombre,$aficiones) {
		$this->nombre=$nombre;
	
		$sol=true;
	
		$this->load->database ();
		if(!$this->db->insert ( 'personas', $this )){
			$error = $this->db->error();
			var_dump($error);
			$sol=false;
		}
	
		return $sol;
	}
	
	public function getPersonas() {
		$datos = $this->db->get ('personas')->result ();
		return $datos;
	}
	
}
?>