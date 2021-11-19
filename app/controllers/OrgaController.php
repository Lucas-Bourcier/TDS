<?php
namespace controllers;

 use Ajax\JsUtils;
 use models\Organization;
 use Ubiquity\attributes\items\router\Get;
 use Ubiquity\attributes\items\router\Post;
 use Ubiquity\attributes\items\router\Route;
 use Ubiquity\controllers\Router;
 use Ubiquity\orm\DAO;
 use Ubiquity\orm\repositories\ViewRepository;
 use Ubiquity\utils\http\URequest;


 /**
  * Controller OrgaController
  * @property JsUtils $jquery
  */

class OrgaController extends \controllers\ControllerBase{

    private ViewRepository $repo;

    public function initialize() {
        parent::initialize();
        $this->repo??=new ViewRepository($this,Organization::class);
    }

    #[Route(path: "/orgas",name: "orga.index")]
	public function index(){
        $this->repo->all();
        $this->loadView("OrgaController/index.html");
	}

	#[Get(path: "orgas/update/{id}",name: "orgas.update")]
	public function updateForm($id){
		$orga=$this->repo->byId($id,false);
        $df=$this->jquery->semantic()->dataForm('frm-orga',$orga);
        $df->setActionTarget(Router::path('orgas.submit'),'');
        $df->setProperty('method','post');
        $df->setFields(['id','name','submit']);
        $df->setCaptions(['','nom','Modifier']);
        $df->fieldAsHidden('id');
        $df->fieldAsSubmit('submit','green fluid');
        $this->jquery->renderView('OrgaController/update.html');
	}
    #[Post('orgas/update',name:'orgas.submit')]
    public function update(){
        $orga=$this->repo->byId(Organization::class,URequest::post('id'));
        if($orga){
            URequest::setValuesToObject($orga);
            DAO::save($orga);
        }
        $this->index();
    }

	#[Get(path: "/orgas/{id}",name: "orgas.getOne")]
	public function getOne($id){

        $orga=$this->repo->byId($id,false);
        $df=$this->jquery->semantic()->dataForm('frm-getOne',$orga);
        $df->setActionTarget(Router::path('orgas.getOne'),'');
        $df->setProperty('method','get');
        $df->setFields('id','name','groups','user');
        $df->setCaptions('','nom','Groupes','Utilisateurs');
        $this->jquery->renderView('OrgaController/getOne.html');
	}

}
