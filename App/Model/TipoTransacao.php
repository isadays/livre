<?php
class TipoTransacao{
    private $idtransacao;
    private $tipo;

public function setIDTransacao($idtransacao)
{
    $this->idtransacao = $idtransacao;
}
public function getIDTransacao()
{
    return $this-> idtransacao;
}
public function setTipo($tipo)
{
    $this->tipo = $tipo;
}
public function getTipo()
{
    return $this-> tipo;
}

// Metodo carregar Tipo Transacoes.
public function carregarTransacoes($tipo)
{
    require_once '../Config/ConexaoBD.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM tipo_transacao WHERE id = " . $idtransacao;
    $re = $conn->query($sql);
    $r = $re->fetch_object();
    if ($r != null) {
        $this->idtransacao = $r->idtransacao;
        $this->tipo = $r->tipo;

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
    require_once '../Config/ConexaoBD.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE tipo_transacoes SET 
    id = '" . $this->idtransacao . "',
    tipo = '" . $this->tipo . "',
    WHERE id = '" . $this->idtransacao . "'";

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
