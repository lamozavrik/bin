<?php

namespace app\lime\core;

use yii\base\Module;

class BaseModule extends Module{

    public function init()
    {
        parent::init();
        $this->controllerNamespace = 'app\lime\modules\\' . $this->id;
        $this->defaultRoute = $this->id;
        $this->setViewPath('@themepath');
    }

}