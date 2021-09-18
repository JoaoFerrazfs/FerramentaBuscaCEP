<?php



namespace joaoferraz\cep;
    

    class Search{
    private $url = "https://ws.apicep.com/cep/";
    

    public function getAddresFromIpCode(string $zipCode): array{

        $zipCode = preg_replace('/[^0-9]/im','',$zipCode);
        $get = file_get_contents($this->url.$zipCode .".json");
        
        return(array) json_decode(($get));
    
    }

}

?>