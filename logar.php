<?php
			session_start();
			$login = $_POST['login'];
			$senha =  $_POST['senha'];

			include("conectaDB.php");

			$mexerComBanco = new ConectaDB();

			$usuario = $mexerComBanco->getUsuario($login,$senha);

			//Se houver usuário cadastrado no banco redirecionar para detectionfall.php, se não, redirecionar para index.php
			if ( $usuario ) {
				$_SESSION['usuario'] = $usuario;
				header('location:detectionfall.php');
			}
			else {
				unset($_SESSION['usuario']);
				$_SESSION['erro'] = true;
				header('location:index.php');
			}
