<?php
namespace app\lime\core\helpers;

class ArrayHelper extends \yii\helpers\ArrayHelper{

    public static function serialize($data){
        if(!is_array($data))
            return false;

        return serialize($data);
    }

    public static function unserialize($data){
        return unserialize($data);
    }

}