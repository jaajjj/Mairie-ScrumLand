<?php
require_once 'vendor/autoload.php';

session_start();
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$baseUrl = $_ENV['BASE_URL'] ?? '';

$page = $_GET['page'] ?? 'accueil';
switch($page) {
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
}
