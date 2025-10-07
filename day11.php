<?php

$f = spl_autoload_register(function($class_name) {
    include 'classes/'.$class_name . '.php';
});

$f = new first();
$f->display();

$s = new second();
$s->display();

$d = new day();
$d->run();

?>