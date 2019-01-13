<?php
class Session {

    public function __construct () {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    public function write ($key,$value) {
        $_SESSION[$key] = $value;
    }

    public function read ($key = null) {
        if ($key) {
            if (isset($_SESSION[$key])) {
                return $_SESSION[$key];
            }
            else {
                return false;
            }
        }
        else {
            return $_SESSION;
        }
    }

    public function destroy () {
        session_destroy();
    }

    public function isLogged() {
        return isset($_SESSION["user"]->id);
    }
}
?>