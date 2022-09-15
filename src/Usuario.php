<?php
namespace Projeto;
use PDO, Exception;

class Usuario {
    private int $id;
    private string $nome;
    private string $email;
    private string $senha;
    private string $perfil;
    private string $telefone;
    private string $termo;
    private int $profissaoId;
    
    private PDO $conexao;

    
    public Profissao $profissao;
    // Método para conexão com o banco
    public function __construct()
    {

        $this->profissao = new Profissao;

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

// método que tem como objetivo trazer um usuário, utilizando como parâmetro o ID
    public function listarUm():array {
        $sql = "SELECT id, email, nome, perfil, senha FROM usuario WHERE id = :id";
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

// método que tem como objetivo trazer um usuário, utilizando como parâmetro o email
public function listarAceite():array {
    $sql = "SELECT id, email, nome, perfil FROM usuario WHERE email = :email";
try {
    $consulta = $this->conexao->prepare($sql);
    $consulta->bindParam(':email', $this->email, PDO::PARAM_STR);
    $consulta->execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
} catch (Exception $erro) {
    die("Erro: ". $erro->getMessage());
}
return $resultado;
}










public function listarPorCategoria():array{
    $sql = "SELECT usuario.id, usuario.nome AS nome, usuario.perfil AS perfil, usuario.profissao_id AS profissao_id, profissao.titulo AS titulo, profissao.descricao AS descricao, profissao.categoria_id AS categoria FROM usuario LEFT JOIN profissao ON usuario.profissao_id = profissao.id WHERE profissao.categoria_id = :categoria_id";
    try {
        $consulta = $this->conexao->prepare($sql);
        $consulta->bindValue(':categoria_id', $this->profissao->getCategoriaId(), PDO::PARAM_INT);
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
        die("Erro: ". $erro->getMessage());
    }
    return $resultado;
}




public function busca():array {
    $sql = "SELECT usuario.nome AS nome, usuario.perfil AS perfil, profissao.titulo AS titulo, profissao.id, profissao.descricao AS descricao FROM usuario RIGHT JOIN profissao ON usuario.profissao_id = profissao.id WHERE titulo LIKE :termo OR descricao LIKE :termo";

    try {
        $consulta = $this->conexao->prepare($sql);
        $consulta->bindValue(":termo", '%'.$this->termo.'%', PDO::PARAM_STR);
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
        die("Erro: ". $erro->getMessage());
    }
    return $resultado;
}






    
    //método para cadastro de usuários no banco
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


    public function atualizarPerfil():void {
        $sql = "UPDATE usuario SET nome = :nome, email = :email, senha = :senha, perfil = :perfil WHERE id = :id";

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
    

    //método que tem como objetivo atualizar/inserir o id da tabela profissao na coluna profissao_id da tabela usuario, criando assim, o relacionamento
    public function atualizarPr():void {
        $sql = "UPDATE usuario SET profissao_id = :profissao_id  WHERE id = :id";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":id", $this->id, PDO::PARAM_INT);
            $consulta->bindParam(":profissao_id", $this->profissaoId, PDO::PARAM_STR);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro: ". $erro->getMessage());
        }
    }
    


    public function excluirCadastro():void {
        $sql = "DELETE FROM usuario WHERE id =:id";
        
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(':id', $this->id, PDO::PARAM_INT);
            
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro: ". $erro->getMessage());
        }

    }

    public function excluirGeral():void {
        $sql = "DELETE FROM usuario INNER JOIN profissao ON usuario.profissao_id = profissao.id WHERE id = :id";
        
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(':id', $this->id, PDO::PARAM_INT);
            
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


        // Método que tem como objetivo verificar se o email informado existe na base de dados
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

        // método para inserir e limitar as imagens na base de dados
    public function upload(array $arquivo) {
        $tiposAceitos = [
            "image/png",
            "image/jpeg",
            "image/gif",
            "image/svg+xml"
        ];

        if(!in_array($arquivo['type'], $tiposAceitos)) {
            die("<script>alert('formato inválido');</script>");
        }
            $nome = $arquivo['name'];

            $temporario = $arquivo['tmp_name'];

            $destino = "./fotos_de_perfil/".$nome;

            move_uploaded_file($temporario, $destino);
        }
        

        // método para inserir e limitar as imagens na base de dados
    public function uploadAtualiza(array $arquivo) {
        $tiposAceitos = [
            "image/png",
            "image/jpeg",
            "image/gif",
            "image/svg+xml"
        ];

        if(!in_array($arquivo['type'], $tiposAceitos)) {
            die("<script>alert('formato inválido');</script>");
        }
            $nome = $arquivo['name'];

            $temporario = $arquivo['tmp_name'];

            $destino = "../fotos_de_perfil/".$nome;

            move_uploaded_file($temporario, $destino);
        }

        public function novaSenha(){
            $novaSenha = substr(password_hash(time(), PASSWORD_DEFAULT), 7, 8);
            $nsCripto = password_hash($novaSenha, PASSWORD_DEFAULT);
            $sql = "UPDATE usuario SET senha = :senha WHERE id = :id";
          try{
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(':senha', $nsCripto, PDO::PARAM_STR);
            $consulta->bindParam(':id', $this->id, PDO::PARAM_INT);
            $consulta->execute();
          } catch (Exception $erro) { 
            die ("Erro: ". $erro->getMessage());
        } return $novaSenha;
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
        $this->profissaoId = filter_var($profissaoId, FILTER_SANITIZE_NUMBER_INT);

      
    }


 
}


