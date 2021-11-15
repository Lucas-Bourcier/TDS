<?php
namespace controllers;
use Ajax\JsUtils;
use Ubiquity\attributes\items\router\Post;
use Ubiquity\attributes\items\router\Get;
use Ubiquity\attributes\items\router\Route;
 /**
  * Controller TodosController
  * @Property JsUtils $jquery
  */
class TodosController extends \controllers\ControllerBase{

	public function index(){
		$this->loadView("TodosController/index.html");
	}

	#[Post(path: "todos/add/",name: "todos.add")]
	public function addElement(){
        $this->jquery->PostFormOnClick('button',Router::path('todos.addElement'),'#addElement','_element',['hasLoader'=>'internal']);
        $this->jquery->renderView('todosController/addElement.html');
		$this->loadView('todosController/addElement.html');

	}


	#[Get(path: "todos/delete/{index}",name: "todos.delete")]
	public function deleteElement($index){
		
		$this->loadView('TodosController/deleteElement.html');

	}


	#[Get(path: "todos/edit/{index}",name: "todos.edit")]
	public function editElement($index){
		
		$this->loadView('TodosController/editElement.html');

	}


	#[Get(path: "Todos/loadList/{uniqid}",name: "todos.loadList")]
	public function loadList($uniqid){
		
		$this->loadView('TodosController/loadList.html');

	}


	#[Post(path: "Todos/loadList/",name: "todos.loadListPost")]
	public function loadListFromForm(){
		
		$this->loadView('TodosController/loadListFromForm.html');

	}


	#[Get(path: "todos/newList/{force}",name: "todos.new")]
	public function newList($force){
		
		$this->loadView('TodosController/newList.html');

	}


	#[Route(path: "todos./{url}",name: "todosControler-p404")]
	public function p404($url){
		
		$this->loadView('TodosController/p404.html');

	}


	#[Get(path: "todos/saveList",name: "todos.save")]
	public function saveList(){
		
		$this->loadView('TodosController/saveList.html');

	}

}
