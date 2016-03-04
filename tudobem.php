<?php
  //include('verificar_sessao.php');
?>
<!DOCTYPE html>
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

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
	</head>

	<body class="fundo3" onload="tocar()">
		<audio src="alarme.mp3" id="alarme" type="audio/mpeg" preload="auto"></audio>
		<audio src="alarme.ogg" id="alarme2" type="audio/ogg" preload="auto"></audio>
		
		<div class="container-fluid">

			<div class="row-fluid ">

				<div class="cor painel esquerda">
					<div class="divider">

					</div>
					<div class="alert alert-warning">
						<strong>Queda?</strong>
						Você está bem?
					</div>
					
						<a href="detectionfall.php" class="btn btn-lg btn-success"> <i class="fa fa-thumbs-up"></i> SIM</a>
						<a onclick="help()" class="btn btn-lg btn-danger"><i class="fa fa-thumbs-down"></i> NÃO</a>
					<div class="divider">

					</div>


				</div>


			</div>
			
		</div>
		
		<form name="escondido" method="post">
        <input type="hidden" id="latitude" name="latitude" value="" >
        <input type="hidden" id="longitude" name="longitude" value="" >
      	</form>

		<script type="text/javascript">

			function tocar() {
				navigator.vibrate(10000);
				document.getElementById("alarme").play();
				document.getElementById("alarme2").play();
				get_location();
			}
			
			var redirecionar = function(){

				get_location();

				document.forms["escondido"].action = "enviaremail.php";
        		document.forms["escondido"].submit();
			};	
			
			function help() {
				setTimeout(redirecionar,10);
			}

			function show_map(position) {
			  var latitude = position.coords.latitude;
			  var longitude = position.coords.longitude;
			  document.getElementById('latitude').value = latitude;
			  document.getElementById('longitude').value = longitude;
			}

			function get_location() {
    			if (navigator.geolocation) {
      				navigator.geolocation.getCurrentPosition(show_map);

   				}
	    		else {
	     			 window.location = "nossa.html";
	    		}

			}			
			setTimeout(redirecionar,10000);
			
		</script>
	</body>
	</html>