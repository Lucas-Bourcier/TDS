<?php
namespace controllers;
use Ajax\JsUtils;
use Ubiquity\attributes\items\router\Post;
use Ubiquity\attributes\items\router\Get;
use Ubiquity\attributes\items\router\Route;
use Ubiquity\controllers\Router;
use Ubiquity\utils\http\URequest;
use Ubiquity\utils\http\USession;

/**
  * Controller TodosController
  * @Property JsUtils $jquery
  */
#[Route('/todos/')]
class TodosController extends \controllers\ControllerBase{

    const CACHE_KEY = 'datas/lists/';
    const EMPTY_LIST_ID='not saved';
    const LIST_SESSION_KEY='list';
    const ACTIVE_LIST_SESSION_KEY='active-list';

    #[Route(path: '#/_default',name: "home")]
	public function index(){

        $list=USession::get('list',[]);
        $list=USession::set(self::ACTIVE_LIST_SESSION_KEY,[]);
        if(USession::exists(self::ACTIVE_LIST_SESSION_KEY)){
        }

        if($list!=null){
            echo "Cette liste n'est pas vide";
        }else{
            echo "Cette liste est vide";
        }

        $this->jquery->getHref('a','',['hasLoader'=>false,'historize'=>false]);
		$this->loadView("TodosController/index.html");
     //   $this->renderView('todosController/index.html', ['list'=>$list]);
	}

	#[Get(path: "add",name: "todos.add")]
	public function addElement(){

        $this->jquery->postFormOnClick('button',Router::path('todos.loadListPost'),'addElement','._content',['hasLoader'=>'internal']);
        $this->jquery->renderView('todosController/addElement.html');
	}


	#[Get(path: "delete/{index}",name: "todos.delete")]
	public function deleteElement($index){
		
		$this->loadView('TodosController/deleteElement.html');

	}


	#[Get(path: "edit/{index}",name: "todos.edit")]
	public function editElement($index){
		
		$this->loadView('TodosController/editElement.html');

	}


	#[Get(path: "loadList/{uniqid}",name: "todos.loadList")]
	public function loadList($uniqid){
		
		$this->loadView('TodosController/loadList.html');

	}


	#[Post(path: "loadList/",name: "todos.loadListPost")]
	public function loadListFromForm(){
        $list=USession::addValueToArray('list', URequest::post('items'));
        echo "listes ajoutées";
	}


	#[Get(path: "newList/{force}",name: "todos.new")]
	public function newList($force=false){

		$this->loadView('TodosController/newList.html');

	}


	#[Route(path: "{url}",name: "todosController-p404")]
	public function p404($url){
		
		$this->loadView('TodosController/p404.html');

	}


	#[Get(path: "saveList",name: "todos.save")]
	public function saveList(){
		
		$this->loadView('TodosController/saveList.html');

	}


	#[Route(path: "formulaire",name: "todos.elementForm")]
	public function elementForm(){
		
		$this->loadView('TodosController/elementForm.html');

	}

}
