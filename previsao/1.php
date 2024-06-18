<?php
require_once("Request.php");
$city_name = "São Paulo";
$city_name = mb_strtolower($city_name, "UTF-8");
//$city_name = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $city_name);
$city_name = Normalizer::normalize($city_name, Normalizer::FORM_D);
$city_name = preg_replace('/\p{Mn}/u', '', $city_name);
echo ($city_name);/*
$curl = curl_init("http://servicos.cptec.inpe.br/XML/listaCidades?city=sao%20paulo");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$return = curl_exec($curl);
$return = simplexml_load_string($return);
print_r($return);
$data = new Request($city_code, "XML");
$data_info = $data->execute();
foreach($data_info->previsao as $day_data) {
    echo ("
    <p><strong>Previsão para o dia ".$day_data->dia.":</strong></p>
    <ul>
    <li><strong>Temp Máxima:</strong> ".$day_data->maxima."°C</li>
    <li><strong>Temp Mínima:</strong> ".$day_data->minima."°C</li>
    </ul>
    <br>
    ");
}*/