<?php
require_once __DIR__ . '/Templates/header.php';
?>

<!-- Hero Banner Spécifique -->
<section class="hero-banner sports-hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>Sports & Loisirs</h1>
        <p>Une ville dynamique pour tous les passions.</p>
    </div>
</section>

<main class="container-principal sports-layout">

    <!-- Introduction: Sport en général -->
    <section class="sports-section highlight-section">
        <div class="section-image-wrapper">
            <img src="<?php echo getenv('BASE_URL'); ?>Assets/img/sports/sport_general.jpg" alt="Sport en général"
                class="featured-image">
        </div>
        <div class="section-content">
            <h2>Le Sport à ScrumLand</h2>
            <div class="separator-line"></div>
            <p>
                A ScrumLand, le sport est au cœur de la vie citoyenne. Nous disposons d'infrastructures modernes
                permettant à chacun de pratiquer son activité favorite, de la compétition de haut niveau au loisir
                familial.
                Stades, gymnases, et parcours de santé sont accessibles toute l'année.
            </p>
        </div>
    </section>

    <!-- Golf -->
    <section class="sports-section reverse">
        <div class="section-content">
            <h2>Le Golf Municipal</h2>
            <div class="separator-line"></div>
            <p>
                Notre magnifique parcours de 18 trous vous accueille dans un cadre verdoyant.
                Que vous soyez débutant ou confirmé, venez profiter de nos installations et de notre cluh-house.
                Un practice de 30 postes est également à votre disposition.
            </p>
            <div class="features-list">
                <span><i class="fas fa-check"></i> 18 trous</span>
                <span><i class="fas fa-check"></i> Practice</span>
                <span><i class="fas fa-check"></i> Club House</span>
            </div>
        </div>
        <div class="section-gallery">
            <img src="<?php echo getenv('BASE_URL'); ?>Assets/img/sports/golf1.jpg" alt="Parcours de Golf"
                class="gallery-img main-img">
            <img src="<?php echo getenv('BASE_URL'); ?>Assets/img/sports/golf2.png" alt="Joueur de Golf"
                class="gallery-img sub-img">
        </div>
    </section>

    <!-- Accrobranche -->
    <section class="sports-section">
        <div class="section-image-wrapper">
            <img src="<?php echo getenv('BASE_URL'); ?>Assets/img/sports/accrobranche.jpg" alt="Accrobranche"
                class="featured-image">
        </div>
        <div class="section-content">
            <h2>Accrobranche <span class="badge-new">Nouveau</span></h2>
            <div class="separator-line"></div>
            <p>
                Grimpez aux arbres en toute sécurité ! Notre parc accrobranche offre plusieurs parcours
                de difficultés variées, parfaits pour les sorties en famille ou entre amis à la recherche de sensations
                fortes
                en pleine nature.
            </p>
        </div>
    </section>

    <!-- Cross -->
    <section class=" sports-section reverse">
        <div class="section-content">
            <h2>Cross & Running</h2>
            <div class="separator-line"></div>
            <p>
                Participez à nos événements de cross-country ou profitez simplement de nos sentiers balisés
                pour votre jogging quotidien. Des parcours de 5km, 10km et 20km sont disponibles à travers
                la forêt communale.
            </p>
        </div>
        <div class="section-image-wrapper">
            <img src="<?php echo getenv('BASE_URL'); ?>Assets/img/sports/cross.jpg" alt="Cross Country"
                class="featured-image">
        </div>
    </section>

    <!-- Activités Insolites & Manuelles (Grid 2 cols) -->
    <div class="grid-leisure">

        <!-- Lancer de téléphone -->
        <div class="leisure-card">
            <div class="card-img-top">
                <img src="<?php echo getenv('BASE_URL'); ?>Assets/img/sports/lancer.png" alt="Lancer de téléphone">
                <div class="card-overlay">
                    <span class="icon">📱</span>
                </div>
            </div>
            <div class="card-body">
                <h3>Lancer de Téléphone</h3>
                <p class="subtitle">Championnat Insolite</p>
                <p>
                    Discipline phare de ScrumLand ! Une manière originale de se défouler (avec de vieux appareils
                    recyclés uniquement).
                    Record à battre : <strong>85 mètres</strong>.
                </p>
            </div>
        </div>

        <!-- Activités Manuelles -->
        <div class="leisure-card">
            <div class="card-img-top">
                <img src="<?php echo getenv('BASE_URL'); ?>Assets/img/sports/manuel.png" alt="Activités manuelles">
                <div class="card-overlay">
                    <span class="icon">🎨</span>
                </div>
            </div>
            <div class="card-body">
                <h3>Activités Manuelles</h3>
                <p class="subtitle">Créativité & Partage</p>
                <p>
                    Ateliers de poterie, peinture, et bricolage pour petits et grands.
                    Rejoignez nos associations locales pour développer votre créativité dans une ambiance conviviale.
                </p>
            </div>
        </div>

    </div>

</main>

<?php require_once __DIR__ . '/Templates/footer.php'; ?>