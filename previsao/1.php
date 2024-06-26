<?php
require_once("Request.php");
$city_name = $_POST["city_name"];
$city_name = mb_strtolower($city_name, "UTF-8");
$city_name = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $city_name);
$city_name = preg_replace('/[^A-Za-z0-9 ]/', '', $city_name);
$curl = curl_init("http://servicos.cptec.inpe.br/XML/listaCidades?city=" . rawurlencode($city_name));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$return = curl_exec($curl);
$return = simplexml_load_string($return);
$city_code;
foreach ($return->cidade as $city) {
    $name = $city->nome;
    $name = mb_strtolower($name, "UTF-8");
    $name = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $name);
    $name = preg_replace('/[^A-Za-z0-9 ]/', '', $name);
    if ($name == $city_name) {
        $city_code = (int) $city->id;
        break;
    }
}
$data = new Request($city_code, "XML");
$data_info = $data->execute();
foreach ($data_info->previsao as $day_data) {
    echo ("
    <p><strong>Previsão para o dia " . $day_data->dia . ":</strong></p>
    <ul>
    <li><strong>Temp Máxima:</strong> " . $day_data->maxima . "°C</li>
    <li><strong>Temp Mínima:</strong> " . $day_data->minima . "°C</li>
    </ul>
    <br>
    ");
}
