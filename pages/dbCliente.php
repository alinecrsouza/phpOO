<?php

require_once "/../src/App/Cliente/Tipos/ClientePessoaFisica.php";
require_once "/../src/App/Cliente/Tipos/ClientePessoaJuridica.php";

use App\Cliente\Tipos\ClientePessoaFisica as ClientePessoaFisica;
use App\Cliente\Tipos\ClientePessoaJuridica as ClientePessoaJuridica;

$cliente[0] = new ClientePessoaFisica(1, "João", "000.000.000-00", "cliente1@email.com.br", "(21) 5555-0000", "Endereço 1", "Município", "RJ", "28900-000");
$cliente[1] = new ClientePessoaFisica(2, "Maria", "111.111.111-11", "cliente2@email.com.br", "(21) 5555-0001", "Endereço 2", "Município", "RJ", "28900-000");
$cliente[2] = new ClientePessoaFisica(3, "Pedro", "222.222.222-22", "cliente3@email.com.br", "(21) 5555-0002", "Endereço 3", "Município", "RJ", "28900-000");
$cliente[3] = new ClientePessoaJuridica(4, "Açougue Dois Irmãos", "37.366.725/0001-08", "cliente4@email.com.br", "(21) 5555-0003", "Endereço 4", "Município", "RJ", "28900-000");
$cliente[4] = new ClientePessoaFisica(5, "Lucas", "444.444.444-44", "cliente5@email.com.br", "(21) 5555-0004", "Endereço 5", "Município", "RJ", "28900-000");
$cliente[5] = new ClientePessoaJuridica(6, "Padaria Pão Nosso", "80.446.526/0001-39", "cliente6@email.com.br", "(21) 5555-0005", "Endereço 6", "Município", "RJ", "28900-000");
$cliente[6] = new ClientePessoaFisica(7, "Laura", "666.666.666-66", "cliente7@email.com.br", "(21) 5555-0006", "Endereço 7", "Município", "RJ", "28900-000");
$cliente[7] = new ClientePessoaFisica(8, "Vitor", "777.777.777-77", "cliente8@email.com.br", "(21) 5555-0007", "Endereço 8", "Município", "RJ", "28900-000");
$cliente[8] = new ClientePessoaJuridica(9, "Papelaria Cinco Cortes", "90.982.344/0001-36", "cliente9@email.com.br", "(21) 5555-0008", "Endereço 9", "Município", "RJ", "28900-000");
$cliente[9] = new ClientePessoaFisica(10, "Enzo", "999.999.999-99", "cliente10@email.com.br", "(21) 5555-0009", "Endereço 10", "Município","RJ", "28900-000");

$cliente[0]->setGrau(2);
$cliente[1]->setGrau(3);
$cliente[2]->setGrau(4);
$cliente[3]->setGrau(5);
$cliente[4]->setGrau(1);
$cliente[5]->setGrau(3);
$cliente[6]->setGrau(4);
$cliente[7]->setGrau(5);
$cliente[8]->setGrau(2);
$cliente[9]->setGrau(3);

$cliente[0]->setEnderecoCob("Endereço de Cobrança 1")
            ->setMunicipioCob("Município")
            ->setUfCob("RJ")
            ->setCepCob("28896-335");

$cliente[3]->setEnderecoCob("Endereço de Cobrança 2")
            ->setMunicipioCob("Município")
            ->setUfCob("SP")
            ->setCepCob("32896-389");

$cliente[7]->setEnderecoCob("Endereço de Cobrança 3")
            ->setMunicipioCob("Município")
            ->setUfCob("MG")
            ->setCepCob("45896-356");