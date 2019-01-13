<?php
class Router {
    static function parse($request) {
        $url = $request->url;
        $url = trim($url, '/');
        $params = explode('/', $url);
        $request->controller = strlen($params[0])!=0 ? $params[0] : 'index';
        $request->action = isset($params[1]) ? $params[1] : 'index';
        $request->params = array_slice($params, 2);
    }
}
?>