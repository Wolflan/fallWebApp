<!DOCTYPE html>
<?php
  include('verificar_sessao.php');
?>
<html lang="pt-BR">

	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="Fall Detection" />
		<title>Fall Detection</title>

		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.css">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
		<link rel="stylesheet" href="css/style.css">

		<script type="text/javascript" src="js/bootstrap.js"></script>
	</head>

	<body class="fundo2">



		<div class="container-fluid">

			<div class="row-fluid ">

				<div class="cor painel esquerda">
					<div >

						<div class="divider">

						</div>
						<i class="fa fa-exclamation fa-5x"></i>

            <h1>QUEDA DETECTADA</h1>
					</div>
					<div class="divider">

					</div>

					<a href="detectionfall.php" class="btn btn-block btn-success"><i class="fa fa-reply-all"></i> Continuar Monitorando</a>
					<div class="divider">

					</div>
					<a href="desconectar.php" class="btn btn-block btn-danger"><i class="fa fa-sign-out"></i> Sair</a>

					<div class="divider">

					</div>
				</div>


			</div>


		</div>


	</body>

</html>
