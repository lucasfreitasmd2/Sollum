<?php
require_once 'arquiteto.php';

class Admin {

    private $host = '186.202.152.168';
    private $user = 'mukkema11';
    private $pass = 'mukk15';
    private $base = 'mukkema11';
    private $Conn;

    function __construct() {
        $this->Conn = new mysqli($this->host, $this->user, $this->pass, $this->base);
    }

    public function listaArquiteto($filtro = NULL) {
        if($filtro == NULL){
            $where = '';
        }else{
            $where = 'WHERE status = '.$filtro;
        }
        
        $sql = "SELECT * FROM arquitetos ".$where;
        
        $banco = $this->Conn->query($sql);
        
        $linhas = array();
        while ($linha = $banco->fetch_array()){
            $linhas[] = $linha;
        }
        
        return $linhas;
    }
    
    
    public function aprovarArquiteto(Arquiteto $objArquiteto){
        $sql = "UPDATE arquitetos SET
                status = 1,
                senha = md5('".$objArquiteto->getSenha()."')
                WHERE idArquiteto = ".$objArquiteto->getIdArquiteto();
        
        $this->Conn->query($sql);
    }
    
    
    public function excluirArquiteto(Arquiteto $objArquiteto){
        $sql = "DELETE FROM arquitetos WHERE idArquiteto = ".$objArquiteto->getIdArquiteto();
        
        $this->Conn->query($sql);
    }
    
    public function verArquiteto1(Arquiteto $objArquiteto){
        $sql = "SELECT * FROM arquitetos WHERE idArquiteto = ".$objArquiteto->getIdArquiteto();
        
        $banco = $this->Conn->query($sql);
        
        $linha = $banco->fetch_assoc();
        return $linha;
    }
    
    
    public function verificaLogin(Arquiteto $objArquiteto){
        $sql = "SELECT * FROM arquitetos WHERE email = '".$objArquiteto->getEmail()."' AND senha = MD5('".$objArquiteto->getSenha()."')";
        
        $banco = $this->Conn->query($sql);
        
        
        if($banco->num_rows > 0){
        $linha = $banco->fetch_assoc();
        } else{
            $linha = 0;
        }
        return $linha;
    }

    
    public function countFotos(Arquiteto $objArquiteto){
        echo $sql = "SELECT count(*) AS quantidade
                    FROM arquitetos a 
                    JOIN trabalhos t ON t.idArquiteto = a.idArquiteto
                    WHERE a.email = '".$objArquiteto->getEmail()."'";
        
        $banco = $this->Conn->query($sql);
        
        $linha = $banco->fetch_assoc();
        $linha = $linha['quantidade'];
        
        return $linha;
    }
}

$objAdminDao = new Admin();
