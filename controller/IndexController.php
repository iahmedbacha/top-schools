<?php
class IndexController extends Controller {
    function index () {
        $this->loadModel('CategorieEcole');
        $categorieEcole = $this->CategorieEcole->get();
        $this->set(array(
            'categorieEcole' => $categorieEcole,
            'accueil' => true
        ));
        $this->render('index');
    }

    function apropos () {
        $this->render('apropos');
    }
}
?>