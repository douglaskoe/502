<?php
namespace Lib\Db;

abstract class AbstractDataMapper
{

    private $banco;

    public function __construct()
    {
        $this->banco = DbFactory::createObject();
    }

    /**
     * Metodo para montar a query insert dinamicamente
     *
     * @param array $dados            
     * @param string $table            
     * @return bool (retorno da execucao do banco)
     */
    public function persist(array $dados, $table)
    {
        // INSERT INTO TABELA(CAMPO1,CAMPO2)VALUES('VALOR','VALOR');
        foreach ($dados as $campo => $valor) {
            $campos[] = $campo;
            $valores[] = "'$valor'";
        }
        
        $campos = implode(',', $campos);
        $valores = implode(',', $valores);
        
        $query = "INSERT INTO $table($campos) VALUES($valores)";
        
        return $this->banco->query($query);
    }

    /**
     * Metodo usado para criação da query update de forma dinamica
     *
     * @param array $dados            
     * @param string $table            
     * @param string $onde            
     * @return PDOStatement
     */
    public function update(array $dados, $table, $onde)
    {
        foreach ($dados as $campo => $valor) {
            $sets[] = "$campo = '$valor'";
        }
        
        $sets = implode(',', $sets);
        
        $query = "UPDATE $table SET $sets WHERE $onde";
        
        return $this->banco->query($query);
    }

    public function delete($table, $onde)
    {
        $query = "DELETE FROM $table WHERE $onde";
        return $this->banco->query($query);
    }

    /**
     * Metodo para retornar um registro do banco,
     * em formato de entidade(Classe)
     *
     * @param string $table            
     * @param string $onde            
     * @return object
     */
    public function find($table, $onde)
    {
        $query = "SELECT * FROM $table WHERE $onde";
        $return = $this->banco->query($query);
        $registro = $return->fetchObject($this->entity);
        return $registro;
    }

    public function findAll($table, $onde = null)
    {
        $query = "SELECT * FROM $table";
        
        if ($onde) {
            $query .= " WHERE $onde";
        }
        
        $return = $this->banco->query($query);
        
        $collection = [];
        
        while ($registro = $return->fetchObject($this->entity)) {
            $collection[] = $registro;
        }
        
        return $collection;
    }
}





