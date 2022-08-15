<?php
namespace Projeto;
use PDO, Exception;

final class Freelancer {
    private int $id;
    private string $nome;
    private string $email;
    private string $senha;
    private string $perfil;
    private string $profissao;
    public static string $tipo = 'Freelancer';
    private int $categoriaId;

    
    private PDO $conexao;

    public function __construct()
    {
        $this->conexao = Banco::conecta();
    }

    public function listar():array {
        $sql = "SELECT freelancer.id, freelancer.nome, freelancer.email, freelancer.perfil, freelancer.profissao, categoria.nome AS categoria FROM freelancer LEFT JOIN categoria ON freelancer.categoria_id = categoria.id ORDER BY nome";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro: ". $erro->getMessage());
        }
        return $resultado;
    }

    public function listarUm():array {
        $sql = "SELECT id, nome, email, senha,  perfil, profissao, categoria_id FROM freelancer WHERE id = :id";
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

    public function cadastrar():void {
        $sql = "INSERT INTO freelancer(nome, perfil, profissao, categoria_id) VALUES(:nome, :perfil, :profissao, :categoria_id)";
        
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":nome", $this->nome, PDO::PARAM_STR);
            $consulta->bindParam(":perfil", $this->perfil, PDO::PARAM_STR);
            $consulta->bindParam(":profissao", $this->profissao, PDO::PARAM_STR);
            $consulta->bindParam(":categoria_id", $this->categoriaId, PDO::PARAM_INT);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro: ". $erro->getMessage());
        }
    }

    // public function atualizarCadastro():void {
    //     $sql = "UPDATE freelancer SET nome = :nome, email = :email, senha = :senha, 
    //     profissao = :profissao WHERE id = :id";

    //     try {
    //         $consulta = $this->conexao->prepare($sql);
    //         $consulta->bindParam(":nome", $this->nome, PDO::PARAM_STR);
    //         $consulta->bindParam(":email", $this->email, PDO::PARAM_STR);
    //         $consulta->bindParam(":senha", $this->senha, PDO::PARAM_STR);
    //         // $consulta->bindParam(":perfil", $this->perfil, PDO::PARAM_STR);
    //         $consulta->bindParam(":profissao", $this->profissao, PDO::PARAM_STR);
    //         // $consulta->bindParam(":categoria_id", $this->categoriaId, PDO::PARAM_INT);
    //         $consulta->execute();
    //     } catch (Exception $erro) {
    //         die("Erro: ". $erro->getMessage());
    //     }
    // }

        // Testado e funcionando
        public function atualizarCadastro():void {
            $sql = "UPDATE freelancer SET nome = :nome, email = :email, senha = :senha, perfil = :perfil, profissao = :profissao, categoria_id = :categoria_id WHERE id = :id";
    
            try {
                $consulta = $this->conexao->prepare($sql);
                $consulta->bindParam(":id", $this->id, PDO::PARAM_INT);
                $consulta->bindParam(":nome", $this->nome, PDO::PARAM_STR);
                $consulta->bindParam(":email", $this->email, PDO::PARAM_STR);
                $consulta->bindParam(":senha", $this->senha, PDO::PARAM_STR);
                $consulta->bindParam(":perfil", $this->perfil, PDO::PARAM_STR);
                $consulta->bindParam(":profissao", $this->profissao, PDO::PARAM_STR);
                $consulta->bindParam(":categoria_id", $this->categoriaId, PDO::PARAM_INT);
                $consulta->execute();
            } catch (Exception $erro) {
                die("Erro: ". $erro->getMessage());
            }
        }

    public function excluirCadastro():void {
        $sql = "DELETE FROM freelancer WHERE id = :id";
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":id", $this->id, PDO::PARAM_INT);
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

        public function buscar() {
            $sql = "SELECT * FROM freelancer WHERE email = :email";
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

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
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
    public function setNome(string $nome)
    {
        $this->nome = filter_var($nome, FILTER_SANITIZE_SPECIAL_CHARS);

    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);

    }

    /**
     * Get the value of senha
     */ 
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */ 
    public function setSenha(string $senha)
    {
        $this->senha = filter_var($senha, FILTER_SANITIZE_SPECIAL_CHARS);

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
    public function setPerfil(string $perfil)
    {
        $this->perfil = filter_var($perfil, FILTER_SANITIZE_SPECIAL_CHARS);

    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
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
    public function setCategoriaId(int $categoriaId)
    {
        $this->categoriaId = filter_var($categoriaId, FILTER_SANITIZE_NUMBER_INT);
    }

    /**
     * Get the value of profissao
     */ 
    public function getProfissao()
    {
        return $this->profissao;
    }

  
    public function setProfissao(string $profissao)
    {
        $this->profissao = filter_var($profissao, FILTER_SANITIZE_SPECIAL_CHARS);
    }
}