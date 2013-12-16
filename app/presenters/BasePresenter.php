<?php

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
	protected $model;
	protected $httpRequest;

	public function startup() {
		parent::startup();
		$this->model = $this->getService('model');
		$this->httpRequest = $this->getService('httpRequest');
	 }
}
