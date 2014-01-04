<?php

/**
 * Homepage presenter.
 */

class HomepagePresenter extends BasePresenter
{
	/** @persistent */
    public $comfort;
    /** @persistent */
    public $color;
    /** @persistent */
    public $formal;
    /** @persistent */
    public $weather;
    /** @persistent */
    public $price;

	public function renderDefault()
	{
		$this->comfort = 0;
		$this->color = 0;
		$this->formal = 0;
		$this->weather = 0;
		$this->price = 0;
		$this->model->getComfort(4);
		// dump($this->model->getComfort(4));
	}

	public function handleGetShoes() {
		$get = $this->httpRequest;
		if ($get->isMethod('get')) {
			$slider = $get->getQuery("name");
			$value = $get->getQuery("value");
			$this->$slider = $value;


		}

		if($slider && $value) {
			$this->payload->image = $this->model->getShoe($this->comfort, $this->color, $this->formal, $this->weather, $this->price);
		} else {
			$this->payload->message = 'Failure';
		}

		if ($this->isAjax()) {

		}
		$this->terminate();

	}

}
