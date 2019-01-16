<?php
class FormationController extends Controller {
    function index () {
        $this->loadModel('Formation');
        $formations = $this->Formation->get();
        $this->set(array(
            'formations' => $formations
        ));
        $this->render('index');
    }

    function show ($params) {
        $this->loadModel('Formation');
        $formation = $this->Formation->getFirst(array(
            'conditions' => array(
                'id' => $params
            )
        ));
        $this->set(array(
            'formation' => $formation
        ));
        $this->render('show');
    }

    function show1 ($params) {
        $this->loadModel('TypeFormation');
        $typeFormation = $this->TypeFormation->get(array(
                'conditions' => array(
                    'id_ecole' => $params
            )
        ));
        $this->loadModel('Formation');
        $formations = $this->Formation->get();
        $this->set(array(
            'typeFormation' => $typeFormation,
            'formations' => $formations
        ));
        $this->setLayout('simple');
        $this->render('show1');
    }
}
?>