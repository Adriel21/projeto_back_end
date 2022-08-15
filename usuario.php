<?php

use Projeto\Usuario;

require_once './vendor/autoload.php';
$usuario = new Usuario;

$listadeUsuarios = $usuario->listar();

var_dump($usuario);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="row">
	<article class="col-12 bg-white rounded shadow my-1 py-4">
		
		<h2 class="text-center">
		Usuários 
		<span class="badge bg-dark">  </span>
		</h2>

		<p class="text-center mt-5">
			<a class="btn btn-primary" href="usuario_insere.php">
			<i class="bi bi-plus-circle"></i>	
			Inserir novo usuário</a>
		</p>
				
		<div class="table-responsive">
		
			<table class="table table-hover">
				<thead class="table-light">
					<tr>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Perfil</th>
						<th>Categoria</th>
						<th class="text-center">Operações</th>
					</tr>
				</thead>

				<tbody>
<?php foreach ($listadeUsuarios as $usuarios) { ?>
					<tr>
						<td class="text-center"><?=$usuarios['email']?></td>
						<td class="text-center"><?=$usuarios['cliente']?></td>
                        <td class="text-center"><?=$usuarios['freelancer']?></td>
						<td class="text-center">
							<a class="btn btn-warning" 
				href="cliente-atualiza.php">
							<i class="bi bi-pencil"></i> Atualizar
							</a>
						
							<a class="btn btn-danger excluir" 
				href="cliente_exclui.php">
							<i class="bi bi-trash"></i> Excluir
							</a>
						</td>
					</tr>
				</tbody>                
			</table>
	</div>
		<?php } ?>
	</article>
</div>
</body>
</html>