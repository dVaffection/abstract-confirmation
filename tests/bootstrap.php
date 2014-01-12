<?php

if (!file_exists($file = __DIR__ . '/../vendor/autoload.php')) {
    throw new RuntimeException('Install dependencies to run test suite.');
}

/* \Composer\Autoload\ClassLoader $loader */
$loader = require $file;
// autoload tests stubs
$loader->add('dVAffection\\AbstractConfirmation\\Tests\\', __DIR__ . '/../tests');
