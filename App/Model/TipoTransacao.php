<?php
class TipoTransacao{
    private $idtransacao;
    private $tipo;

}
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



?>