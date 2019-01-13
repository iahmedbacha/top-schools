<?php
class CategorieController extends Controller {
    function index () {
        header("Location: http://localhost".BASE_URL);
        exit();
    }

    function show ($params) {
        $this->loadModel('CategorieEcole');
        $categorieEcole = $this->CategorieEcole->get();
        $this->loadModel('Ecole');
        $ecoles = $this->Ecole->get(array(
                'conditions' => array(
                    'id_categorie' => $params
            )
        ));

        $this->set(array(
            'categorieEcole' => $categorieEcole,
            'id_categorie' => $params,
            'ecoles' => $ecoles
        ));

        $this->render('show');
    }
}
?>