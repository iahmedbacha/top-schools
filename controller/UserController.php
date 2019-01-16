<?php
class UserController extends Controller {
    function index () {
        $this->loadModel('CategorieEcole');
        $categorieEcole = $this->CategorieEcole->get();
        $this->loadModel('User');
        $users = $this->User->get();
        $this->set(array(
            'categorieEcole' => $categorieEcole,
            'users' => $users
        ));
        $this->render('index');
    }

    function login ($params = null) {
        $this->loadModel('User');
        $user = $this->User->getFirst(array(
            'conditions' => array(
                'username' => "'".$_POST['username']."'",
                'password' => "'".$_POST['password']."'"
            )
        ));
        if (!empty($user)) {
            $this->session->write('user',$user);
        }
        header("Location: http://localhost".BASE_URL);
        exit();
    }

    function logout () {
        $this->session->destroy();
        header("Location: http://localhost".BASE_URL);
        exit();
    }

    function create ($params = null) {
        $this->loadModel('User');
        $this->User->insert(array(
            'values' => array(
                'nom' => "'".$_POST['nom']."'",
                'prenom' => "'".$_POST['prenom']."'",
                'username' => "'".$_POST['username']."'",
                'password' => "'".$_POST['password']."'",
                'grade' => "'".$_POST['grade']."'",
                'id_ecole' => $_POST['id_ecole']!=""?$_POST['id_ecole']:'null'
            )
        ));
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }

    function update ($params) {
        $this->loadModel('User');
        $this->User->update(array(
            'values' => array(
                'nom' => "'".$_POST['nom']."'",
                'prenom' => "'".$_POST['prenom']."'",
                'username' => "'".$_POST['username']."'",
                'password' => "'".$_POST['password']."'",
                'grade' => "'".$_POST['grade']."'",
                'permission' => isset($_POST['permission'])?1:0,
                'id_ecole' => isset($_POST['id_ecole'])?$_POST['id_ecole']:'null'
            ),
            'conditions' => array(
                'id' => $_POST['id']
            )
        ));
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }

    function destroy ($params) {
        $this->loadModel('User');
        $this->User->delete(array(
                'conditions' => array(
                    'id' => $params
            )
        ));
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
}
?>