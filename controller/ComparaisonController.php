<?php
class IndexController extends Controller {
    function index () {
        $this->loadModel('Ecole');
        $ecole1 = $this->CategorieEcole->get(array(
                'conditions' => array(
                    'id' => $params
            ));
        $this->set(array(
            'ecole1' => $ecole1,
            'ecole2' => $ecole2
        ));
        $this->render('index');
    }

    function apropos () {
        $this->render('apropos');
    }
}
?>