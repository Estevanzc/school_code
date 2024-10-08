<?php

namespace Controller;

use Model\DisciplinaModel;
use Model\VO\DisciplinaVO;

final class DisciplinaController extends Controller {

    public function list() {
        $model = new DisciplinaModel();
        $data = $model->selectAll(new DisciplinaVO());

        $this->loadView("listaDisciplinas", [
            "disciplinas" => $data
        ]);
    }

    public function form() {
        $id = $_GET["id"] ?? 0;

        if(!empty($id)) {
            $model = new DisciplinaModel();
            $vo = new DisciplinaVO($id);
            $disciplina = $model->selectOne($vo);
        } else {
            $disciplina = new DisciplinaVO();
        }

        $this->loadView("formDisciplina", [
            "disciplina" => $disciplina
        ]);
    }

    public function save() {
        $id = $_POST["id"];
        $vo = new DisciplinaVO($id, $_POST["nome"]);
        $model = new DisciplinaModel();

        if(empty($id)) {
            $result = $model->insert($vo);
        } else {
            $result = $model->update($vo);
        }

        $this->redirect("index.php");
    }

    public function remove() {
        $vo = new DisciplinaVO($_GET["id"]);
        $model = new DisciplinaModel();

        $result = $model->delete($vo);

        $this->redirect("index.php");
    }

}