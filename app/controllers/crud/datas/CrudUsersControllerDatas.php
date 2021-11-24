<?php
namespace controllers\crud\datas;

use Ubiquity\controllers\crud\CRUDDatas;
 /**
  * Class CrudUsersControllerDatas
  */
class CrudUsersControllerDatas extends CRUDDatas{
    public function getFieldNames($model)
    {
        return['firstname','lastname','email','suspended'];
    }

    public function getFormFieldNames($model, $instance)
    {
        return;
    }


}
