<?php

class App {
    
    public Router $router;

    public function __construct($router) {

        $this->router = new Router();
        
    }
    
}