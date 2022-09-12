<?php
namespace Projeto;
use PDO, Exception;

final class Profissao{
    private int $id;
    private string $titulo;
    private string $descricao;
    private int $usuarioId;
    // private string $termo;
    private int $categoriaId;
    private PDO $conexao;


    public function __construct()
    {
        $this->conexao = Banco::conecta();
    }


    

    // Método para cadastrar perfil profissional
    public function cadastrar() {
        $sql = "INSERT INTO profissao(titulo, descricao, categoria_id) VALUES(:titulo, :descricao, :categoria_id)";
      
        
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":titulo", $this->titulo, PDO::PARAM_STR);
            $consulta->bindParam(":descricao", $this->descricao, PDO::PARAM_STR);
            // $consulta->bindParam(":usuario_id", $this->usuarioId, PDO::PARAM_INT);
            $consulta->bindParam(":categoria_id", $this->categoriaId, PDO::PARAM_INT);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro: ". $erro->getMessage());
        }
    }

    public function ultimoId() {
        $query_sql = "SELECT LAST_INSERT_ID()";

        try {
           
            $consultaDois = $this->conexao->prepare($query_sql);
            $consultaDois->execute();
            $resultado = $consultaDois->fetch((PDO::FETCH_DEFAULT));
        } catch (Exception $erro) {
            die("Erro: ". $erro->getMessage());
        }
        return $resultado;
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

// public function listarTodos():array {
//     $sql = "SELECT profissao.id, profissao.titulo, profissao.descricao, profissao.usuario_id, profissao.categoria_id, usuario.nome AS nome, usuario.perfil AS perfil, categoria.nome AS categoria FROM profissao LEFT JOIN usuario ON profissao.usuario_id = usuario.id LEFT JOIN categoria ON profissao.categoria_id = categoria.id";


//           try {
//              $consulta = $this->conexao->prepare($sql);
//            $consulta->execute();
//             $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
//          } catch (Exception $erro) {
//              die("Erro: ". $erro->getMessage());
//          }
//          return $resultado;


//         }




// public function listarPorCategoria():array {
//     $sql = "SELECT profissao.id, profissao.titulo, profissao.descricao, profissao.usuario_id, profissao.categoria_id, usuario.nome AS nome, usuario.perfil AS perfil, categoria.nome AS categoria FROM profissao LEFT JOIN usuario ON profissao.usuario_id = usuario.id LEFT JOIN categoria ON profissao.categoria_id = categoria.id WHERE profissao.categoria_id = :categoria_id";


//           try {
//             $consulta = $this->conexao->prepare($sql);
//             $consulta->bindParam(':categoria_id', $this->categoriaId, PDO::PARAM_INT);
//            $consulta->execute();
//             $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
//          } catch (Exception $erro) {
//              die("Erro: ". $erro->getMessage());
//          }
//          return $resultado;


//         }
        




// Método para atualizar dados do perfil
public function atualizarFreela():void {
    $sql = "UPDATE profissao SET titulo = :titulo, descricao = :descricao, categoria_id = :categoria_id WHERE id = :id";

    try {
        $consulta = $this->conexao->prepare($sql);
        $consulta->bindParam(':id', $this->id, PDO::PARAM_INT);
        $consulta->bindParam(':titulo', $this->titulo, PDO::PARAM_STR);
        $consulta->bindParam(':descricao', $this->descricao, PDO::PARAM_STR);
        $consulta->bindParam(':categoria_id', $this->categoriaId, PDO::PARAM_INT);
        $consulta->execute();
    } catch (Exception $erro) {
        die("Erro: ". $erro->getMessage());
    }

}




// public function busca():array {
//     $sql = "SELECT profissao.titulo, profissao.id, profissao.descricao, usuario.nome AS nome, usuario.perfil AS perfil FROM profissao LEFT JOIN usuario ON profissao.usuario_id = usuario.id WHERE titulo LIKE :termo OR descricao LIKE :termo";


//     try {
//         $consulta = $this->conexao->prepare($sql);
//         $consulta->bindValue(":termo", '%'.$this->termo.'%', PDO::PARAM_STR);
//         $consulta->execute();
//         $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
//     } catch (Exception $erro) {
//         die("Erro: ". $erro->getMessage());
//     }
//     return $resultado;
// }



public function excluirFreela():void {
    $sql = "DELETE FROM profissao WHERE id =:id";
    
    try {
        $consulta = $this->conexao->prepare($sql);
        $consulta->bindParam(':id', $this->id, PDO::PARAM_INT);
        
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



    
    
    
}
    ?>