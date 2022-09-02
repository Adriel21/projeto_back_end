<?php
namespace Projeto;
use PDO, Exception;

final class Projeto{
    private int $id;
    private string $titulo;
    private string $resumo;
    private string $descricao;
    private int $usuarioId;
    private int $categoriaId;
    private PDO $conexao;

    
   
     // Classe Usuario instanciada dentro da classe Projeto através de Associação de classes
   
    public Usuario $usuario;

  
    
    public function __construct()
    {
        /* No momento em que um objeto Projeto for instanciado
        nas páginas, aproveitaremos para também instanciar um objeto
        Usuario e com isso acessar recursos desta classe. */
        $this->usuario = new Usuario;

        /* Reaproveitando a conexão já existente
        a partir da classe de Usuario */
        $this->conexao = $this->usuario->getConexao();
    }


    //Nesse método aqui fazemos a listagem de um projeto 
    public function listarUm():array {
        $sql = "SELECT id, titulo, resumo, descricao, categoria_id FROM projeto WHERE id =:id";

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


    // Método para cadastrar projetos na base de dados
    public function cadastrar():void {
        $sql = "INSERT INTO projeto(titulo, resumo, descricao, usuario_id, categoria_id) VALUES(:titulo, :resumo, :descricao, :usuario_id, :categoria_id)";
        
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":titulo", $this->titulo, PDO::PARAM_STR);
            $consulta->bindParam(":resumo", $this->resumo, PDO::PARAM_STR);
            $consulta->bindParam(":descricao", $this->descricao, PDO::PARAM_STR);
            $consulta->bindParam(":usuario_id", $this->usuarioId, PDO::PARAM_INT);
            $consulta->bindParam(":categoria_id", $this->categoriaId, PDO::PARAM_INT);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro: ". $erro->getMessage());
        }
    }

    // EM DECISÃO DE USO
    // public function upload(array $arquivo) {
    //     $tiposAceitos = [
    //         "image/png",
    //         "image/jpeg",
    //         "image/gif",
    //         "image/svg+xml"
    //     ];

    //     if(!in_array($arquivo['type'], $tiposAceitos)) {
    //         die("<script>alert('formato válido');</script>");
    //     }
    //         $nome = $arquivo['name'];

    //         $temporario = $arquivo['tmp_name'];

    //         $destino = "./imagem/".$nome;

    //         move_uploaded_file($temporario, $destino);
    //     }

        //  public function listarDetalhes():array {
        //      $sql = "SELECT projeto.id, projeto.titulo, projeto.resumo, projeto.descricao, projeto.usuario_id, projeto.categoria_id, usuario.nome AS nome, usuario.email AS email, usuario.perfil AS perfil FROM projeto LEFT JOIN usuario ON projeto.usuario_id = usuario.id";
    
    
        //       try {
        //          $consulta = $this->conexao->prepare($sql);
        //         $consulta->execute();
        //         $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        //     } catch (Exception $erro) {
        //       die("Erro: ". $erro->getMessage());
        //     }
        //      return $resultado;
        //  }

        // public function listarDetalhes():array {
        //     $sql = "SELECT titulo, resumo, descricao, usuario_id, categoria_id FROM projeto";
    
    
        //      try {
        //         $consulta = $this->conexao->prepare($sql);
        //         $consulta->execute();
        //         $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        //     } catch (Exception $erro) {
        //         die("Erro: ". $erro->getMessage());
        //     }
        //     return $resultado;
        // }

        
         public function listarTodos():array {
             $sql = "SELECT id, titulo, resumo, descricao, categoria_id 
            FROM projeto";
        
        
                   try {
                      $consulta = $this->conexao->prepare($sql);
                    $consulta->execute();
                     $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
                  } catch (Exception $erro) {
                      die("Erro: ". $erro->getMessage());
                  }
                  return $resultado;


                 }


        // Método para trazer detalhes da tabela Projeto através da associação entre a classe Usuario
        public function listarDetalhes():array {
            $sql = "SELECT id, titulo, resumo, descricao 
            FROM projeto WHERE usuario_id = :usuario_id";
        
        
                  try {
                     $consulta = $this->conexao->prepare($sql);
                     $consulta->bindValue( //Utilizamos bind value por motivo da associação de
                        ":usuario_id", 
                        $this->usuario->getId(), 
                        PDO::PARAM_INT
                    );
                     $consulta->execute();
                     $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
                 } catch (Exception $erro) {
                     die("Erro: ". $erro->getMessage());
                 }
                 return $resultado;


                }

                public function atualizarProjeto(){
                    $sql = "UPDATE projeto SET titulo = :titulo, resumo = :resumo, descricao = :descricao, categoria_id = :categoria_id WHERE id = :id";

                    try {
                        $consulta = $this->conexao->prepare($sql);
                        $consulta->bindParam(':id', $this->id, PDO::PARAM_INT);
                        $consulta->bindParam(':titulo', $this->titulo, PDO::PARAM_STR);
                        $consulta->bindParam(':resumo', $this->resumo, PDO::PARAM_STR);
                        $consulta->bindParam(':descricao', $this->descricao, PDO::PARAM_STR);
                        $consulta->bindParam(':categoria_id', $this->categoriaId, PDO::PARAM_INT);
                        $consulta->execute();
                    } catch (Exception $erro) {
                        die("Erro: ". $erro->getMessage());
                    }
                }

                public function excluirProjeto():void {
                    $sql = "DELETE FROM projeto WHERE id =:id";
                    
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

   
    public function getDescricao()
    {
        return $this->descricao;
    }

  
    public function setDescricao(string $descricao)
    {
        $this->descricao = filter_var($descricao, FILTER_SANITIZE_SPECIAL_CHARS);
    }


    

  
    public function getCategoriaId()
    {
        return $this->categoriaId;
    }

     
    public function setCategoriaId($categoriaId)
    {
        $this->categoriaId = filter_var($categoriaId, FILTER_SANITIZE_NUMBER_INT);

    }

   
    public function getTitulo()
    {
        return $this->titulo;
    }

 
    public function setTitulo($titulo)
    {
        $this->titulo = filter_var($titulo, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    
    public function getResumo()
    {
        return $this->resumo;
    }

  
    public function setResumo($resumo)
    {
        $this->resumo = filter_var($resumo, FILTER_SANITIZE_SPECIAL_CHARS);
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