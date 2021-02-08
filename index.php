<?php

require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/views');
$twig = new Environment($loader);

$packages = json_decode(file_get_contents("resources/package.json"));

echo $twig->render('index.php.twig', ['packages' => $packages]);
