<?php 


interface Iroute { 
    public function middleware($models, $controller, $db, $method);
}

class webAPI implements Iroute { 
    public function middleware($models, $controller, $db, $method) {
        include_once "../../Models/" . $models;
        include_once "../../Controllers/" . $method . "/" . $controller;
        include_once "../../connection/" . $db;
    }
}

