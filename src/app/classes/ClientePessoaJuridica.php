<?php

namespace src\app\classes;


class ClientePessoaJuridica extends Cliente implements GrauImportanciaInterface
{
    private $cnpj;

    function __construct($id, $nome, $cnpj, $email, $telefone, $endereco, $municipio, $uf, $cep){
        parent::__construct($id, $nome, $email, $telefone, $endereco, $municipio, $uf, $cep);
        $this->cnpj = $cnpj;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
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