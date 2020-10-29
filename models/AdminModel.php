<?php
require "Connection.php" ;
class AdminModel extends Connection {
	public function set ($admin_data = array()) {

	}

	public function get ($admin = "") {
        $this->query = ($admin != "")  ? "SELECT * FROM administrador WHERE adminDNI = '$admin'" : "SELECT * FROM administrador" ;
        //$this->query = ($cliente != "") ? "SELECT * FROM cliente WHERE clienteDNI = '$cliente'" : "SELECT * FROM cliente" ;
		$this->get_query () ;

		foreach ($this->rows as $key => $value) {
			$data[$key] = $value ;
		}
		return $data ;
	}		

	public function del () {}
}