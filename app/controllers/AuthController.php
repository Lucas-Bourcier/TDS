<?php
namespace controllers;
 /**
  * Controller AuthController
  */
class AuthController extends \controllers\ControllerBase{

	public function index(){
		$this->loadView("AuthController/index.html");
	}
}
