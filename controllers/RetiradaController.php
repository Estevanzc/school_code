<?php
namespace Controller;
use Model\RetiradaModel;
use Model\LivroModel;
use Model\AlunoModel;
use Model\VO\RetiradaVO;
use Model\VO\LivroVO;
use Model\VO\AlunoVO;

final class RetiradaController extends Controller {
    public function list() {
        $model = new RetiradaModel();
        $retiradas = $model->selectAll(new RetiradaVO());
        $livros = (new LivroModel())->selectAll(new LivroVO());
        $this->loadView("listaRetiradas", [
            "retiradas" => $retiradas,
            "livros" => $livros
        ]);
    }
    public function form() {
        $retiradas = (new RetiradaModel())->selectAll(new RetiradaVO());
        $alunos = (new AlunoModel())->selectAll(new AlunoVO());
        $livros = (new LivroModel())->selectAll(new LivroVO());
        $this->loadView("formRetirada", [
            "retiradas" => $retiradas,
            "alunos" => $alunos,
            "livros" => $livros
        ]);
    }
    public function save() {
        $vo = new RetiradaVO("", (int) $_POST["aluno_id"], (int) $_POST["livro_id"], $_POST["retirada"], $_POST["devolucao"]);
        $model = new RetiradaModel();
        $return = $model->insert($vo);
        $this->redirect("retiradas.php");
    }
    public function remove() {
        $vo = new RetiradaVO($_GET["id"]);
        $model = new RetiradaModel();
        $result = $model->delete($vo);
        $this->redirect("retiradas.php");
    }
}
?>