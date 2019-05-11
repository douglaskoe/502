<?php
namespace Model\Mapper;

use Lib\Db\AbstractDataMapper;

class ProdutosMapper extends AbstractDataMapper
{

    public $entity = 'Model\Entity\Produtos';

    public function buscarPorId($id)
    {
        return $this->find('produtos', "id=$id");
    }
}