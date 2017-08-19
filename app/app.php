<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

// Register global error and exception handlers
ErrorHandler::register();
ExceptionHandler::register();

// Register service providers
// Doctrine
$app->register(new Silex\Provider\DoctrineServiceProvider());
// Twig
$app->register(new Silex\Provider\TwigServiceProvider(),
array(
  'twig.path' => __DIR__.'/../views'
));
// Asset
$app->register(new Silex\Provider\AssetServiceProvider(), array(
  'assets.version' => 'v1'
));

// Register services
$app['dao.book'] = function ($app){
  return new MyBooks\DAO\BookDAO($app['db']);
};
