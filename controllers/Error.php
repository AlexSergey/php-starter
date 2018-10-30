<?php
require_once(__DIR__.'/../init.php');

class ErrorController {
    static function errorAction() {
        global $slashtrace;
        try {
            throw new Exception('Test error');
        } catch (Exception $exception) {
            $slashtrace->handleException($exception);
        }
    }
}