<?php
require_once(__DIR__.'/../init.php');

class IndexController {
    static function indexAction() {
        global $blade;
        echo $blade->run('index', ['username' => 'My beautiful username']);
    }
}