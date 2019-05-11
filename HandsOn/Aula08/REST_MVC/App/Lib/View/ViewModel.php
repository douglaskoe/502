<?php
namespace Lib\View;

class ViewModel
{
    // index.php?controller=produtos&action=listar
    public function __construct($controller, $action, $dados = null, $mensagem = null)
    {
        $controller = strtolower($controller);
        $action = strtolower($action);
        require __DIR__ . '/../../View/layout/topo.php';
        $view = __DIR__ . "/../../View/$controller/$action.phtml";
        require_once $view;
    }
}