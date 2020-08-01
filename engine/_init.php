<?php
  require_once('config.php');
  require_once('./vendor/autoload.php');
  require_once('functions.php');
  
  try{
    dibi::connect([
      'driver'   => 'mysqli',
      'host'     => 'localhost',
      'username' => db_USER,
      'password' => db_PASS,
      'database' => db_NAME,
      'charset'  => 'utf8',
    ]);
  }
  catch(exception $e){
    die('Failed to connect to the database! Please try again later or contact administrator.');
  }

  $loader = new \Twig\Loader\FilesystemLoader(TWIG_TEMPLATES_PATH);
  //$twig = new \Twig\Environment($loader, [ 'cache' => TWIG_CACHE_PATH]);
  use Twig\Extra\Intl\IntlExtension;
  $twig = new \Twig\Environment($loader, ['debug' => true]);
  $twig->addExtension(new IntlExtension());
?>
