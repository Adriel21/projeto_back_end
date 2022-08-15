<?php
namespace Projeto;
use PDO, Exception;

class Usuario {
    private int $id;
    private string $email;
    private string $senha;
    private PDO $conexao;

    

    
    public function __construct()
    {
        $this->conexao = Banco::conecta();
    }

       // Testado e funcionando
       public function listar():array {
        $sql = "SELECT usuario.id, usuario.email, cliente.nome AS cliente, freelancer.nome AS freelancer
        FROM usuario LEFT JOIN cliente ON usuario.cliente_id = cliente.id LEFT JOIN freelancer ON usuario.freelancer_id = freelancer.id";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro: ". $erro->getMessage());
        }
        return $resultado;
    }
    
    // Testado e funcionando
    public function cadastrar():void {
        $sql = "INSERT INTO usuario(email, senha) VALUES(:email, :senha)";
        
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":email", $this->email, PDO::PARAM_STR);
            $consulta->bindParam(":senha", $this->senha, PDO::PARAM_STR);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro: ". $erro->getMessage());
        }
    }

    public function cadastrarFr():void {
        $sql = "INSERT INTO usuario(cliente_id AS cliente) VALUES(:cliente)";

        try{
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":cliente", $this->clienteId, PDO::PARAM_INT);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro: ". $erro->getMessage());
        }
    }

        // Testado e funcionando
        public function atualizarCadastro():void {
            $sql = "UPDATE usuario SET cliente_id = :cliente_id WHERE usuario.id = :usuario.id";
            
    
            try {
                $consulta = $this->conexao->prepare($sql);
                $consulta->bindParam(":usuario.id", $this->id, PDO::PARAM_INT);
                $consulta->bindParam(":cliente_id", $this->clienteId, PDO::PARAM_INT);
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
}