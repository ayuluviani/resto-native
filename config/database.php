<?php

class database{
	private $db = [
		'host' => 'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'resto'
	];

	public function data(){
		return $this->db;
	}
}
