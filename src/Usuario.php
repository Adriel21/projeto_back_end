<?php
namespace Projeto;
use PDO, Exception;

class Usuario {
    private int $id;
    private string $nome;
    private string $email;
    private string $senha;
    private string $profissao;
    private string $descricao_profissao;
    // private string $perfil_freela;
    private string $perfil;
    private int $categoriaId;
    // private string $telefone;
    // private int $profissaoId;
    private PDO $conexao;

    

    
    public function __construct()
    {
        $this->conexao = Banco::conecta();
    }

       // Testado e funcionando
       public function listar():array {
        $sql = "SELECT id FROM usuario";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro: ". $erro->getMessage());
        }
        return $resultado;
    }

// testado e funcionando 
    public function listarUm():array {
        $sql = "SELECT id, email, nome, perfil, categoria_id FROM usuario WHERE id = :id";
    try {
        $consulta = $this->conexao->prepare($sql);
        $consulta->bindParam(':id', $this->id, PDO::PARAM_INT);
        $consulta->execute();
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
        die("Erro: ". $erro->getMessage());
    }
    return $resultado;
}
    
    // Testado e funcionando
    public function cadastrar():void {
        $sql = "INSERT INTO usuario(nome, email, senha, perfil) VALUES(:nome, :email, :senha, :perfil)";
        
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":nome", $this->nome, PDO::PARAM_STR);
            $consulta->bindParam(":email", $this->email, PDO::PARAM_STR);
            $consulta->bindParam(":senha", $this->senha, PDO::PARAM_STR);
            $consulta->bindParam(":perfil", $this->perfil, PDO::PARAM_STR);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro: ". $erro->getMessage());
        }
    }

    //testado e funcionando 
    public function atualizar():void {
        $sql = "UPDATE usuario SET profissao = :profissao, descricao_profissao = :descricao_profissao, categoria_id = :categoria_id WHERE id = :id";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":id", $this->id, PDO::PARAM_INT);
            $consulta->bindParam(":profissao", $this->profissao, PDO::PARAM_STR);
            $consulta->bindParam(":descricao_profissao", $this->descricao_profissao, PDO::PARAM_STR);
            $consulta->bindParam(":categoria_id", $this->categoriaId, PDO::PARAM_INT);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro: ". $erro->getMessage());
        }
    }
    

 

 
        // Testado e funcionando
        public function codificaSenha(string $senha):string {
            return password_hash($senha, PASSWORD_DEFAULT);
        }

            // Testado e funcionando
    public function verificaSenha(
        string $senhaFormulario, string $senhaBanco):string {

        /* Usamos a password_verify para COMPARAR as duas senhas:
        a digitada no formulário e a existente no banco */
        if ( password_verify($senhaFormulario, $senhaBanco) ) {
            // Se forem iguais, mantemos a senha existente no banco
            return $senhaBanco;
        } else {
            // Se forem diferentes, então codificamos esta nova senha
            return $this->codificaSenha($senhaFormulario);
        }
    }

        public function buscar() {
            $sql = "SELECT * FROM usuario WHERE email = :email";
            try {
                $consulta = $this->conexao->prepare($sql);
                $consulta->bindParam(":email", $this->email, PDO::PARAM_STR);
                $consulta->execute();
                $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
            } catch (Exception $erro) {
                die("Erro: ". $erro->getMessage());
            }
            return $resultado;
        }

        // Testado e funcionando
    public function upload(array $arquivo) {
        $tiposAceitos = [
            "image/png",
            "image/jpeg",
            "image/gif",
            "image/svg+xml"
        ];

        if(!in_array($arquivo['type'], $tiposAceitos)) {
            die("<script>alert('formato válido');</script>");
        }
            $nome = $arquivo['name'];

            $temporario = $arquivo['tmp_name'];

            $destino = "./imagem/".$nome;

            move_uploaded_file($temporario, $destino);
        }


  

    public function getId()
    {
        return $this->id;
    }

 
    
    public function setId($id)
    {
        $this->id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

        
    }

    
    
    public function getEmail()
    {
        return $this->email;
    }

   

    public function setEmail($email)
    {
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }

   

    public function getSenha()
    {
        return $this->senha;
    }

 
    
    public function setSenha($senha)
    {
        $this->senha = filter_var($senha, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    

    public function getClienteId()
    {
        return $this->clienteId;
    }



    public function setClienteId($clienteId)
    {
        $this->clienteId = filter_var($clienteId, FILTER_SANITIZE_NUMBER_INT);
    }

   

    public function getFreelancerId()
    {
        return $this->freelancerId;
    }



    public function setFreelancerId($freelancerId)
    {
        $this->freelancerId = filter_var($freelancerId, FILTER_SANITIZE_NUMBER_INT);

    }

   

    public function getConexao()
    {
        return $this->conexao;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = filter_var($nome, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    /**
     * Get the value of perfil
     */ 
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * Set the value of perfil
     *
     * @return  self
     */ 
    public function setPerfil($perfil)
    {
        $this->perfil = filter_var($perfil, FILTER_SANITIZE_SPECIAL_CHARS);

    }

    /**
     * Get the value of telefone
     */ 
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */ 
    public function setTelefone($telefone)
    {
        $this->telefone = filter_var($telefone, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    /**
     * Get the value of profissaoId
     */ 
    public function getProfissaoId()
    {
        return $this->profissaoId;
    }

    /**
     * Set the value of profissaoId
     *
     * @return  self
     */ 
    public function setProfissaoId($profissaoId)
    {
        $this->profissaoId = $profissaoId;

        return $this;
    }

    /**
     * Get the value of perfil_freela
     */ 
    public function getPerfil_freela()
    {
        return $this->perfil_freela;
    }

    /**
     * Set the value of perfil_freela
     *
     * @return  self
     */ 
    public function setPerfil_freela($perfil_freela)
    {
        $this->perfil_freela = filter_var($perfil_freela, FILTER_SANITIZE_SPECIAL_CHARS);

    }

    /**
     * Get the value of profissao
     */ 
    public function getProfissao()
    {
        return $this->profissao;
    }

    /**
     * Set the value of profissao
     *
     * @return  self
     */ 
    public function setProfissao($profissao)
    {
        $this->profissao = filter_var($profissao, FILTER_SANITIZE_SPECIAL_CHARS);


    }

    /**
     * Get the value of descricao_profissao
     */ 
    public function getDescricao_profissao()
    {
        return $this->descricao_profissao;
    }

    /**
     * Set the value of descricao_profissao
     *
     * @return  self
     */ 
    public function setDescricao_profissao($descricao_profissao)
    {
        $this->descricao_profissao = $descricao_profissao;

        return $this;
    }

    /**
     * Get the value of categoriaId
     */ 
    public function getCategoriaId()
    {
        return $this->categoriaId;
    }

    /**
     * Set the value of categoriaId
     *
     * @return  self
     */ 
    public function setCategoriaId($categoriaId)
    {
        $this->categoriaId = $categoriaId;

        return $this;
    }
}