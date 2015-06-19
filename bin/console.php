<?php
require __DIR__.'/../vendor/autoload.php';

use Zend\Console\Console;
use ZF\Console\Application;
use ZF\Console\Dispatcher;

$version = '0.0.1';

$application = new Application(
    'Skeleton App',
    $version,
    include __DIR__ . '/../config/routes.php',
    Console::getInstance(),
    new Dispatcher()
);

$exit = $application->run();
exit($exit);
