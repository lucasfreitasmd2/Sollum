<?php
class Revelese{
    private $idRevelese;
    private $nome;
    private $email;
    private $telefone;
    private $cidade;
    private $estado;
    private $curriculo;
    private $senha;
    
    public function getIdRevelese() {
        return $this->idRevelese;
    }
    public function setIdRevelese($idRevelese) {
        $this->idRevelese = $idRevelese;
    }
    

    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    

    public function getTelefone() {
        return $this->telefone;
    }
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    

    public function getCidade() {
        return $this->cidade;
    }
    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }
    

    public function getEstado() {
        return $this->estado;
    }
    public function setEstado($estado) {
        $this->estado = $estado;
    }

    
    public function getCurriculo() {
        return $this->curriculo;
    }
    public function setCurriculo($curriculo) {
        $this->curriculo = $curriculo;
    }


    public function getSenha() {
        return $this->senha;
    }
    public function setSenha($senha) {
        $this->senha = $senha;
    }


}

$objRevelese = new Revelese();