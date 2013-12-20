<?php

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

	public function renderDefault()
	{
		$this->template->anyVariable = 'any value';
	}

	public function handleGetShoes() {
		$get = $this->httpRequest;
		if ($get->isMethod('get')) {
			$slider = $get->getQuery("name");
			$value = $get->getQuery("value");


		}

		if($slider && $value) {
			// $this->payload->correct = $this->model->answerQuestion($questionID, $answer);
			$this->payload->image = 1;
		} else {
			$this->payload->message = 'Failure';
		}

		if ($this->isAjax()) {

		}
		$this->terminate();

	}

}
