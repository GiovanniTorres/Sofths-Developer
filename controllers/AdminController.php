<?php
class AdminController {
    private $adminmodel ;

	public function __construct () {
		$this->adminmodel = new AdminModel () ;
	}

	public function getAdmin ($admin = "") {
		return $this->adminmodel->get ($admin = "") ;
	}

	public function setAdmin ($admin_data) {
		return $this->adminmodel->set ($admin_data) ;
	}

	public function __destruct () {
        unset ($this->route) ;
	}
}