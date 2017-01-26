<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . "/_controller/Home.php";
require_once __DIR__ . "/_controller/SpringFair.php";

/**************** var ************************/

$klein = new \Klein\Klein();


/**************** routes ************************/

$klein->respond('GET', '/', function () {
    $home = new Home;
    $home->render("/home");
});

$klein->respond('GET', '/projects/spring-fair', function () {
    $sf = new SpringFair;
    $sf->render("/projects/spring-fair");
});


/**************** main ************************/

$klein->dispatch();
