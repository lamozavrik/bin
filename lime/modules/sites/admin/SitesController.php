<?php

namespace app\lime\modules\sites\admin;

use app\lime\modules\sites\admin\models\sitesForm;
use yii\web\Controller;

class SitesController extends Controller{

	public function actionIndex(){
		return $this->render('@themepath/sites/index');
	}

	public function actionCreate(){
		$model = new sitesForm();
		return $this->render('@themepath/sites/add-form', ['model' => $model]);
	}

}