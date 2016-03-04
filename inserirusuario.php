<?php
			session_start();
			$login = $_POST['nlogin'];
			$senha =  $_POST['nsenha'];
      $nome = $_POST['nnome'];
      $email1 = $_POST['email_um'];
      $email2 = $_POST['email_dois'];
      $email3 = $_POST['email_tres'];
      $telefone1 = $_POST['telefone1'];
      $telefone2 = $_POST['telefone2'];

			include("conectaDB.php");

			$mexerComBanco = new ConectaDB();

			$ok = $mexerComBanco->setUsuario($login,$senha,$nome,$email1,$email2,$email3,$telefone1,$telefone2);

      if ($ok) {
        $_SESSION['usuarioInserido'] = true;
        header('location:index.php');
      }
      else {
        header('location:index.php');
      }
