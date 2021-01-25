<?php

namespace taia\ConsultaCep;

class Search{
    // url ViaCep
    private $url = "http://viacep.com.br/ws/";

    public function getAddressFromZipcode(string $zipCode): array {
        // retira o traço do cep, caso o usuário tenha inserido
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        $get = file_get_contents($this -> url . $zipCode . "/json");

        // transforma o retorno de json em uma array e retorna
        return (array) json_decode($get);
    }
}