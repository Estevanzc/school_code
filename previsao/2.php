<?php
$curl = curl_init("http://servicos.cptec.inpe.br/XML/listaCidades?city=sao%20paulo");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$return = curl_exec($curl);
$return = simplexml_load_string($return);
print_r($return);