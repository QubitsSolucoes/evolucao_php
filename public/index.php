<?php

define('APP_PATH',__DIR__.'/../');

require APP_PATH . '/vendor/autoload.php';


/*include APP_PATH . 'lib/Ps4AutoloaderClass.php';

$loader = new Psr4AutoloaderClass();

$loader->addNamespace('SON\Teste','src');
$loader->register();*/

/*include APP_PATH . 'lib/SplClassLoader.php';

$loader = new SplClassLoader('Guzzle','lib/vendor/guzzle/src');
$loader->register();

$loader = new SplClassLoader('SON','src');
$loader->register();*/

include APP_PATH . 'src/index.php';