<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */

$loader = require __DIR__.'/../vendor/autoload.php';
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));
//(array(
 //   'Acme' => __DIR__.'/../src', 
//    'IT' => __DIR__.'/../src', 
  //  ));
return $loader;
