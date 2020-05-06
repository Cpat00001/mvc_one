<?php
/*
    * App Core
    * this file Creates URL && Loads core controllers
    * URL FORMAT for access - /controller/method/params
*/
class Core{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
        $this->getUrl();
    }

    public function getURL(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
    }

}