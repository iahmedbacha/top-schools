<?php
class Dispatcher {
    var $request;

    function __construct() {
        $this->request = new Request();
        Router::parse($this->request);
        $name = ucfirst($this->request->controller).'Controller';
        $file = ROOT.DS.'controller'.DS.$name.'.php';
        if (file_exists($file)) {
            require_once $file;
            $controller = new $name($this->request);
            if (method_exists($controller, $this->request->action)) {
                if (!empty($this->request->params)) {
                    call_user_func_array(array($controller, $this->request->action), $this->request->params);
                }
                else {
                    if (!empty($_POST)) {
                        call_user_func_array(array($controller, $this->request->action), $_POST);
                    }
                    else {
                        $controller->{$this->request->action}();
                    }
                }
            }
            else {
                if (strlen($this->request->action) == 0) {
                    $this->request->controller->index();
                }
            }
        }
    }
}
?>