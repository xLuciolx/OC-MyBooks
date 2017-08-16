<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MyBooks - Home</title>
  <link rel="stylesheet" href="mybooks.css">
</head>
<body>
  <header>
    <h1>
      MyBooks
    </h1>
  </header>
   <?php foreach ($books as $book): ?>
  <article>
    <h2>
      <?= $book->getTitle(); ?>
    </h2>
    <p>
      <?= $book->getSummary(); ?>
    </p>
  </article>
   <?php endforeach; ?>
  <footer class="footer">
    <strong>MyBooks</strong> est construit avec PHP, Silex, Twig et Bootstrap
  </footer>
</body>
</html>
