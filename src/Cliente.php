<?php
namespace Projeto;
use PDO, Exception;

final class Cliente {
    private int $id;
    private string $nome;
    private string $email;
    private string $senha;
    private string $perfil;
    private string $tipo = "cliente";


    private PDO $conexao;

    public function __construct()
    {
        $this->conexao = Banco::conecta();
    }

  
    // Testado e funcionando
    public function listar():array {
        $sql = "SELECT id, nome, email, perfil
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


    public function listarUm():array {
        $sql = "SELECT id, nome, email, perfil, senha FROM cliente WHERE id = :id ORDER BY nome";
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
        $sql = "INSERT INTO cliente(nome, email, senha, perfil) VALUES(:nome, :email, :senha, :perfil)";
        
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

    
    // Testado e funcionando
    public function atualizarCadastro():void {
        $sql = "UPDATE cliente SET nome = :nome, email = :email, senha = :senha, perfil = :perfil WHERE id = :id";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":id", $this->id, PDO::PARAM_INT);
            $consulta->bindParam(":nome", $this->nome, PDO::PARAM_STR);
            $consulta->bindParam(":email", $this->email, PDO::PARAM_STR);
            $consulta->bindParam(":senha", $this->senha, PDO::PARAM_STR);
            $consulta->bindParam(":perfil", $this->perfil, PDO::PARAM_STR);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro: ". $erro->getMessage());
        }
    }

    // Testado e funcionando
    public function excluirCadastro():void {
        $sql = "DELETE FROM cliente WHERE id = :id";
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
    


    public function getId():int
    {
        return $this->id;
    }

    

    public function setId(int $id)
    {
        $this->id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
    }

 
 
    
    public function getNome()
    {
        return $this->nome;
    }




    public function setNome(string $nome)
    {
        $this->nome = filter_var($nome, FILTER_SANITIZE_SPECIAL_CHARS);

    }

    

    public function getEmail()
    {
        return $this->email;
    }



    public function setEmail(string $email)
    {
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }

  

    public function getSenha()
    {
        return $this->senha;
    }

    

    public function setSenha(string 
    $senha)
    {
        $this->senha = filter_var($senha, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    

    public function getPerfil()
    {
        return $this->perfil;
    }




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
     * Get the value of conexao
     */ 
    public function getConexao()
    {
        return $this->conexao;
    }
}



