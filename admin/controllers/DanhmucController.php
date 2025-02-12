<?php

class DanhmucController{
    public function __construct(){
        $model = new Danhmuc;

    }
    public function index(){
        
        require_once(__DIR__ . '/../view/danhmuc/list.php');
    }
}

