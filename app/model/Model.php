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

	public function getShoe($comfort, $color, $formal, $weather, $price){
		$image = $this->getComfort($comfort);
		$id = $this->getShoes()->where('heel', $image)->order('RAND()')->fetch();
		return $id->id;

	}

	public function getComfort($comfort){
		$heel = round((13/9 * $comfort - 4/9),0);
		$shoes = $this->getShoes()->fetchPairs('heel');
		$shoesArray = array();

		foreach($shoes as $s){
			$shoesArray[] = $s->heel; 
		};

		$i=0;
		$heel = (int) substr($heel,0,2);

		if(!in_array($heel, $shoesArray, true)){
			while (!in_array($heel, $shoesArray, true)){
				$i++;
				if(in_array(($heel + $i), $shoesArray,true)){
					$heel = $heel + $i;
				} 
				elseif (in_array(($heel - $i), $shoesArray,true)){
					$heel = $heel - $i;
				}
			}
		}
	
		return $heel;

	}


}