<?php

class Alunos
{
    private $dsn = 'pgsql:host=localhost;dbname=aula06';
    private $user = 'aula06';
    private $pass = '123456';
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO($this->dsn, $this->user, $this->pass);

    }

    public function inserir($dados)
    {
        $dados = json_decode($dados, true);
        
        $nome = $dados['nome'] ?? null;
        $email = $dados['email'] ?? null;
        
        $query = "INSERT INTO alunos (nome, email)
                VALUES ('$nome', '$email')";

        if($this->conn->exec($query)){
            return json_encode(['resposta' => 'Dados salvos!']);
        } else {
            return json_encode(['resposta' => 'Erro ao inserir!']);
        }
    }

    public function alterar($dados)
    {
        $dados = json_decode($dados, true);

        $id = $dados['id'] ?? null;
        $nome = $dados['nome'] ?? null;
        $email = $dados['email']?? null;

        $query = "UPDATE alunos SET nome = '$nome', email = '$email' WHERE id = '$id' ";

        if($this->conn->exec($query)){
            return json_encode(['resposta' => 'Dados alterados!']);
        } else {
            return json_encode(['resposta' => 'Erro ao alterar!']);
        }
    }

    public function excluir(int $id)
    {

        $query = "DELETE FROM alunos WHERE id = '$id' ";

        if($this->conn->exec($query)){
            return json_encode(['resposta' => 'Dados excluidos!']);
        } else {
            return json_encode(['resposta' => 'Erro ao excluir!']);
        }
    }

    public function  buscar(int $id)
    {

        $query = "SELECT * FROM alunos WHERE id = '$id' ";
        $pdoSt = $this->conn->query($query);

        return json_encode($pdoSt->fetch(PDO::FETCH_ASSOC));
    }

    public function listar()
    {

        $query = "SELECT * FROM alunos";
        $pdoSt = $this->conn->query($query);

        return $pdoSt->fetchAll(PDO::FETCH_ASSOC);
    }

}