<?php

require_once "../vendor/autoload.php";

require_once '../inc/cabecalho_admin.php'; 
?>


<!--criando formulario de cadastro -->
<div class="container col-md-12 col-sm-12 marketing shadow rounded">
		<div class="row justify-content-center featurette my-5 p-sm-5">
        <h1 class="ps-5 pt-2 py-2 cta-formulario-atualiza">Atualize seus dados</h1>
			<div class="col-12 col-md-8 col-sm-12  p-sm-4 p-4 ">
				<form enctype="multipart/form-data" class="formulario-atualiza form-horizontal bg-form  p-sm-5 p-5 my-1 rounded" action="" method="POST">
					
					
					<div class="form-group pb-3  mt-2">
						<label for="email" class="pb-1">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					</div>
                    <div class="form-group pb-3 mt-2">
						<label for="email" class="pb-1">Telefone</label>
						<input type="email" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
					</div>
					<div class="form-group  mt-2">
						<label for="senha" class="pb-1">Senha</label>
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
					</div>
					<div class="form-group pt-2 mt-2">
						<label for="perfil" class="pb-1">Foto Perfil</label>
						<input type="file" class="form-control" id="perfil" name="perfil" placeholder="Perfil"  accept="image/png, image/jpeg, image/gif, image/svg+xml">
					</div>

					

					<div class="pt-4 text-center">
                    <button class="botao-feed btn text-white" type="submit">ATUALIZAR</button>
                    </div>
				</form>
			</div>
		</div>
	</div>