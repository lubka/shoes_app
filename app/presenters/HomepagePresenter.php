<?php

/**
 * Homepage presenter.
 */

class HomepagePresenter extends BasePresenter
{
	public function renderDefault()
	{
		dump($this->model->getShoe(10,10,0,10,0));
		dump($this->model->getComfort(0));
	}

	public function handleGetShoes() {
		$get = $this->httpRequest;
		if ($get->isMethod('get')) {
			$comfort = $get->getQuery("comfort");
			$color = $get->getQuery("color");
			$formal = $get->getQuery("formal");
			$weather = $get->getQuery("weather");
			$price = $get->getQuery("price");
			$value = $get->getQuery("value");
			$slider = $get->getQuery("name");
			$$slider = $value;

		}

		if($slider && $value) {
			$this->payload->image = $this->model->getShoe($comfort, $color, $formal, $weather, $price);
		} else {
			$this->payload->message = 'Failure';
		}

		if ($this->isAjax()) {

		}
		$this->terminate();

	}

}
