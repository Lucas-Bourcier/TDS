<?php
namespace controllers;
use controllers\crud\datas\CrudGroupsControllerDatas;
use Ubiquity\controllers\crud\CRUDDatas;
use controllers\crud\viewers\CrudGroupsControllerViewer;
use Ubiquity\controllers\crud\viewers\ModelViewer;
use controllers\crud\events\CrudGroupsControllerEvents;
use Ubiquity\controllers\crud\CRUDEvents;
use controllers\crud\files\CrudGroupsControllerFiles;
use Ubiquity\controllers\crud\CRUDFiles;
use Ubiquity\attributes\items\router\Route;
use Ubiquity\utils\http\URequest;

#[Route(path: "/groups",inherited: true,automated: true)]
class CrudGroupsController extends \Ubiquity\controllers\crud\CRUDController
{

    public function __construct()
    {
        parent::__construct();
        \Ubiquity\orm\DAO::start();
        $this->model = 'models\\Group';
        $this->style = 'inverted';
    }

    public function _getBaseRoute()
    {
        return '/groups';
    }

    protected function getAdminData(): CRUDDatas
    {
        return new CrudGroupsControllerDatas($this);
    }

    protected function getModelViewer(): ModelViewer
    {
        return new CrudGroupsControllerViewer($this, $this->style);
    }

    protected function getEvents(): CRUDEvents
    {
        return new CrudGroupsControllerEvents($this);
    }

    protected function getFiles(): CRUDFiles
    {
        return new CrudGroupsControllerFiles();
    }
}