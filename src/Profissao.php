<?php
namespace Projeto;
use PDO, Exception;

final class Profissao {
    private int $id;
    private string $titulo;
    private string $descricao;
    private string $usuarioId;
    private int $categoriaId;

    
    private PDO $conexao;

    public function __construct()
    {
        $this->conexao = Banco::conecta();
    }

    public function listar():array {
        $sql = "SELECT id, usuario_id FROM profissao";

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
        $sql = "SELECT id, titulo, descricao, usuario_id, categoria_id FROM profissao WHERE usuario_id = :usuario_id";
    try {
        $consulta = $this->conexao->prepare($sql);
        $consulta->bindParam(':usuario_id', $this->usuarioId, PDO::PARAM_INT);
        $consulta->execute();
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
        die("Erro: ". $erro->getMessage());
    }
    return $resultado;
}

    public function cadastrarFreela():void {
        $sql = "INSERT INTO profissao(titulo, descricao, usuario_id, categoria_id) VALUES(:titulo, :descricao, :usuario_id, :categoria_id)";
        
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":titulo", $this->titulo, PDO::PARAM_STR);
            $consulta->bindParam(":descricao", $this->descricao, PDO::PARAM_STR);
            $consulta->bindParam(":usuario_id", $this->usuarioId, PDO::PARAM_INT);
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
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = filter_var($titulo, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    /**
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = filter_var($descricao, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    /**
     * Get the value of usuarioId
     */ 
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    /**
     * Set the value of usuarioId
     *
     * @return  self
     */ 
    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = filter_var($usuarioId, FILTER_SANITIZE_NUMBER_INT);
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
        $this->categoriaId = filter_var($categoriaId, FILTER_SANITIZE_NUMBER_INT);
    }
}