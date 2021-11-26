<?php
namespace controllers\crud\files;

use Ubiquity\controllers\crud\CRUDFiles;
 /**
  * Class CrudGroupsControllerFiles
  */
class CrudGroupsControllerFiles extends CRUDFiles{
	public function getViewForm(){
		return "CrudGroupsController/form.html";
	}

	public function getViewDisplay(){
		return "CrudGroupsController/display.html";
	}

	public function getViewIndex(){
		return "CrudGroupsController/index.html";
	}


}
