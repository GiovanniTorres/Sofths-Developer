<?php
class ClienteModel extends Connection {
	public function set ($cliente_data = array ()) {}
	public function get ($cliente = "") {
		$this->query = ($cliente != "") ? "SELECT * FROM cliente AS cl
										   INNER JOIN administrador AS ad
										   ON cl.adminDNI = ad.adminDNI
										   WHERE clienteDNI = '$cliente'" 
										: "SELECT * FROM cliente AS cl
										   INNER JOIN administrador AS ad
										   ON cl.adminDNI = ad.adminDNI" ;
		$this->get_query () ;
		foreach ($this->rows as $key => $value) {
			$data[$key] = $value ;
		}
		return $data ;
	}
	public function del ($cliente = "") {}
}


























































/*require "Connection.php" ;
class ClienteModel extends Connection {
	public function set ($cliente_data = array()) {}

	public function get ($cliente = "") {
        $this->query = ($cliente != "")  ? "SELECT * FROM cliente AS cl 
                                            JOIN administrador As ad
                                            ON cl.adminDNI = ad.adminDNI 
											WHERE clienteDNI = '$cliente'" 
										 : "SELECT * FROM cliente AS cl 
                                            JOIN administrador As ad
                                            ON cl.adminDNI = ad.adminDNI " ;
		$this->get_query () ;

		foreach ($this->rows as $key => $value) {
			$data[$key] = $value ;
		}
		return $data ;
	}		

	public function del () {}
}*/