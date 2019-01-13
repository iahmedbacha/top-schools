<?php
class ReponseController extends Controller {
	function index() {
		header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
	}

	function create ($params = null) {
        $this->loadModel('Reponse');
        $this->Reponse->insert(array(
                'values' => array(
                    'contenu' => "'".str_replace("'","\'",$_POST['contenu'])."'",
                    'id_user' => "'".$_POST['id_user']."'",
                    'id_commentaire' => "'".$_POST['id_commentaire']."'"
            )
        ));
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }

    function destroy ($params = null) {
        $this->loadModel('Reponse');
        $this->Reponse->delete(array(
                'conditions' => array(
                    'id' => $params
            )
        ));
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
}