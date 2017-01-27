<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . "/_controller/Home.php";
require_once __DIR__ . "/_controller/SpringFair.php";
require_once __DIR__ . "/_controller/Experience.php";
require_once __DIR__ . "/_controller/Contact.php";


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

$klein->respond('GET', '/experience', function () {
    $sf = new Experience;
    $sf->render("/experience");
});

$klein->respond('GET', '/contact', function () {
    $sf = new Contact;
    $sf->render("/contact");
});


/**************** main ************************/

$klein->dispatch();
