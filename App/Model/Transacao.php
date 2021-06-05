<?php 
class Transacao
{
    private $idtransacao;
    private $valor;
    private $data;
    private $tipo;
    private $id_usuario;
    private $id_livro;


public function setIDTransacao($idtransacao)
{
    $this->idtransacao = $idtransacao;
}
public function getIDTransacao()
{
    return $this-> idtransacao;
}

public function setValor($valor)
{
    $this->valor = $valor;
}
public function getValor()
{
    return $this-> valor;
}
public function setData($data)
{
    $this->data = $data;
}
public function getData()
{
    return $this-> data;
}
public function setIDUsuario($id_usuario)
{
    $this->IdUsuario = $id_usuario;
}
public function getIDUsuario()
{
    return $this-> id_usuario;
}
public function setIDLivro($id_livro)
{
    $this->id_livro = $id_livro;
}
public function getIDLivro()
{
    return $this-> id_livro;
}


public function inserirBD()
{
    require_once './ConexaoBD.php';

    $con = newConexaoBD();
    $conn = $con->conectar();
    if ($conn->connect_error) {
        die("Connection failed: $conn->connect_error");
    }

    $sql = "INSERT INTO transacoes (id_transacao, valor, data,tipo, id_usuario,id_livro) VALUES
        (
         '" . $this->idtransacao . "',
         '" . $this->valor . "',
         '" . $this->data . "',
         '" . $this->tipo . "',
         '" . $this->id_usuario . "',
         '" . $this->id_livro . "',
        )";
        
    if ($conn->query($sql) == TRUE) {
        $this->id = mysqli_insert_id($conn);
        $conn->close();
        return TRUE;
    }else {
        $conn->close();
        return FALSE;
    }
}

// Metodo carregar Transacoes.
public function carregarTransacoes($idtransacao)
{
    require_once './ConexaoBD.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM transacoes WHERE idtransacao = " . $idtransacao;
    $re = $conn->query($sql);
    $r = $re->fetch_object();
    if ($r != null) {
        $this->idtransacao = $r->idtransacao;
        $this->valor = $r->valor;
        $this->data = $r->data;
        $this->tipo = $r->tipo;
        $this->id_usuario = $r->id_usuario;
        $this->id_livro = $r->id_livro;

        $conn->close();
        return true;
    } else {
        $conn->close();
        return false;
    }
}

// Metodo atualizar banco de dados.
public function atualizarBD()
{
    require_once './ConexaoBD.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE transacoes SET 
    id_transacao = '" . $this->id_transacao . "',
    valor = '" . $this->valor. "',
    data = '" . $this->data . "',
    tipo = '" . $this->tipo . "',
    id_usuario = '" . $this->id_usuario . "',
    id_livro = '" . $this->id_livro . "',
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

?>