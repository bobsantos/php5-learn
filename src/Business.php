<?php

namespace ArtikuloUno;

class Business {
	private $staff;

	public function __construct(Staff $staff){
		$this->staff = $staff;
	}

	public function hire(Person $person){
		$this->staff->add($person);
	}

	public function getStaffMembers(){
		return $this->staff->members();
	}

}

?>