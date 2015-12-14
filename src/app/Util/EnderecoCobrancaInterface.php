<?php

namespace App\Util;

interface EnderecoCobrancaInterface
{
    public function getEnderecoCob();
    public function setEnderecoCob($enderecoCob);
    public function getMunicipioCob();
    public function setMunicipioCob($municipioCob);
    public function getUfCob();
    public function setUfCob($ufCob);
    public function getCepCob();
    public function setCepCob($cepCob);
}