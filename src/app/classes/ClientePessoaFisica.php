<?php

namespace src\app\classes;

require_once "Cliente.php";

class ClientePessoaFisica extends Cliente
{
    protected $cpf;

    function __construct($id, $nome, $cpf, $email, $telefone, $endereco, $municipio, $uf, $cep){
        parent::__construct($id, $nome, $email, $telefone, $endereco, $municipio, $uf, $cep);
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

}