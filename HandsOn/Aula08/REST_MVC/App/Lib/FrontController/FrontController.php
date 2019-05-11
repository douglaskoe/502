<?php
namespace Lib\FrontController;

class FrontController
{

    public function run()
    {
        // teste: index.php?controller=index&action=sair
        $rota = $_SERVER['REQUEST_URI'];
        
        

        if ($rota != '/') {
            $arrayRota = explode('/', $rota);
        }
        
        /*echo "<pre>";
        var_dump($arrayRota);
        exit;*/

        $controller = isset($arrayRota[1]) ? $arrayRota[1] : 'index';
        
        $action = isset($arrayRota[2]) ? $arrayRota[2] : 'index';
        
        //$_GET['id'] = isset($arrayRota[3]) ? $arrayRota[3] : '';
        
         $controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';
        
         $action = isset($_GET['action']) ? $_GET['action'] : 'index';
        
        $controller = 'Controller\\' . ucFirst($controller);
        
        $objController = new $controller();
        
        $objController->$action();
    }
}







