<?php

declare(strict_types=1);

use  PHPUnit\Framework\TestCase;
use joaoferraz\cep\Search;




class SearchTest extends TestCase
{

    /**
     * @dataProvider dadosTeste()
     */


    public function testGetAddresFromIpCodeDefaultUse(string $input, array $esperado)
    {
        $resultado = new Search;
        $resultado = $resultado->getAddresFromIpCode($input);


        $this->assertEquals($esperado, $resultado);
    }

    public function dadosTeste()
    {
        return [
            "Igarapé" => [
                "32900000",
                [
                    "cep" => "32900-000",
                    "logradouro" => "",
                    "complemento" => "",
                    "bairro" => "",
                    "localidade" => "Igarapé",
                    "uf" => "MG",
                    "ibge" => "3130101",
                    "gia" => "",
                    "ddd" => "31",
                    "siafi" => "4601"
                ],
            ],
            "Praça da Sé" => [

                "01001-000",
                [
                    'cep' => '01001-000',
                    'logradouro' => 'Praça da Sé',
                    'complemento' => 'lado ímpar',
                    'bairro' => 'Sé',
                    'localidade' => 'São Paulo',
                    'uf' => 'SP',
                    'ibge' => '3550308',
                    'gia' => '1004',
                    'ddd' => '11',
                    'siafi' => '7107'
                ],

            ],
        ];
    }
}
