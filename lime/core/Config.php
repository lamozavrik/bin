<?php
namespace app\lime\core;

class Config{

    protected $config = [];

    public function __construct($config = []){
        $this->config = $config;
    }

    public function get($key){
        return isset($this->config[$key]) ? $this->config[$key] : null;
    }

    public function set($key, $val){
        $this->config[$key] = $val;
    }

    public function config(){
        return $this->config;
    }

}