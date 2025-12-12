<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mairie de ScrumLand</title>
    <!-- Import de police : Merriweather pour les titres et Roboto pour le texte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    
    <!-- Lien vers la feuille de style CSS -->
    <!-- Note: Le chemin commence par /Mairie-ScrumLand/ pour être absolu depuis la racine du serveur -->
    <link rel="stylesheet" href="<?php echo getenv('BASE_URL'); ?>Assets/css/style.css">
</head>
<body>

    <!-- Header -->
    <header>
        <div class="navbar">
            <!-- Logo avec lien vers l'accueil -->
            <a href="/Mairie-ScrumLand/index.php" class="logo">
                🌲 <span>Mairie de ScrumLand</span>
            </a>
            
            <!-- Navigation principale -->
            <nav class="nav-links">
                <a href="/Mairie-ScrumLand/index.php" class="active">Accueil</a>
                <a href="#">Vie locale</a>
                <a href="#">Tourisme</a>
                <a href="/Mairie-ScrumLand/Views/contactView.php">Contact</a>
            </nav>
        </div>
    </header>