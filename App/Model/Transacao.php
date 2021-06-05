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
}
?>