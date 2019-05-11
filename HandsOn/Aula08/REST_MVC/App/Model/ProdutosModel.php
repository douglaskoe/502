<?php
namespace Model;

use Model\Mapper\ProdutosMapper;

class ProdutosModel
{

    private $produtosMapper;

    public function findAll()
    {
        $registros = $this->getProdutosMapper()->findAll('produtos');
        return $registros;
    }

    public function getProdutosMapper()
    {
        if (! $this->produtosMapper) {
            $this->produtosMapper = new ProdutosMapper();
        }
        
        return $this->produtosMapper;
    }

    public function inserir(array $dados)
    {
        return $this->getProdutosMapper()->persist($dados, 'produtos');
    }

    public function buscarProduto($id)
    {
        return $this->getProdutosMapper()->buscarPorId($id);
    }

    public function editar(array $dados, $id)
    {
        return $this->getProdutosMapper()->update($dados, 
                                                 'produtos', 
                                                 "id = $id");
    }
    
    public function deletar($id)
    {
        return $this->getProdutosMapper()->delete('produtos',
                                                  "id = $id");
    }
}






