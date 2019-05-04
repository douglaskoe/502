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
        $nome = $dados['nome'] ?? null;
        $email = $dados['email'] ?? null;
        
        $query = "INSERT INTO alunos (nome, email)
                VALUES ('$nome', '$email')";

        return $this->conn->exec($query);
    }

    public function alterar(array $dados)
    {
        $id = $dados['id'] ?? null;
        $nome = $dados['nome'] ?? null;
        $email = $dados['email']?? null;

        $query = "UPDATE alunos SET nome = '$nome', email = '$email' WHERE id = '$id' ";

        return $this->conn->exec($query);
    }

    public function excluir(int $id)
    {

        $query = "DELETE FROM alunos WHERE id = '$id' ";

        return $this->conn->exec($query);
    }

    public function  buscar(int $id)
    {

        $query = "SELECT * FROM alunos WHERE id = '$id' ";
        $pdoSt = $this->conn->query($query);

        return $pdoSt->fetch(PDO::FETCH_ASSOC);
    }

    public function listar()
    {

        $query = "SELECT * FROM alunos";
        $pdoSt = $this->conn->query($query);

        return $pdoSt->fetchAll(PDO::FETCH_ASSOC);
    }

}