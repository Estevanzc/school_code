<?php
namespace Controller;
use Model\AlunoModel;
use Model\VO\AlunoVO;

final class AlunoController extends Controller {
    public function list() {
        $model = new AlunoModel();
        $data = $model->selectAll(new AlunoVO());
        $this->loadView("listaAlunos", [
            "alunos" => $data
        ]);
    }
    public function form() {
        $id = $_GET["id"] ?? 0;
        $vo = new AlunoVO($id);
        if (!empty($id)) {
            $model = new AlunoModel();
            $aluno = $model->selectOne($vo);
        } else {
            $aluno = new AlunoVO();
        }
        $this->loadView("formAluno", [
            "aluno" => $aluno
        ]);
    }
    public function save() {
        $id = $_POST["id"];
        $vo = new AlunoVO($id, $_POST["nome"], (int) $_POST["matricula"]);
        $model = new AlunoModel();
        if (!empty($id)) {
            $result = $model->update($vo);
        } else {
            $return = $model->insert($vo);
        }
        $this->redirect("index.php");
    }
    public function remove() {
        $vo = new AlunoVO($_GET["id"]);
        $model = new AlunoModel();
        $result = $model->delete($vo);
        $this->redirect("index.php");
    }
}
?>