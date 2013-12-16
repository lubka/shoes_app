<?php

/**
 *
 */
class Model extends Nette\Object {

	/** @var Nette\Database\Connection */
	public $db;
	/**
	 * @param Nette\Database\Connection $database
	 */

	private $session_id;

	public function __construct(Nette\Database\Connection $database) {
		$this->db = $database;
	}

	public function getShoes(){
		return $this->db->table('shoes');
	}


}