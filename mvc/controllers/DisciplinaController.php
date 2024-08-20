<?php
final class DiscplinaController extends Controller {
    public function list() {
        $model = new DisciplinaModel();
        $data = $model->selectAll(new DiscplinaVO());
        $this->loadView("listaDisciplinas", [
            "disciplinas" => $data
        ]);
    }
    public function form() {
    }
    public function save() {
    }
    public function remove() {
    }
}
?>