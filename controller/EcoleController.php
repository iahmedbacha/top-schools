<?php
class EcoleController extends Controller {
    function index () {
        $this->loadModel('Ecole');
        $ecoles = $this->Ecole->get();
        $this->set(array(
            'ecoles' => $ecoles
        ));
        $this->render('index');
    }

    function show ($params) {
        $this->loadModel('Ecole');
        $ecole = $this->Ecole->getFirst(array(
                'conditions' => array(
                    'id' => $params
            )
        ));
        $this->set(array(
            'ecole' => $ecole
        ));
        $this->render('show');
    }

    function destroy ($params) {
        $this->loadModel('Ecole');
        $ecole = $this->Ecole->getFirst(array(
                'conditions' => array(
                    'id' => $params
            )
        ));
        $this->set(array(
            'ecole' => $ecole
        ));
        $this->render('show');
    }
}
?>