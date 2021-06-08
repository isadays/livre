<?php


class Usuario
{
    private mixed $id_usuario;
    private mixed $nome;
    private mixed $email;
    private mixed $senha;
    private mixed $celular;

    /**
     * @return mixed
     */
    public function getIdUsuario(): mixed
    {
        return $this->id_usuario;
    }

    /**
     * @param mixed $id_usuario
     */
    public function setIdUsuario(mixed $id_usuario): void
    {
        $this->id_usuario = $id_usuario;
    }

    /**
     * @return mixed
     */
    public function getNome(): mixed
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome(mixed $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail(): mixed
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail(mixed $email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSenha(): mixed
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha(mixed $senha): void
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getCelular(): mixed
    {
        return $this->celular;
    }

    /**
     * @param mixed $celular
     */
    public function setCelular(mixed $celular): void
    {
        $this->celular = $celular;
    }

    public function inserirBD(): bool
    {
        require_once 'App/Config/ConexaoBD.php';

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
        require_once 'App/Config/ConexaoBD.php';

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
        require_once 'App/Config/ConexaoBD.php';

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