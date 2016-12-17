<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerNamespaces(
    [
        'Phalcon' => __DIR__ . '/../../vendor/phalcon/incubator/Library/Phalcon/',
        'PhalconMedias\Api\Controllers' => __DIR__ . '/../controllers/',
        'PhalconMedias\Api\Routes' => __DIR__ . '/../routes/',
        'PhalconMedias\Api\Models' => __DIR__ . '/../models/',
        'PhalconMedias\Api\Services' => __DIR__ . '/../services/',
    ])
    ->register();
