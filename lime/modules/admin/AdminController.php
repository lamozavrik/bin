<?php

namespace app\lime\modules\admin;

use yii\web\Controller;

class AdminController extends Controller
{
    public function actionIndex()
    {
    	$route = trim(\Lime::get('request')->get('module'), '/');
    	print_r(\Lime::get('authManager'));
    	return $this->exec($route);
    }

    protected function exec($route = null){
    	if(!$route)
    		return $this->render('index');

    	$parts = explode('/', $route);
    	$module = $parts[0] . '/admin';
    	$module .= '/' . implode('/', $parts);

    	return \Lime::run($module);

    }

}
