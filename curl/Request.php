<?php
class Request {
    private $client;
    private $format;
    public function __construct($url, $format = "JSON") {
        $this->client = curl_init ("https://viacep.com.br/ws/$url/json/");
        $this->format = $format;
        curl_setopt($this->client, CURLOPT_RETURNTRANSFER, true);
    }
    public function execute() {
        $return = curl_exec($this->client);
        switch ($this->format) {
            case "JSON":
                return json_decode($return, true);
                break;
            default:
                return $return;
        }
    }
    public function __destruct() {
        curl_close($this->client);
    }
}
?>