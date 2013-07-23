<?php
error_reporting(-1);
ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/AppKernel.php';

$kernel = new AppKernel();
$kernel->configure();

set_error_handler(function($c, $s, $f, $l) {
    throw new \Framework\Exception($s);
});

try {
    echo $kernel->run($_SERVER['REQUEST_URI']);
} catch(\Framework\NotFoundException $e) {
    include __DIR__ . '/error404.php';
} catch(Exception $e) {
    if (true === \Framework\Registry::get('config')['display_errors']) {
        echo '<pre>', $e->getMessage(), '<br>', $e->getTraceAsString(), '</pre>';
    }
}