<?php
namespace controllers\crud\datas;

use Ubiquity\controllers\crud\CRUDDatas;
 /**
  * Class CrudGroupsControllerDatas
  */
class CrudGroupsControllerDatas extends CRUDDatas{

    public function getFieldNames($model)
    {
        return  ['name', 'email','aliases'];
    }
}
