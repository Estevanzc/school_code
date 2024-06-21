    <?php
    class Request {
        private $client;
        private $format;
        public function __construct($location_number, $format = "JSON") {
            $this->client = curl_init ("http://servicos.cptec.inpe.br/XML/cidade/7dias/$location_number/previsao.xml");
            $this->format = $format;
            curl_setopt($this->client, CURLOPT_RETURNTRANSFER, true);
        }
        public function execute() {
            $return = curl_exec($this->client);
            switch ($this->format) {
                case "JSON":
                    return json_decode($return);
                case "XML":
                    return simplexml_load_string($return);
                default:
                    return $return;
            }
        }
        public function isSuccess() {
            $code = curl_getinfo($this->client, CURLINFO_HTTP_CODE);
            return ($code >= 200 && $code <= 299);
        }
        public function __destruct() {
            curl_close($this->client);
        }
    }
    ?>