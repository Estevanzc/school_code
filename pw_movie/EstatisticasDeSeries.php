<?php
//require_once("Serie.php");
class EstatiscasDeSeries {
    static function obterDuracaoTotalDaSerie($serie) {
        $ep_num = 0;
        foreach ($serie->getTemporada() as $temporada) {
            foreach ($temporada->getEpisodios() as $episodio) {
                $ep_num += $episodio->getDuracao();
            }
        }
        return $ep_num;
    }
    static function obterTotalDeEpisodios($serie) {
        $ep_num = 0;    
        foreach ($serie->getTemporada() as $temporada) {
            $ep_num += count($temporada->getEpisodios());
        }
        return $ep_num;
    }
    static function obterPaisesAtoresPersonagens($serie) {
        $emp_count = [];
        foreach ($serie->getPersonagens() as $personagem) {
            $emp = $personagem->getAtor();
            $country = $emp->getPais();
            if (isset($emp_count["$country"])) {
                $emp_count["$country"] ++;
            } else {
                $emp_count["$country"] = 1;
            }
        }
        return $emp_count;
    }
}
?>