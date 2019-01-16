<?php
class ComparaisonController extends Controller {
    function index ($params = null) {
        $this->loadModel('CategorieEcole');
        $categorieEcole = $this->CategorieEcole->get();
        $this->set(array(
            'categorieEcole' => $categorieEcole
        ));
        $this->setLayout('simple');
        $this->render('index');
    }
}
?>