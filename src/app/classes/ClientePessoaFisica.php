<?php

namespace src\app\classes;

require_once "Cliente.php";
require_once "GrauImportanciaInterface.php";

class ClientePessoaFisica extends Cliente implements GrauImportanciaInterface
{
    private $cpf;

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

    /**
     * @return mixed
     */
    public function getGrau()
    {
        return $this->grau;
    }

    /**
     * @param mixed $grau
     */
    public function setGrau($grau)
    {
        $this->grau = $grau;
    }

}