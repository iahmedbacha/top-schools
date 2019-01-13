<?php
class Controller {
    public $request;
    public $params;
    public $layout;
    public $session;

    function __construct ($request) {
        $this->request = $request;
        $this->params = array();
        $this->layout = 'default';
        $this->session = new Session();
    }

    public function render ($view) {
        $user = isset($_SESSION['user'])?$_SESSION['user']:null;
        extract($this->params);
        if (!($this->request->controller=='index')) {
            $view = ROOT.DS.'view'.DS.$this->request->controller.DS.$view.'.php';
        }
        else {
            $view = ROOT.DS.'view'.DS.$view.'.php';
        }
        ob_start();
        require $view;
        $content_for_layout = ob_get_clean();
        $layout = ROOT.DS.'view'.DS.'layout'.DS.$this->layout.'.php';
        require $layout;
    }

    public function set ($params) {
        $this->params = $params;
    }

    public function setLayout ($layout) {
        $this->layout = $layout;
    }

    public function loadModel ($name) {
        $file = ROOT.DS.'model'.DS.$name.'.php';
        require_once $file;
        if (!isset($this->$name)) {
            $this->$name = new $name();
        }
    }

    public function loadSession () {
        $this->$session = new Session();
    }
}
?>