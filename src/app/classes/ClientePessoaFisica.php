<?php
/**
 * Created by PhpStorm.
 * User: aline.souza
 * Date: 30/11/2015
 * Time: 13:42
 */

namespace src\app\classes;


class ClientePessoaFisica extends Cliente
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

}