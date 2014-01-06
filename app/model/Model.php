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
		$comfortFinal = $this->getComfort($comfort);
		$colorFinal = $this->getColor($color);
		$weatherFinal = $this->getWeather($weather);
		$priceFinal = $this->getPrice($price);

		
		$id = $this->findAverage($comfortFinal, $colorFinal, $weatherFinal, $priceFinal);
		// $id = $colorFinal;
		return $id;

	}

	public function findAverage($comfortFinal, $colorFinal, $weatherFinal, $priceFinal){
		if ($comfortFinal && $colorFinal && $weatherFinal && $priceFinal){
			$heel = $comfortFinal;
			$color = $colorFinal;
			$price = $priceFinal;

			$shoes2 = $this->getShoes()->where("season",$weatherFinal)->fetchPairs('color');
			$shoesArray2 = array();

			foreach($shoes2 as $s){
				$shoesArray2[] = $s->color; 
			};

			$j=0;

			if(!in_array($color, $shoesArray2, true)){
				while (!in_array($color, $shoesArray2, true)){
					$j++;
					if(in_array(($color + $j), $shoesArray2,true)){
						$color = $color + $j;
					} 
					elseif (in_array(($color - $j), $shoesArray2,true)){
						$color = $color - $j;
					}
				}
			}

			$shoes = $this->getShoes()->where("season", $weatherFinal)->where("color",$color)->fetchPairs('heel');
			$shoesArray = array();

			foreach($shoes as $s){
				$shoesArray[] = $s->heel; 
			};

			$i = 0;
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


			$shoes3 = $this->getShoes()
						->where("season", $weatherFinal)
						->where("heel", $heel)
						->where("color", $color)
						->fetchPairs('price');
			$shoesArray3 = array();

			foreach($shoes3 as $s){
				$shoesArray3[] = $s->price; 
			};
			$k=0;

			if(!in_array($price, $shoesArray3, true)){
			while (!in_array($price, $shoesArray3, true)){
				$k = $k + 10;
				if(in_array(($price + $k), $shoesArray3, true)){
					$price = $price + $k;
				} 
				elseif (in_array(($price - $k), $shoesArray3, true)){
					$price = $price - $k;
					}
				}
			}
	
		$id = $this->getShoes()
				->where("season", $weatherFinal)
				->where("heel", $heel)
				->where("color",$color)
				->where("price",$price)
				->order('RAND()')
				->fetch();
		return $id->id;

		}
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

	public function getColor($color){
		$shoes = $this->getShoes()->fetchPairs('color');
		$shoesArray = array();

		foreach($shoes as $s){
			$shoesArray[] = $s->color; 
		};

		$i=0;
		$color = (int) $color;

		if(!in_array($color, $shoesArray, true)){
			while (!in_array($color, $shoesArray, true)){
				$i++;
				if(in_array(($color + $i), $shoesArray,true)){
					$color = $color + $i;
				} 
				elseif (in_array(($color - $i), $shoesArray,true)){
					$color = $color - $i;
				}
			}
		}
	
		return $color;

	}

	public function getWeather($weather){
		if ($weather <= 4) { $weather = 4; }
		if ($weather > 4 && $weather <=7 ) { $weather = 7;}
		if ($weather > 7 && $weather <= 10) {$weather = 10;}
		return $weather;
	
	}

	public function getPrice($price){
		$price = round((160/9 * $price + 200/9), -1);
		$shoes = $this->getShoes()->fetchPairs('price');
		$shoesArray = array();

		foreach($shoes as $s){
			$shoesArray[] = $s->price; 
		};

		$i=0;
		$price = (int) $price;

		if(!in_array($price, $shoesArray, true)){
			while (!in_array($price, $shoesArray, true)){
				$i = $i + 10;
				if(in_array(($price + $i), $shoesArray, true)){
					$price = $price + $i;
				} 
				elseif (in_array(($price - $i), $shoesArray, true)){
					$price = $price - $i;
				}
			}
		}
	
		return $price;
	}

	public function getFormal($formal){

	}


}