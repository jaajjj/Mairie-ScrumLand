<?php
require_once 'vendor/autoload.php';

session_start();
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$baseUrl = $_ENV['BASE_URL'] ?? '';

$page = $_GET['page'] ?? 'accueil';
switch ($page) {
    case 'accueil':
        require 'Views/accueil.php';
        break;
    case 'contact':
        require 'Views/contact.php';
        break;
    case 'elus':
        require 'Views/elus.php';
        break;
    case "histoire":
        require 'Views/histoire.php';
        break;
    case 'jumelage':
        require 'Views/jumelage.php';
        break;
    case 'manifestation':
        require 'Views/manifestation.php';
        break;
    case 'filActu':
        require 'Views/filActu.php';
        break;
    case 'villeenimages':
        require 'Views/villeenimages.php';
        break;
    case 'culture':
        require 'Views/culture.php';
        break;
    case 'commerce':
        require 'Views/commerce.php';
        break;
    case 'sportsLoisirs':
        require 'Views/sportsLoisirs.php';
        break;
    case 'cantine':
        require 'Views/cantine.php';
        break;
    case 'location':
        require 'Views/location.php';
        break;
}
