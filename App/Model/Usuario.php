<?php


class Usuario
{
    private  $id_usuario;
    private  $nome;
    private  $email;
    private  $senha;
    private  $celular;

    /**
     * @return 
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * @param $id_usuario
     */
    public function setIdUsuario( $id_usuario): void
    {
        $this->id_usuario = $id_usuario;
    }

    /**
     * @return 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param  $nome
     */
    public function setNome( $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return 
     */
    public function getEmail() 
    {
        return $this->email;
    }

    /**
     * @param  $email
     */
    public function setEmail( $email): void
    {
        $this->email = $email;
    }

    /**
     * @return 
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param  $senha
     */
    public function setSenha( $senha): void
    {
        $this->senha = $senha;
    }

    /**
     * @return 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * @param  $celular
     */
    public function setCelular( $celular): void
    {
        $this->celular = $celular;
    }

    public function inserirBD(): bool
    {
        require_once '/Applications/XAMPP/xamppfiles/htdocs/livre/App/Config/ConexaoBD.php';

        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: $conn->connect_error");
        }

        $sql = "INSERT INTO usuarios (nome, email, senha, celular) VALUES
            (
             '" . $this->nome . "',
             '" . $this->email . "',
             '" . $this->senha . "',
             '" . $this->celular . "',
            )";

        if ($conn->query($sql) == TRUE) {
            $this->id_usuario = mysqli_insert_id($conn);
            $conn->close();
            return TRUE;
        }else {
            $conn->close();
            return FALSE;
        }
    }

    // Metodo carregar usuário.
    public function carregarUsuario($email): bool
    {
        require_once '/Applications/XAMPP/xamppfiles/htdocs/livre/App/Config/ConexaoBD.php';

        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM usuario WHERE email = " . $email;
        $re = $conn->query($sql);
        $r = $re->fetch_object();
        if ($r != null) {
            $this->id_usuario = $r->id_usuario;
            $this->nome = $r->nome;
            $this->email = $r->email;
            $this->senha = $r->senha;
            $this->celular = $r->celular;

            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
    }

    // Metodo atualizar banco de dados.
    public function atualizarBD(): bool
    {
        require_once '/Applications/XAMPP/xamppfiles/htdocs/livre/App/Config/ConexaoBD.php';

        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE usuario SET 
        nome = '" . $this->nome . "',
        email = '" . $this->email . "',
        celular = '" . $this->celular . "', 
        WHERE id_usuario = '" . $this->id_usuario . "'";

        if ($conn->query($sql) === TRUE) {
            $conn->close();
            return TRUE;
        } else {
            $conn->close();
            return FALSE;
        }
    }
}