<?php
class CategorieController extends Controller {
    function index () {
        header("Location: http://localhost".BASE_URL);
        exit();
    }

    function show ($params) {
        $this->loadModel('CategorieEcole');
        $categorieEcole = $this->CategorieEcole->get();
        $categorie = $this->CategorieEcole->getFirst(array(
            'conditions' => array(
                'id' => $params
            )
        ));
        $this->loadModel('Ecole');
        if (isset($_SESSION['user'])&&($_SESSION['user']->grade=='admin')) {
            $ecoles = $this->Ecole->get(array(
                'conditions' => array(
                    'id_categorie' => $params
                )
            ));
        }
        else {
            $ecoles = $this->Ecole->get(array(
                'conditions' => array(
                    'id_categorie' => $params,
                    'enligne' => 1
                )
            ));
        }
        
        $this->set(array(
            'categorieEcole' => $categorieEcole,
            'categorie' => $categorie,
            'id_categorie' => $params,
            'ecoles' => $ecoles
        ));
        if (isset($_SESSION['user'])&&($_SESSION['user']->grade=='admin')) {
            $this->render('showSuper');
        }
        else {
            $this->render('show');
        }
    }
}
?>