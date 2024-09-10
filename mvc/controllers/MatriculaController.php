<?php
namespace Controller;
use Model\MatriculaModel;
use Model\VO\MatriculaVO;

final class MatriculaController extends Controller {
    public function list() {
        $model = new MatriculaModel();
        $data = $model->selectAll(new MatriculaVO());
        $this->loadView("listaMatriculas", [
            "matriculas" => $data
        ]);
    }
    public function form() {
        $id = $_GET["id"] ?? 0;
        $vo = new MatriculaVO($id);
        if (!empty($id)) {
            $model = new MatriculaModel();
            $matricula = $model->selectOne($vo);
        } else {
            $matricula = new MatriculaVO();
        }
        $this->loadView("formMatricula", [
            "matricula" => $matricula
        ]);
    }
    public function save() {
    }
    public function remove() {
    }
}
?>