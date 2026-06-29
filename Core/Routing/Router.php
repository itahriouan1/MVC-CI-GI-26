<?php

namespace Core\Routing;

class Router {
    public function Request(){
        $path = __DIR__."\\..\\..\\Config\\Routes.json";
        $content = file_get_contents($path);
        $Routes = json_decode($content);
        $routeSTR = "";
        if(isset($_GET['action'])){
            foreach($Routes as $route){
                if($_GET["action"]==$route->action){
                    $routeSTR = $route->Controller;
                }
            }
        }
        else{
            foreach($Routes as $route){
                if($route->action=="/"){
                    $routeSTR = $route->Controller;
                }
            }
        }
        if($routeSTR==""){
            echo "Route not found";
        }
        else{
            $routeTable = explode("::",$routeSTR);
            $className = "App1\\Controller\\".$routeTable[0];
            $method = $routeTable[1];
            $ConrollerObj = new $className();
            return $ConrollerObj->$method();
        }
    }
}