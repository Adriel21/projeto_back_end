<?php
namespace Projeto;
use PDO, Exception;


final class Aceite{
    private int $id;
    private string $confirmacao;
    private string $periodo;
    private int $usuarioId;

    private PDO $conexao;

    

    // Método para conexão com o banco
    public function __construct()
    {
        $this->conexao = Banco::conecta();
    }


    public function aceitar() {
        $sql = "INSERT INTO aceite(confirmacao, periodo, usuario_id) VALUES(:confirmacao, :periodo, :usuario_id)";
        
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":confirmacao", $this->confirmacao, PDO::PARAM_STR);
            $consulta->bindParam(":periodo", $this->periodo, PDO::PARAM_STR);
            $consulta->bindParam(":usuario_id", $this->usuarioId, PDO::PARAM_INT);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro: ". $erro->getMessage());
        }
    }
    

    public function excluirAceite():void {
        $sql = "DELETE FROM aceite WHERE usuario_id = :usuario_id";
        
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(':usuario_id', $this->usuarioId, PDO::PARAM_INT);
            
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
  


    public function getConfirmacao()
    {
        return $this->confirmacao;
    }

  


    public function setConfirmacao($confirmacao)
    {
        $this->confirmacao = filter_var($confirmacao, FILTER_SANITIZE_SPECIAL_CHARS);

    }

   


    public function getPeriodo()
    {
        return $this->periodo;
    }

   
    

    public function setPeriodo($periodo)
    {
        $this->periodo = filter_var($periodo, FILTER_SANITIZE_SPECIAL_CHARS);
    }

  

    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

  


    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = filter_var($usuarioId, FILTER_SANITIZE_NUMBER_INT);

    }


}