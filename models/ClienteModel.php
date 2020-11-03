<?php
class ClienteModel extends Connection {
	public function set ($cliente_data = array ()) {
		foreach ($cliente_data as $key => $value) {
			$$key = $value ;
		}
		$this->query = "REPLACE INTO cliente (clienteDNI, adminDNI, cl_nombre, cl_apellidos, cl_usuario, cl_password, cl_edad, cl_rfc, cl_telefono, cl_mail, cl_mensaje, cl_direccion, cl_cp, razon_social, sello_digital) 
						VALUES ('NULL', 1, '$cl_nombre', '$cl_apellidos', '$cl_usuario', '$cl_password', 'NULL', 'NULL', 'NULL', '$cl_mail', '$cl_mensaje', 'NULL', 'NULL', 'NULL', 'NULL')" ;
		$this->set_query () ;
	}

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