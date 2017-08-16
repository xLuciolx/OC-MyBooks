<?php

//Home page
$app->get('/', function() use ($app){
  $books = $app['dao.book']->findAll();

  ob_start();
  require '../views/view.php';
  $view = ob_clean();
  return $view;
});
