<?php

use Projeto\Freelancer;

require_once './vendor/autoload.php';
$freelancer = new Freelancer;

$listadefreelancer = $freelancer->listar();
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
			<a class="btn btn-primary" href="freelancer_insere.php">
			<i class="bi bi-plus-circle"></i>	
			Inserir novo usuário</a>
		</p>
				
		<div class="table-responsive">
		
			<table class="table table-hover">
				<thead class="table-light">
					<tr>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Profissao</th>
						<th class="text-center">Categoria</th>
						<th class="text-center">Operações</th>
					</tr>
				</thead>

				<tbody>
<?php foreach ($listadefreelancer as $freelancers) { ?>
					<tr>
						<td><?=$freelancers['nome']?></td>
						<td><?=$freelancers['email']?></td>
						<td><?=$freelancers['profissao']?></td>
                        <td><?=$freelancers['categoria']?></td>
						<td class="text-center">
							<a class="btn btn-warning" 
				href="freelancer-atualiza.php?id=<?=$freelancers['id']?>">
							<i class="bi bi-pencil"></i> Atualizar
							</a>
						
							<a class="btn btn-danger excluir" 
				href="freelancer_exclui.php?id=<?=$freelancers['id']?>">
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