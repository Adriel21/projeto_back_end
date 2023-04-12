<?php

namespace Projeto;
use PDO, Exception;

final class Categoria {
    private int $id;
    private string $nome;
    private PDO $conexao;

    public function __construct()
    {
        $this->conexao = Banco::conecta();
    }



    // Método para trazer todas as categorias
    public function listar():array { 
        $sql = "SELECT id, nome FROM categoria ORDER BY nome";
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro: ". $erro->getMessage());
        }
        return $resultado;
    }
    
    

    // Método para trazer apenas uma categoria
    public function listarUm():array {
        $sql = "SELECT nome FROM categoria WHERE id = :id";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":id", $this->id, PDO::PARAM_INT);
            $consulta->execute();
            $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro: ". $erro->getMessage());
        }
        return $resultado;
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }



    public function setId($id)
    {
        $this->id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
    }

  

    public function getNome()
    {
        return $this->nome;
    }



    public function setNome($nome)
    {
        $this->nome = filter_var($nome, FILTER_SANITIZE_SPECIAL_CHARS);
    }

  
    
    public function getConexao()
    {
        return $this->conexao;
    }



    public function setConexao($conexao)
    {
        $this->conexao = $conexao;

        return $this;
    }
}