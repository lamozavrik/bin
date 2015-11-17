<?php
//namespace app\lime\core;

use yii\db\Query;
use app\lime\core\helpers\ArrayHelper;
use \app\lime\core\Config;

class Lime{

    protected static $instance = null;
    protected $config;
    protected $modules;
    protected $curModule;

    public static function i(){
        if(!self::$instance)
            self::$instance = new self();

        return self::$instance;
    }

    public static function run($route){
        return \Yii::$app->runAction($route, $params = []);
    }

    public static function get($key){
        return \Yii::$app->{$key};
    }

    public function __construct(){
        $db = new Query();
//        echo serialize([
//            'theme' => 'LimeAdmin',
//            'defaultRoute' => 'admin'
//        ]);

        $config = ArrayHelper::unserialize ($db->from('settings')->one()['settings']);
        $this->config = new Config($config);

        $modules = $db->from('modules')->all();
        foreach($modules as $module) {
            \Yii::$app->setModule($module['name'], [
                'class' => $module['class']
            ]);
        }

        \Yii::$app->defaultRoute = $this->config->get('defaultRoute');
        \Yii::setAlias('@themepath', '@app/lime/themes/' . $this->config->get('theme'));
        \Yii::setAlias('@themeweb', \Yii::$app->request->getBaseUrl() . '/lime/themes/' . $this->config->get('theme'));
        \Yii::$app->setLayoutPath('@themepath');

        $theme = new \yii\base\Theme();
        $theme->setBasePath('@themepath');
        $theme->setBaseUrl('@themeweb');

        $view = new \yii\web\View();
        $view->theme = $theme;

        \Yii::$app->set('view', $view);
    }

    public function __get($key){
        return $this->config->get($key);
    }

    public function __set($key, $val){
        return $this->config->set($key, $val);
    }

    public function save(){
        $config = ArrayHelper::serialize($this->config->config());
        \Yii::$app->db->createCommand("UPDATE settings SET settings = :settings")->bindValue(':settings', $config)->execute();
    }

    public function module($module = null){
        if($module)
            $this->curModule = $module;

        return $this->curModule;
    }

}