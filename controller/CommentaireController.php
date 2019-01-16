<?php
class CommentaireController extends Controller {
    function index ($params) {
        $this->loadModel('Ecole');
        $ecole = $this->Ecole->getFirst(array(
                'conditions' => array(
                    'id' => $params
            )
        ));
        $this->loadModel('User');
        $commentaires = $this->User->getLeftJoin(array(
            'table' => 'Commentaire',
            'onConditions' => array(
                'Commentaire.id_user' => 'User.id'
            ),
            'conditions' => array(
                'Commentaire.id_ecole' => $params
            )
        ));
        $this->loadModel('User');
        $reponses = $this->User->getLeftJoin(array(
            'table' => 'Reponse',
            'onConditions' => array(
                'Reponse.id_user' => 'User.id'
            )
        ));
        $this->set(array(
            'ecole' => $ecole,
            'commentaires' => $commentaires,
            'reponses' => $reponses
        ));
        $this->setLayout('simple');
        $this->render('index');
    }

    function show1 ($params) {
        $this->loadModel('User');
        $commentaires = $this->User->getLeftJoin(array(
            'table' => 'Commentaire',
            'onConditions' => array(
                'Commentaire.id_user' => 'User.id'
            ),
            'conditions' => array(
                'Commentaire.id_ecole' => $params
            )
        ));
        $this->set(array(
            'commentaires' => $commentaires
        ));
        $this->setLayout('simple');
        $this->render('show1');
    }

    function create ($params = null) {
        $this->loadModel('Commentaire');
        $this->Commentaire->insert(array(
                'values' => array(
                    'contenu' => "'".str_replace("'","\'",$_POST['contenu'])."'",
                    'id_user' => "'".$_POST['id_user']."'",
                    'id_ecole' => "'".$_POST['id_ecole']."'"
            )
        ));
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }

    function destroy ($params) {
        $this->loadModel('Commentaire');
        $this->Commentaire->delete(array(
                'conditions' => array(
                    'id' => "'".$_POST['id']."'"
            )
        ));
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
}
?>