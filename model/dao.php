<?php

require_once 'revelese.php';

class ReveleseDAO {

    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $base = '';
    private $Conn;

    function __construct() {
        $this->Conn = new mysqli($this->host, $this->user, $this->pass, $this->base);
    }

    public function cadArquiteto(Revelese $objRevelese) {
        $sql = "INSERT INTO arquitetos SET
                nome = '" . $objRevelese->getNome() . "',
                email = '" . $objRevelese->getEmail() . "',
                telefone = '" . $objRevelese->getTelefone() . "',
                cidade = '" . $objRevelese->getCidade() . "',
                estado = '" . $objRevelese->getEstado() . "',
                curriculo = '" . $objRevelese->getCurriculo() . "',
                status = 0,
                senha = '" . $objRevelese->getSenha() . "'
               ";

        $this->Conn->query($sql);
    }

    public function listaArquiteto() {
        $sql = "SELECT * FROM arquitetos a JOIN imagens i ON i.idArquiteto = a.idArquiteto ";
        
        $banco = $this->Conn->query($sql);
        
        $linhas = array();
        while ($linha = $banco->fetch_array()){
            $linhas[] = $linha;
        }
        
        return $linhas;
    }

}

$objReveleseDao = new ReveleseDAO();
