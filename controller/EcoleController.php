<?php
class EcoleController extends Controller {
    function index () {
        header("Location: http://localhost".BASE_URL);
        exit();
    }

    function show ($params) {
        $this->loadModel('Ecole');
        $ecole = $this->Ecole->getFirst(array(
                'conditions' => array(
                    'id' => $params
            )
        ));
        $this->loadModel('TypeFormation');
        $typeFormation = $this->TypeFormation->get(array(
                'conditions' => array(
                    'id_ecole' => $params
            )
        ));
        $this->loadModel('Formation');
        $formations = $this->Formation->get();
        $this->set(array(
            'ecole' => $ecole,
            'typeFormation' => $typeFormation,
            'formations' => $formations
        ));
        $this->setLayout('simple');
        $this->render('show');
    }

    function show1 ($params) {
        $this->loadModel('Ecole');
        $ecoles = $this->Ecole->get(array(
                'conditions' => array(
                    'id_categorie' => $params
            )
        ));
        $this->set(array(
            'ecoles' => $ecoles
        ));
        $this->setLayout('simple');
        $this->render('show1');
    }


    function create ($params = null) {
        $this->loadModel('Ecole');
        $this->Ecole->insert(array(
                'values' => array(
                    'nom' => "'".$_POST['nom']."'",
                    'domaine' => isset($_POST['domaine'])?"'".$_POST['domaine']."'":'null',
                    'wilaya' => "'".$_POST['wilaya']."'",
                    'commune' => "'".$_POST['commune']."'",
                    'adresse' => "'".$_POST['adresse']."'",
                    'telephone' => "'".$_POST['telephone']."'",
                    'fax' => "'".$_POST['fax']."'",
                    'enligne' => isset($_POST['enligne'])?1:0,
                    'id_categorie' => $_POST['id_categorie']
            )
        ));
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }

    function update ($params) {
        $this->loadModel('Ecole');
        $this->Ecole->update(array(
            'values' => array(
                'nom' => "'".$_POST['nom']."'",
                'domaine' => isset($_POST['domaine'])?"'".$_POST['domaine']."'":'null',
                'wilaya' => "'".$_POST['wilaya']."'",
                'commune' => "'".$_POST['commune']."'",
                'adresse' => "'".$_POST['adresse']."'",
                'telephone' => "'".$_POST['telephone']."'",
                'fax' => "'".$_POST['fax']."'",
                'enligne' => isset($_POST['enligne'])?1:0
            ),
            'conditions' => array(
                'id' => "'".$_POST['id']."'"
            )
        ));
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }

    function destroy ($params) {
        $this->loadModel('Ecole');
        $this->Ecole->delete(array(
                'conditions' => array(
                    'id' => $params
            )
        ));
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
}
?>