<?php

namespace app\lime\core;

use yii\base\BootstrapInterface;
use yii\base\Application;

class Bootstrap implements BootstrapInterface{

    public function bootstrap($app){
        $app->on(Application::EVENT_BEFORE_REQUEST, function(){
            $lime = new \Lime();
            \Yii::$app->set('lime', $lime);
        });
    }

}