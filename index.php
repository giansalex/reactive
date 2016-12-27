<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 27/12/2016
 * Time: 02:56 PM
 */
require_once 'vendor/autoload.php';

$source = \Rx\Observable::fromArray([1, 2, 3, 4, 5]);

$subscription = $source->subscribe(new \Rx\Observer\CallbackObserver(
    function ($x) {
        echo 'Next: ', $x, '<br/>';
    },
    function (Exception $ex) {
        echo 'Error: ', $ex->getMessage(), PHP_EOL;
    },
    function () {
        echo 'Completed', PHP_EOL;
    }
));