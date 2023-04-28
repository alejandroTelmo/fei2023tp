<?php

namespace app\modules\apiv1\models;



/**
 * Default controller for the `apiv1` module
 */
class Aula extends \app\models\Aula
{

        public function fields(){
                return ['id','descripcion','ubicacion'];
        }
    
}
