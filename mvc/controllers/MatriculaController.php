<?php

namespace Controller;

use Model\MatriculaModel;
use Model\VO\MatriculaVO;
use Model\AlunoModel;
use Model\VO\AlunoVO;
use Model\DisciplinaModel;
use Model\VO\DisciplinaVO;

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

        if(empty($id)) {
            $vo = new MatriculaVO();
        } else {
            $model = new MatriculaModel();
            $vo = $model->selectOne(new MatriculaVO($id));
        }

        $alunoModel = new AlunoModel();
        $alunos = $alunoModel->selectAll(new AlunoVO());

        $disciplinaModel = new DisciplinaModel();
        $disciplinas = $disciplinaModel->selectAll(new DisciplinaVO());

        $this->loadView("formMatricula", [
            "matricula" => $vo,
            "alunos" => $alunos,
            "disciplinas" => $disciplinas
        ]);
    }

    public function save() {
        $model = new MatriculaModel();
        $vo = new MatriculaVO($_POST["id"], $_POST["idDisciplina"], $_POST["idAluno"], $_POST["ano"]);
        
        if(empty($_POST["id"])) {
            $result = $model->insert($vo);
        } else {
            $result = $model->update($vo);
        }

        $this->redirect("matriculas.php");
    }

    public function remove() {
        $vo = new DisciplinaVO($_GET["id"]);
        $model = new DisciplinaModel();

        $result = $model->delete($vo);

        $this->redirect("matriculas.php");
    }

}