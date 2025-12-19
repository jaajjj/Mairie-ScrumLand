<?php 
// Inclusion du header
require_once __DIR__ . '/Templates/header.php'; 
?>

<!-- Hero Banner -->
<section class="hero-banner">
    <div class="hero-content">
        <h1>Calendrier des manifestations</h1>
        <p>Toutes les animations et rendez-vous de ScrumLand.</p>
        <a href="#agenda" class="btn btn-primary">Voir les prochains événements</a>
    </div>
</section>

<main class="container-principal">
    
    <!-- Colonne Principale -->
    <div class="main-column">
        
        <!-- Bloc Présentation -->
        <section class="bloc bloc-presentation">
            <div class="bloc-header">
                <h2>Les temps forts de l’année</h2>
            </div>
            <div class="bloc-content">
                <p>
                    Retrouvez ici l’ensemble des manifestations organisées par la commune, 
                    les associations et les partenaires locaux : culture, sport, nature, 
                    vie citoyenne et moments conviviaux.
                </p>
                <p>
                    Les informations sont mises à jour régulièrement. Pour tout complément, 
                    vous pouvez contacter la mairie ou l’organisateur indiqué pour chaque événement.
                </p>
            </div>
        </section>

        <!-- Agenda des manifestations -->
        <section class="bloc bloc-actus" id="agenda">
            <div class="bloc-header">
                <h2>Prochaines manifestations</h2>
                <a href="#archives" style="font-size: 0.9rem; color: var(--secondary-color); font-weight: bold; text-transform: uppercase;">
                    Voir les événements passés &rarr;
                </a>
            </div>

            <div class="grid-actus">
                <!-- Événement 1 -->
                <article class="card-actu">
                    <div class="card-date">
                        <span class="day">12</span>
                        <span class="month">JAN</span>
                    </div>
                    <div class="card-content">
                        <h3>Fête de la Galette</h3>
                        <p>
                            Dégustation de galettes, animations pour enfants et tirage des rois 
                            à la salle des fêtes municipale.
                        </p>
                        <p style="font-size: 0.85rem; color: var(--text-muted);">
                            Lieu : Salle des fêtes – 15h00 à 18h00<br>
                            Organisateur : Comité des fêtes
                        </p>
                        <a href="#" class="read-more">Détails &rarr;</a>
                    </div>
                </article>

                <!-- Événement 2 -->
                <article class="card-actu">
                    <div class="card-date">
                        <span class="day">25</span>
                        <span class="month">FÉV</span>
                    </div>
                    <div class="card-content">
                        <h3>Randonnée de la Vallée Verte</h3>
                        <p>
                            Parcours familial de 8 km à la découverte des sentiers de ScrumLand. 
                            Prévoir chaussures de marche et bouteille d’eau.
                        </p>
                        <p style="font-size: 0.85rem; color: var(--text-muted);">
                            Lieu : Départ place de l’Église – 9h00<br>
                            Organisateur : Association Rando & Nature
                        </p>
                        <a href="#" class="read-more">Détails &rarr;</a>
                    </div>
                </article>

                <!-- Événement 3 -->
                <article class="card-actu">
                    <div class="card-date">
                        <span class="day">30</span>
                        <span class="month">MAR</span>
                    </div>
                    <div class="card-content">
                        <h3>Printemps des Associations</h3>
                        <p>
                            Forum des associations, démonstrations sportives, stands d’information 
                            et animations tout au long de la journée.
                        </p>
                        <p style="font-size: 0.85rem; color: var(--text-muted);">
                            Lieu : Parc municipal – 10h00 à 18h00<br>
                            Organisateur : Service Vie associative
                        </p>
                        <a href="#" class="read-more">Détails &rarr;</a>
                    </div>
                </article>
            </div>
        </section>

        <!-- Archives / événements passés -->
        <section class="bloc bloc-actus" id="archives">
            <div class="bloc-header">
                <h2>Événements passés</h2>
            </div>
            <div class="grid-actus">
                <article class="card-actu">
                    <div class="card-date">
                        <span class="day">10</span>
                        <span class="month">NOV</span>
                    </div>
                    <div class="card-content">
                        <h3>Cérémonie du 11 Novembre</h3>
                        <p>Commémoration officielle au monument aux morts, suivie d’un verre de l’amitié en mairie.</p>
                        <a href="#" class="read-more">Voir le compte-rendu &rarr;</a>
                    </div>
                </article>
                <!-- Ajoute d’autres articles au besoin -->
            </div>
        </section>

    </div>

    <!-- Sidebar -->
    <aside class="sidebar">
        <!-- Bloc Info pratique -->
        <section class="bloc bloc-urgence">
            <h2>ℹ️ Infos manifestations</h2>
            <ul>
                <li>
                    <span class="label">Service Événementiel</span>
                    <span class="number">02 67 69 72 53</span>
                </li>
                <li>
                    <span class="label">Courriel</span>
                    <span class="number">evenements@scrumland.fr</span>
                </li>
            </ul>
        </section>

        <!-- Bloc Accès et lieux -->
        <section class="bloc bloc-horaires">
            <h2>📍 Lieux fréquents</h2>
            <div class="horaire-row">
                <strong>Salle des fêtes</strong>
                <span>Rue des Tilleuls</span>
            </div>
            <div class="horaire-row">
                <strong>Parc municipal</strong>
                <span>Chemin de la Vallée</span>
            </div>
            <div class="horaire-row">
                <strong>Place de l'Église</strong>
                <span>Centre-bourg</span>
            </div>
        </section>

        <!-- Bloc Rappel calendrier -->
        <section class="bloc" style="background: var(--bg-color); border: 1px dashed var(--secondary-color); text-align: center;">
            <h3 style="font-size: 1.1rem; color: var(--secondary-color);">Ajouter à votre agenda</h3>
            <p style="font-size: 0.9rem;">
                Vous pouvez importer les manifestations dans votre calendrier numérique 
                (format iCal) prochainement.
            </p>
        </section>
    </aside>

</main>

<?php 
// Inclusion du footer
require_once __DIR__ . '/Templates/footer.php'; 
?>