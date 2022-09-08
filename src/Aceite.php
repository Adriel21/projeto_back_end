<?php
namespace Projeto;
use PDO, Exception;


final class Aceite{
    private int $int;
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
    


    /**
     * Get the value of int
     */ 
    public function getInt()
    {
        return $this->int;
    }

    /**
     * Set the value of int
     *
     * @return  self
     */ 
    public function setInt($int)
    {
        $this->int = $int;

        return $this;
    }

    /**
     * Get the value of confirmacao
     */ 
    public function getConfirmacao()
    {
        return $this->confirmacao;
    }

    /**
     * Set the value of confirmacao
     *
     * @return  self
     */ 
    public function setConfirmacao($confirmacao)
    {
        $this->confirmacao = $confirmacao;

        return $this;
    }

    /**
     * Get the value of periodo
     */ 
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set the value of periodo
     *
     * @return  self
     */ 
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
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
        $this->usuarioId = $usuarioId;

        return $this;
    }
}