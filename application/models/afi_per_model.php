<?php
class afi_per_model extends CI_Model {
	public $idper;
	public $idaf;
	public function insertarPersonayAficion($aficiones) {
		$this->idper = $this->db->insert_id ();
		
		foreach ( $aficiones as $idaf ) {
			$this->idaf = $idaf;
			$sol = true;
			
			if (! $this->db->insert ( 'personas_aficiones', $this )) {
				$error = $this->db->error ();
				var_dump ( $error );
				$sol = false;
			}
		}
		
		return $sol;
	}
	public function getListadoPersonas() {
		$datos = $this->db->query ( 'SELECT p.nombre, pa.idper, count(*) nafi FROM personas p, personas_aficiones pa where p.idper=pa.idper group by pa.idper
				' )->result ();
		return $datos;
	}
	public function getTodo() {
		$datos = $this->db->get ( 'personas_aficiones' )->result ();
		return $datos;
	}
}
?>