<?php
class UserController {
	private $usermodel ;

	public function __construct () {
		$this->usermodel = new UserModel () ;
	}

	public function getUser ($user = "") {
		return $this->usermodel->get ($user = "") ;
	}

	public function setUser ($user_data) {
		return $this->usermodel->set ($user_data) ;
	}

	public function __destruct () {
        unset ($this->route) ;
	}
}