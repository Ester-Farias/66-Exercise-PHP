<?php

    require __DIR__ . '/vendor/autoload.php';
    use \App\Image\Resize;
    $obResize = new Resize(__DIR__ . 'uplouds/EsterSouza.png');

    print_r($obResize);
    exit;

?>