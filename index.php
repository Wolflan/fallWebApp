<!DOCTYPE html>
<html lang="pt-BR">

	<head>


<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="Fall Detection" />
		<title>Fall Detection</title>

		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.css">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
		<link rel="stylesheet" href="css/style.css">

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
	</head>

	<body class="fundo">

		<?php
			session_start();
			if (isset($_SESSION['erro']) == true) :
		?>
			<div class="alert alert-danger">
  				<a href="index.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  				<strong>Erro!</strong> Login e/ou senha incorretos.
			</div>
		<?php
			unset($_SESSION['erro']);
			endif;
		?>

		<?php
			if (isset($_SESSION['usuarioInserido']) == true) :
		?>
			<div class="alert alert-success">
					<a href="index.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Sucesso!</strong> novo usuário inserido.
			</div>
		<?php
			unset($_SESSION['usuarioInserido']);
			endif;
		?>
		<div class="container-fluid">

			<div class="row-fluid ">

				<div class="cor painel esquerda">
					<div class="divider">

					</div>
					<div>
						<img src="img/fall.png" class="image-responsive imagem"/>

            <form id="formulario" name="formulario" class="form" action="logar.php" method="post" accept-charset="utf-8" role="form">
							<div class="form-group">
								<div class="input-group">
  								<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
  								<input class="form-control" type="text" placeholder="Nome de usuário" id="login" name="login" >
								</div>
								<div class="divider">

								</div>
								<div class="input-group">
  								<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
  								<input class="form-control" type="password" placeholder="Senha" id="senha" name="senha" >
								</div>
							</div>
							<button type="submit " class="btn btn-primary btn-lg"><i class="fa fa-sign-in"></i> Entrar</button>
							
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
								<i class="fa fa-user-plus"></i> Cadastrar
							</button>

						</form>

					</div>
					<div class="divider">
							
					</div>


				</div>


			</div>


		</div>




		<!-- Modal -->
		<div class="modal fade" id="myModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Cadastrar Novo Usuário</h4>
					</div>
					<div class="modal-body">

							<form action="inserirusuario.php" method="post">
								<div class="form-group">

									<div class="input-group">
	  								<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
	  								<input class="form-control" type="text" placeholder="Nome de usuário" id="nlogin" name="nlogin" >
									</div>

									<div class="divider">

									</div>

									<div class="input-group">
	  								<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
	  								<input class="form-control" type="password" placeholder="Senha" id="nsenha" name="nsenha" >
									</div>

									<div class="divider">

									</div>

									<div class="input-group">
	  								<span class="input-group-addon"><i class="fa fa-info-circle fa-fw"></i></span>
	  								<input class="form-control" type="text" placeholder="Nome Completo" id="nnome" name="nnome" >
									</div>

									<div class="divider">

									</div>

									<div class="input-group">
	  								<span class="input-group-addon"><i class="fa fa-envelope-square fa-fw"></i></span>
	  								<input class="form-control" type="text" placeholder="1º email" id="email_um" name="email_um" >
									</div>

									<div class="divider">

									</div>

									<div class="input-group">
	  								<span class="input-group-addon"><i class="fa fa-envelope-square fa-fw"></i></span>
	  								<input class="form-control" type="text" placeholder="2º email" id="email_dois" name="email_dois" >
									</div>

									<div class="divider">

									</div>

									<div class="input-group">
	  								<span class="input-group-addon"><i class="fa fa-envelope-square fa-fw"></i></span>
	  								<input class="form-control" type="text" placeholder="3º email" id="email_tres" name="email_tres" >
									</div>

									<div class="divider">

									</div>

									<div class="input-group">
	  								<span class="input-group-addon"><i class="fa fa fa-mobile fa-fw"></i></span>
	  								<input class="form-control" type="tel" placeholder="Número 1º telefone" id="telefone1" name="telefone1" >
									</div>

									<div class="divider">

									</div>

									<div class="input-group">
	  								<span class="input-group-addon"><i class="fa fa fa-mobile fa-fw"></i></span>
	  								<input class="form-control" type="tel" placeholder="Número 2º telefone" id="telefone2" name="telefone2" >
									</div>
								</div>
								<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Confirmar</button>
							</form>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>

					</div>
				</div>
			</div>
		</div>
<script language="javascript">
	
</script>
</body>

</html>