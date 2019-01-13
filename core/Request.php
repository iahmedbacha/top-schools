<?php
class Request {
    public $url; 
    function __construct() {
        $this->url = isset($_SERVER['PATH_INFO'])?$_SERVER['PATH_INFO']:'';
    }
}
?>