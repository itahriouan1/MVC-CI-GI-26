<?php

namespace Core\View;

class View {
    public function render(string $file, array $params=[]){
        extract($params);
        $path = __DIR__."\\..\\..\\src\\View\\".$file.".php";
        if(file_exists($path)){
            include($path);
        }
        else{
            echo "view not found";
        }
    }
}