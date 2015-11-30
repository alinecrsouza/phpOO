<?php
namespace src\app\classes;

class Cliente
{
    // Dados pessoais
    private $id;
    private $nome;
    private $email;
    private $telefone;
    // Endereço
    private $endereco;
    private $municipio;
    private $uf;
    private $cep;
    
    function __construct($id, $nome, $email, $telefone, $endereco, $municipio, $uf, $cep)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->municipio = $municipio;
        $this->uf = $uf;
        $this->cep = $cep;
    }

    public function getId() {
        return $this->id;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getMunicipio() {
        return $this->municipio;
    }

    public function getUf() {
        return $this->uf;
    }

    public function getCep() {
        return $this->cep;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setMunicipio($municipio) {
        $this->municipio = $municipio;
    }

    public function setUf($uf) {
        $this->uf = $uf;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }
}
