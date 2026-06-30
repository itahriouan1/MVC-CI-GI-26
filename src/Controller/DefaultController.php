<?php

namespace App1\Controller;

use Core\View\View;

class DefaultController {
    public function index(){
        $view = new View();
        $view->render("index");
    }
}