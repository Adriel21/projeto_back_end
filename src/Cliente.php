<?php
namespace Projeto;
use PDO, Exception;

final class Cliente {
    private int $id;
    private string $nome;
    private string $email;
    private string $senha;
    private string $perfil;
    private PDO $conexao;

    public function __construct()
    {
        $this->conexao = Banco::conecta();
    }

  
    
    public function listar():array {
        $sql = "SELECT id, nome, email
        FROM cliente ORDER BY nome";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro: ". $erro->getMessage());
        }
        return $resultado;
    }

    public function getId()
    {
        return $this->id;
    }

    

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

 
 
    
    public function getNome()
    {
        return $this->nome;
    }




    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    

    public function getEmail()
    {
        return $this->email;
    }



    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

  

    public function getSenha()
    {
        return $this->senha;
    }

    

    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    

    public function getPerfil()
    {
        return $this->perfil;
    }




    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;

        return $this;
    }

    
}



