<?php
    //phpinfo();
    require __DIR__ . '/vendor/autoload.php';
    use \App\Image\Resize;
    $obResize = new Resize(__DIR__ . '/img/EsterSouza.png');
    echo "<pre>";
    print_r($obResize);
    echo "</pre>";exit;

?>