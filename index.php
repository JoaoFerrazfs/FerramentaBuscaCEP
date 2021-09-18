<?php
require_once 'vendor/autoload.php';
//require_once './src/Search.php';

use joaoferraz\cep\Search;



$searchcep = new Search;

$result = $searchcep->getAddresFromIpCode('32900000');

print_r($result);

?>