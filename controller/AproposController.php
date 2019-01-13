<?php
class AproposController extends Controller {
    function index () {
    	$this->loadModel('CategorieEcole');
        $categorieEcole = $this->CategorieEcole->get();
        $this->set(array(
            'categorieEcole' => $categorieEcole,
        ));
        
        $this->render('index');
    }
}
?>