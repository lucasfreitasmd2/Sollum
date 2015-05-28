<?php

require_once 'revelese.php';

class ReveleseDAO {

    private $host = '186.202.152.168';
    private $user = 'mukkema11';
    private $pass = 'mukk15';
    private $base = 'mukkema11';
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
                senha = '" . $objRevelese->getSenha() . "',
                nivel = 0
               ";

        $this->Conn->query($sql);
    }

    public function listaArquitetos($id) {
        if($id != 0){
            $where = 'AND idArquiteto != '.$id;
        }else{
            $where = '';
        }
        
        $sql = "SELECT * FROM arquitetos WHERE pasta != '' AND status = 1 ".$where;

        $banco = $this->Conn->query($sql);

        $linhas = array();
        while ($linha = $banco->fetch_array()) {
            $linhas[] = $linha;
        }

        return $linhas;
    }

    public function verificaArquiteto(Revelese $objArquiteto) {
        $sql = " SELECT * FROM arquitetos WHERE email = '" . $objArquiteto->getEmail() . "' ";

        $banco = $this->Conn->query($sql);

        $linha = $banco->num_rows;

        return $linha;
    }

    public function listaArquiteto1($idArquiteto) {
        $sql = "SELECT * FROM arquitetos WHERE idArquiteto = " . $idArquiteto;

        $banco = $this->Conn->query($sql);

        $linha = $banco->fetch_assoc();

        return $linha;
    }

}

$objReveleseDao = new ReveleseDAO();
