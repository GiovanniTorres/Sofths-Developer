<?php
require "Connection.php" ;
class ClienteModel extends Connection {
	public function set ($cliente_data = array()) {
		foreach ($cliente_data as $key => $value) {
			$$key = $value;
		}
		$this->query = "
		REPLACE INTO users (mail, name, user, password, telephone)
		VALUES ('$mail', '$name', '$user', '$password', '$telephone')";
		$this->set_query();
	}

	public function get ($cliente = "") {
        $this->query = ($cliente != "")  ? "SELECT * FROM cliente AS cl 
                                            JOIN administrador As ad
                                            ON cl.adminDNI = ad.adminDNI 
											WHERE clienteDNI = '$cliente'" 
										 : "SELECT * FROM cliente AS cl 
                                            JOIN administrador As ad
                                            ON cl.adminDNI = ad.adminDNI " ;
        //$this->query = ($cliente != "") ? "SELECT * FROM cliente WHERE clienteDNI = '$cliente'" : "SELECT * FROM cliente" ;
		$this->get_query () ;

		foreach ($this->rows as $key => $value) {
			$data[$key] = $value ;
		}
		return $data ;
	}		

	public function del () {}

	public function validate_user ($user, $password) {
		$this->query = "SELECT * FROM users WHERE user = '$user' AND password = '$password'" ;
		$this->get_query () ;
		$data = array () ;
		foreach ($this->rows as $key => $value) {
			$data[$key] = $value ;
		}
		return $data ;
	}	
}