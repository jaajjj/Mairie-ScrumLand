<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mairie de ScrumLand</title>
    <!-- Import de polices modernes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">

    <!-- Lien vers la feuille de style CSS -->
    <link rel="stylesheet" href="<?php echo getenv('BASE_URL'); ?>Assets/css/style.css">
</head>

<body>

    <!-- Header Moderne Full Width -->
    <header class="site-header">
        <div class="header-container">

            <!-- Logo Modernisé -->
            <a href="<?php echo $baseUrl ?>" class="logo">
                <span class="logo-icon">🌲</span>
                <div class="logo-text">
                    <span class="ville">ScrumLand</span>
                    <span class="label">Site officiel de la Mairie</span>
                </div>
            </a>

            <!-- Navigation Principale -->
            <nav class="main-nav">
                <ul class="nav-list">

                    <!-- 1. Accueil -->
                    <li class="nav-item">
                        <a href="<?php echo $baseUrl ?>" class="nav-link">Accueil</a>
                    </li>

                    <!-- 2. Découvrir (Méga Menu) -->
                    <li class="nav-item has-mega-menu">
                        <button class="nav-link dropdown-trigger">Découvrir</button>
                        <div class="mega-menu">
                            <div class="mega-content">
                                <div class="mega-column">
                                    <h3>Patrimoine & Histoire</h3>
                                    <ul>
                                        <li>
                                            <a href="<?php echo $baseUrl; ?>histoire">
                                                L’histoire de la commune
                                            </a>
                                        </li>
                                        <li><a href="<?php echo $baseUrl ?>jumelage">Jumelage</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h3>Culture & Rayonnement</h3>
                                    <ul>
                                        <li><a href="<?php echo $baseUrl; ?>culture">Culture</a></li>
                                        <li><a href="<?php echo getenv('BASE_URL'); ?>villeenimages">La ville en
                                                images</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column highlight">
                                    <div class="highlight-card">
                                        <span class="icon">📸</span>
                                        <p>Découvrez notre galerie photo interactive.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- 3. Mairie (Méga Menu) -->
                    <li class="nav-item has-mega-menu">
                        <button class="nav-link dropdown-trigger">Mairie</button>
                        <div class="mega-menu">
                            <div class="mega-content">
                                <div class="mega-column">
                                    <h3>Vie Démocratique</h3>
                                    <ul>
                                        <li><a href="<?php echo $baseUrl; ?>elus">Liste des élus</a></li>
                                        <li><a href="#">Conseil Municipal</a></li>
                                        <li><a href="<?php echo $baseUrl; ?>manifestation">Calendrier des
                                                manifestations</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h3>Services & Démarches</h3>
                                    <ul>
                                        <li><a href="#">Location de salles communales</a></li>
                                        <li><a href="#">Bulletins municipaux</a></li>
                                        <li><a href="<?php echo $baseUrl; ?>filActu">Fil d'actualité</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- 4. Vie Pratique (Méga Menu) -->
                    <li class="nav-item has-mega-menu">
                        <button class="nav-link dropdown-trigger">Vie Pratique</button>
                        <div class="mega-menu">
                            <div class="mega-content">
                                <div class="mega-column">
                                    <h3>Au Quotidien</h3>
                                    <ul>
                                        <li><a href="<?php echo $baseUrl .'/cantine' ?>">Menu de la cantine</a></li>
                                        <li><a href="<?php echo $baseUrl . 'commerce' ?>">Liste des commerces</a></li>
                                        <li><a href="#">Numéros d'urgence</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h3>Temps Libre</h3>
                                    <ul>
                                        <li><a href="<?php echo $baseUrl; ?>sportsLoisirs">Vie sportive & loisirs</a>
                                        </li>
                                        <li><a href="#">Page associative</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- 5. Agenda -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">Agenda</a>
                    </li>

                    <!-- 6. Contact -->
                    <li class="nav-item">
                        <a href="./contact" class="nav-link btn-contact">Contact</a>
                    </li>
                </ul>
            </nav>

            <!-- Langues -->
            <div class="header-tools">
                <a href="#" class="lang-link active">FR</a>
                <span class="sep">|</span>
                <a href="#" class="lang-link">EN</a>
            </div>

        </div>
    </header>