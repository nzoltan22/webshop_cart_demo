<?php

namespace App;

class Router
{
    public function route()
    {   
        $basedir = str_replace('/index.php','',$_SERVER['PHP_SELF']);
        $uri = str_replace($basedir,'',$_SERVER['REQUEST_URI']);
        $uria = explode('?', $uri);
        $URIParts = array_filter(explode('/', $uria[0]));
        $URIPartsCount = count($URIParts);
        
        $controllerName = @$URIParts[$URIPartsCount];
        $dirName = "";
        if($URIPartsCount==2) $dirName = @$URIParts[1].'\\';
        
        if(empty($controllerName)) $controllerName = 'home';

        $controllerName = '\App\Controller\\'.$dirName.ucfirst($controllerName).'Controller';

        if (!class_exists($controllerName)) {
            $this->error();
            return;
        }
        
        $controller = new $controllerName();
    }
    
    public function error()
    {
        header("Page Not Found", true, 404);
        echo "Page Not Found.";
    }
}
