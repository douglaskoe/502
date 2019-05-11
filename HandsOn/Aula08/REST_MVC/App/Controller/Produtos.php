<?php
namespace Controller;

use Model\ProdutosModel;
use Lib\View\ViewModel;
use Dexter\View\View;

class Produtos
{

    private $model;

    public function __construct()
    {
        $this->model = new ProdutosModel();
    }

    public function listar()
    {
        $dados = $this->model->findAll();
        new ViewModel('produtos', 'listar', $dados);
    }

    public function inserir()
    {
        if ($_POST) {
            $retorno = $this->model->inserir($_POST);
            if ($retorno) {
                header('location:/produtos/listar');
            }
        }
        
        new ViewModel('produtos', 'inserir');
    }

    public function editar()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $produto = $this->model->buscarProduto($id);
        
        if ($_POST) {
            $retorno = $this->model->editar($_POST, $id);
            if ($retorno) {
                header('location:/produtos/listar');
            }
        }
        
        new ViewModel('produtos', 'editar', $produto);
    }

    public function excluir()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $retorno = $this->model->deletar($id);
        if ($retorno) {
            header('location:/produtos/listar');
        }
    }
}








