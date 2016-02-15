<?php
class Aficion_model extends CI_Model {
	public $idaf;
	public $nombre;

	public function insertarAficion($nombre) {
		$this->nombre=$nombre;
	
		$sol=true;
	
		$this->load->database ();
		if(!$this->db->insert ( 'aficiones', $this )){
			$error = $this->db->error();
			var_dump($error);
			$sol=false;
		}

		return $sol;
	}
	public function getAficiones() {
		$datos = $this->db->get ('aficiones')->result ();
		return $datos;
	}
	
	public function comprobarAficion($nombre) {
		$existe=false;
		$this->nombre=$nombre;
		$datos = $this->db->query("select * from aficiones where nombre=\"$this->nombre\" ");
		if ($datos->num_rows() > 0)
		{
			$existe=true;
		}
		return $existe;
	}

}
?>