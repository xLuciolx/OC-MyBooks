<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

//Register global error and exception handlers
ErrorHandler::register();
ExceptionHandler::register();

//Register service providers
$app->register(new Silex\Provider\DoctrineServiceProvider());

// Register services
$app['dao.book'] = function ($app){
  return new MyBooks\DAO\BookDAO($app['db']);
};
