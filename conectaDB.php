  <?php

class ConectaDB {

    public function getLink() {
        return mysqli_connect("mysql.hostinger.com.br","u978163328_root","lasombra","u978163328_fall");
        //return mysqli_connect("localhost","root","lasombra","fall");
    }

    public function getUsuario($login,$senha) {
      $con = $this->getLink();

			$stmt = $con->prepare("SELECT nome,email1,email2,email3,telefone1,telefone2 FROM usuarios as u WHERE u.login = ? and u.senha = ?");

			$stmt->bind_param("ss",$login,$senha);

			$stmt->execute();

			$stmt->bind_result($nome, $email1, $email2, $email3, $telefone1, $telefone2);

      $usuario = null;

			while ( $stmt->fetch() ) {
            $usuario = array("nome" => $nome, "email1" => $email1, "email2" => $email2, "email3" => $email3 , "telefone1" => $telefone1, "telefone2" => $telefone2);
      }

      return $usuario;
    }

    public function setUsuario($login, $senha, $nome, $email1, $email2, $email3,$telefone1,$telefone2) {
      $con = $this->getLink();

			if ($stmt = $con->prepare("INSERT INTO usuarios (login,senha,nome,email1,email2,email3) VALUES (?,?,?,?,?,?,?,?)") ) {
        $stmt->bind_param("ssssssss",$login,$senha,$nome,$email1,$email2,$email3,$telefone1,$telefone2);

        $stmt->execute();

        return true;
      }
      else {
        var_dump($con->error);
        return false;
      }

    }

}
