<?php
namespace Projeto;
use PDO, Exception;

final class Rede{
    private string $website;
    private string $linkedin;
    private string $instagram;
    private string $github;
    private string $behance;
    private int $usuarioId;
    private PDO $conexao;

     // Método para conexão com o banco
     public function __construct()
     {
         $this->conexao = Banco::conecta();
     }

            
    public function listarRedes():array {
        $sql = "SELECT usuario_id FROM rede";

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
        $sql = "SELECT id, website, linkedin, instagram, github, behance FROM rede WHERE usuario_id = :usuario_id";

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


     public function inserirComum(){
        $sql = "INSERT INTO rede(website, linkedin, instagram, usuario_id) VALUES(:website, :linkedin, :instagram, :usuario_id)";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":website", $this->website, PDO::PARAM_STR);
            $consulta->bindParam(":linkedin", $this->linkedin, PDO::PARAM_STR);
            $consulta->bindParam(":instagram", $this->instagram, PDO::PARAM_STR);
            $consulta->bindParam(":usuario_id", $this->usuarioId, PDO::PARAM_INT);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro: ". $erro->getMessage());
        }
     }


     public function atualizarPerfil():void {
        $sql = "UPDATE rede SET website = :website, linkedin = :linkedin, instagram = :instagram WHERE usuario_id = :usuario_id";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":website", $this->website, PDO::PARAM_STR);
            $consulta->bindParam(":linkedin", $this->linkedin, PDO::PARAM_STR);
            $consulta->bindParam(":instagram", $this->instagram, PDO::PARAM_STR);
            $consulta->bindParam(":usuario_id", $this->usuarioId, PDO::PARAM_INT);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro: ". $erro->getMessage());
        }

    }


    // Busca binária
    // public function  binary_search( $array,  $item,  $begin,  $end) {
    //     if ($begin <= $end){
    //          $soma = ($begin + $end);
    //          $m = intdiv($soma, 2);
    //          if($array = [$m] == $item)  {
    //             return $m;
    //             if($item < $array[$m]) {
    //                 return $this->binary_search($array, $item, $begin, $m-1);
    //             } else if($item > $array[$m]) {
    //                 return $this->binary_search($array, $item, $m+1, $end);
    //             } else {
    //                  echo 'não existe';
    //             }
    //          }
    //     }
            
    // }


    public function getWebsite()
    {
        return $this->website;
    }


    

    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

   

    public function getLinkedin()
    {
        return $this->linkedin;
    }


    
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Get the value of instagram
     */ 
    public function getInstagram()
    {
        return $this->instagram;
    }

    /**
     * Set the value of instagram
     *
     * @return  self
     */ 
    public function setInstagram($instagram)
    {
        $this->instagram = $instagram;

        return $this;
    }

    /**
     * Get the value of github
     */ 
    public function getGithub()
    {
        return $this->github;
    }

    /**
     * Set the value of github
     *
     * @return  self
     */ 
    public function setGithub($github)
    {
        $this->github = $github;

        return $this;
    }

    /**
     * Get the value of behance
     */ 
    public function getBehance()
    {
        return $this->behance;
    }

    /**
     * Set the value of behance
     *
     * @return  self
     */ 
    public function setBehance($behance)
    {
        $this->behance = $behance;

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

 