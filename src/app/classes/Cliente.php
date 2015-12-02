<?php
namespace src\app\classes;

require_once "EnderecoCobrancaInterface.php";

class Cliente implements EnderecoCobrancaInterface
{
    // Dados pessoais
    protected $id;
    protected $nome;
    protected $email;
    protected $telefone;
    // Endereço
    protected $endereco;
    protected $municipio;
    protected $uf;
    protected $cep;
    // Endereço Cobranca
    protected $enderecoCob;
    protected $municipioCob;
    protected $ufCob;
    protected $cepCob;

    //Grau de Importancia
    protected $grau;
    
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

    /**
     * @return mixed
     */
    public function getEnderecoCob()
    {
        return $this->enderecoCob;
    }

    /**
     * @param mixed $enderecoCob
     * @return Cliente
     */
    public function setEnderecoCob($enderecoCob)
    {
        $this->enderecoCob = $enderecoCob;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMunicipioCob()
    {
        return $this->municipioCob;
    }

    /**
     * @param mixed $municipioCob
     * @return Cliente
     */
    public function setMunicipioCob($municipioCob)
    {
        $this->municipioCob = $municipioCob;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUfCob()
    {
        return $this->ufCob;
    }

    /**
     * @param mixed $ufCob
     * @return Cliente
     */
    public function setUfCob($ufCob)
    {
        $this->ufCob = $ufCob;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCepCob()
    {
        return $this->cepCob;
    }

    /**
     * @param mixed $cepCob
     * @return Cliente
     */
    public function setCepCob($cepCob)
    {
        $this->cepCob = $cepCob;
        return $this;
    }


}
