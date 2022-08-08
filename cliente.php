<?php
use Projeto\Cliente;
require_once './vendor/autoload.php';
$cliente = new Cliente;

$listadeclientes = $cliente->listar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
			<a class="btn btn-primary" href="usuario-insere.php">
			<i class="bi bi-plus-circle"></i>	
			Inserir novo usuário</a>
		</p>
				
		<div class="table-responsive">
		
			<table class="table table-hover">
				<thead class="table-light">
					<tr>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Tipo</th>
						<th class="text-center">Operações</th>
					</tr>
				</thead>

				<tbody>
<?php foreach ($listadeclientes as $clientes) { ?>
					<tr>
						<td><?=$clientes['nome']?></td>
						<td><?=$clientes['email']?></td>
						<td>naosei</td>
						<td class="text-center">
							<a class="btn btn-warning" 
				href="usuario-atualiza.php?=<?=$cliente->getId()?>">
							<i class="bi bi-pencil"></i> Atualizar
							</a>
						
							<a class="btn btn-danger excluir" 
				href="cliente_exclui.php?id=<?=$cliente->getId()?>">
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