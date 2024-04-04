<?php
require_once("Serie.php");
class EstatiscasDeSeries {
    static function obterDuracaoTotalDaSerie($serie) {
        $ep_num = 0;
        foreach ($serie->temporadas as $temporada) {
            foreach ($temporada->episodios as $episodio) {
                $ep_num += $episodio->duracao;
            }
        }
        return $ep_num;
    }
    static function obterTotalDeEpisodios($serie) {
        $ep_num = 0;    
        foreach ($serie->temporadas as $temporada) {
            $ep_num += count($temporada->episodios);
        }
        return $ep_num;
    }
    static function obterPaisesAtoresPersonagens($serie) {
        $emp_count = [];
        foreach ($serie->personagem as $personagem) {
            $emp = $personagem->ator;
            if (isset($emp_count["$emp->pais"])) {
                $emp_count["$emp->pais"] ++;
            } else {
                $emp_count["$emp->pais"] = 1;
            }
        }
        return $emp_count;
    }
}
?>