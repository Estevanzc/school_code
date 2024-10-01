<?php
namespace Controller;
use Model\LivroModel;
use Model\RetiradaModel;
use Model\VO\LivroVO;
use Model\VO\RetiradaVO;

final class LivroController extends Controller {
    public function list() {
        $model = new LivroModel();
        $data = $model->selectAll(new LivroVO());
        $retiradas = (new RetiradaModel())->selectAll(new RetiradaVO());
        $this->loadView("listaLivros", [
            "livros" => $data,
            "retiradas" => $retiradas
        ]);
    }
    public function form() {
        $id = $_GET["id"] ?? 0;
        $vo = new LivroVO($id);
        if (!empty($id)) {
            $model = new LivroModel();
            $livro = $model->selectOne($vo);
        } else {
            $livro = new LivroVO();
        }
        $retiradas = (new RetiradaModel())->selectAll(new RetiradaVO());
        $this->loadView("formLivro", [
            "livro" => $livro,
            "retiradas" => $retiradas
        ]);
    }
    public function save() {
        $id = $_POST["id"];
        $vo = new LivroVO($id, $_POST["titulo"], $_POST["autores"], $_POST["editora"], $_POST["ano"], (int) $_POST["quantidade"], $_POST["ISBN"]);
        $model = new LivroModel();
        if (!empty($id)) {
            $result = $model->update($vo);
        } else {
            $return = $model->insert($vo);
        }
        $this->redirect("livros.php");
    }
    public function remove() {
        $vo = new LivroVO($_GET["id"]);
        $model = new LivroModel();
        $result = $model->delete($vo);
        $this->redirect("livros.php");
    }
}
?>