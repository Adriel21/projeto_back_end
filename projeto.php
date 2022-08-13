<?php
use Projeto\Cliente;
use Projeto\Projeto;

require_once './vendor/autoload.php';
$projeto = new Projeto;

$listaDeProjetos = $projeto->listar();
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
			<a class="btn btn-primary" href="cliente_insere.php">
			<i class="bi bi-plus-circle"></i>	
			Inserir novo usuário</a>
		</p>
				
		<div class="table-responsive">
		
			<table class="table table-hover">
				<thead class="table-light">
					<tr>
						<th>Nome</th>
						<th>Imagem</th>
						<th>Descrição</th>
						<th>Categoria</th>
						<th class="text-center">Operações</th>
					</tr>
				</thead>

				<tbody>
<?php foreach ($listaDeProjetos as $projetos) { ?>
					<tr>
						<td><?=$projetos['nome']?></td>
						<td><img src="<?=$projetos['imagem']?>" alt="aguardando"></td>
						<td><?=$projetos['descricao']?></td>
                        <td><?=$projetos['categoria']?></td>
                        <td><?=$projetos['cliente']?></td>
						<td class="text-center">
							<a class="btn btn-warning" 
				href="cliente-atualiza.php?id=<?=$projetos['id']?>">
							<i class="bi bi-pencil"></i> Atualizar
							</a>
						
							<a class="btn btn-danger excluir" 
				href="cliente_exclui.php?id=<?=$projetos['id']?>">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>