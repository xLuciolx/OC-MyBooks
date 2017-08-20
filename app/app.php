<?php

use MyBooks\DAO\BookDAO;
use MyBooks\DAO\AuthorDAO;
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
$app['dao.author'] = function ($app){
  return new AuthorDAO($app['db']);
};
$app['dao.book'] = function ($app){
  $bookDAO = new BookDAO($app['db']);
  $bookDAO->setAuthorDAO($app['dao.author']);
  return $bookDAO;
};
