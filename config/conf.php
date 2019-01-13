<?php
class Conf {
    static $db = array(
        'default' => array(
            'host' => 'localhost',
            'dbname' => 'ecolecomparateur',
            'username' => 'root',
            'password' => '',
            'options' => array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            )
        )
    );
}
?>