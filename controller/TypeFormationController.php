<?php
class TypeFormationController extends Controller {
    function index () {
        $this->loadModel('TypeFormation');
        $type_formation = $this->TypeFormation->get();
        $this->set(array(
            'type_formation' => $type_formation
        ));
        $this->render('index');
    }

    function show ($params) {
        $this->loadModel('TypeFormation');
        $type_formation = $this->TypeFormation->getFirst(array(
            'conditions' => array(
                'id' => $params
            )
        ));
        $this->set(array(
            'type_formation' => $type_formation
        ));
        $this->render('show');
    }
}
?>