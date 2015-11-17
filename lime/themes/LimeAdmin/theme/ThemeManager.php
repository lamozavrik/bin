<?php

namespace app\lime\themes\LimeAdmin\theme;

use yii\web\AssetBundle;

class ThemeManager extends AssetBundle{
    public $basePath = '@themepath';
    public $baseUrl = '@themeweb';

    public $css = [
        'css/style.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'app\lime\core\assets\FaAsset'
    ];
}