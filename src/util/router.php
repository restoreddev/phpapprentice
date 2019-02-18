<?php
/**
 * Router file used for development server
 * to create html files on demand
 */
require __DIR__ . '/../../vendor/autoload.php';

load_config(__DIR__ . '/../../config.php');

$uri = $_SERVER['REQUEST_URI'];
$pathinfo = pathinfo($uri);

if ($pathinfo['dirname'] == '/' && !isset($pathinfo['extension'])) {
    $pathinfo['extension'] = 'html';
    $pathinfo['filename'] = 'index';
}

if ($pathinfo['extension'] == 'html') {
    $name = $pathinfo['filename'];
    if ($pathinfo['dirname'] != '/') {
        $name = ltrim($pathinfo['dirname'], '/') . '/' . $name;
    }

    $build = new Apprentice\Build;
    $output = $build->runSingleBuild($name);

    echo $output;

    return true;
}

return false;
