<?php
/**
 * Created by PhpStorm.
 * User: aline.souza
 * Date: 30/11/2015
 * Time: 13:42
 */

namespace src\app\classes;


class ClientePessoaJuridica extends Cliente
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
}