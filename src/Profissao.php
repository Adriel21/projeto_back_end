<?php
namespace Projeto;
use PDO, Exception;

final class Profissao{
    private int $id;
    private string $titulo;
    private string $descricao;
    private int $situacao;
    private int $usuarioId;
    private int $categoriaId;
    private PDO $conexao;


    public function __construct()
    {
        $this->conexao = Banco::conecta();
    }


    // Método para cadastrar perfil profissional
    public function cadastrar():void {
        $sql = "INSERT INTO profissao(titulo, descricao, situacao, usuario_id, categoria_id) VALUES(:titulo, :descricao, :situacao, :usuario_id, :categoria_id)";
        
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":titulo", $this->titulo, PDO::PARAM_STR);
            $consulta->bindParam(":descricao", $this->descricao, PDO::PARAM_STR);
            $consulta->bindParam(":situacao", $this->situacao, PDO::PARAM_INT);
            $consulta->bindParam(":usuario_id", $this->usuarioId, PDO::PARAM_INT);
            $consulta->bindParam(":categoria_id", $this->categoriaId, PDO::PARAM_INT);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro: ". $erro->getMessage());
        }
    }

    // Método para trazer um perfil profissional 
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

// Método para atualizar dados do perfil
public function atualizarFreela():void {
    $sql = "UPDATE titulo, descricao, categoria_id FROM profissao WHERE usuario_id = :usuario_id";

    try {
        $consulta = $this->conexao->prepare($sql);
        $consulta->bindParam(':usuario_id', $this->usuarioId, PDO::PARAM_INT);
        $consulta->bindParam(':titulo', $this->titulo, PDO::PARAM_STR);
        $consulta->bindParam(':descricao', $this->descricao, PDO::PARAM_STR);
        $consulta->bindParam(':categoria_id', $this->categoriaId, PDO::PARAM_INT);
        $consulta->execute();
    } catch (Exception $erro) {
        die("Erro: ". $erro->getMessage());
    }

}

// Desativando perfil freela
Public function desativarPerfil():void{
    $sql = "UPDATE situacao FROM profissao WHERE usuario_id = :usuario_id";
    try {
        $consulta = $this->conexao->prepare($sql);
        $consulta->bindParam(':usuario_id', $this->usuarioId, PDO::PARAM_INT);
        $consulta->bindParam(':situacao', $this->situacao, PDO::PARAM_INT);
        $consulta->execute();
    } catch (Exception $erro) {
        die("Erro: ". $erro->getMessage());
    }
}







   
    public function getId()
    {
        return $this->id;
    }

   
    public function setId($id)
    {
        $this->id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
    }


    public function getTitulo()
    {
        return $this->titulo;
    }

   
    public function setTitulo($titulo)
    {
        $this->titulo = filter_var($titulo, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    
    public function getDescricao()
    {
        return $this->descricao;
    }

   
    public function setDescricao($descricao)
    {
        $this->descricao = filter_var($descricao, FILTER_SANITIZE_SPECIAL_CHARS);

    }

   
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    
  
    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = filter_var($usuarioId, FILTER_SANITIZE_NUMBER_INT);

    }

   
    public function getCategoriaId()
    {
        return $this->categoriaId;
    }

   
    public function setCategoriaId($categoriaId)
    {
        $this->categoriaId = filter_var($categoriaId, FILTER_SANITIZE_NUMBER_INT);
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

    /**
     * Get the value of situacao
     */ 
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * Set the value of situacao
     *
     * @return  self
     */ 
    public function setSituacao($situacao)
    {
        $this->situacao = filter_var($situacao, FILTER_SANITIZE_NUMBER_INT);
    }
}
    ?>