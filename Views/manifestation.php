<?php 
// Inclusion du header
require_once __DIR__ . '/Templates/header.php'; 
?>

<section class="hero-carousel">
    <div class="carousel-track">
        <div class="carousel-slide active">
            <img src="<?php echo $baseUrl ?>assets/img/A2.jpg" alt="Fête de la Galette" class="carousel-image">
            <div class="overlay"></div>
            <div class="carousel-content">
                <h2>Prochainement : Fête de la Galette</h2>
                <p>Ce 12 Janvier, venez partager un moment convivial à la salle des fêtes. Dégustation, animations pour enfants et élection du roi et de la reine de ScrumLand !</p>
                <a href="#agenda" class="btn btn-primary" style="margin-top:10px; display:inline-block; text-decoration:none; color:white; border:1px solid white; padding: 5px 10px; border-radius:4px;">En savoir plus</a>
            </div>
        </div>

        <div class="carousel-slide">
            <img src="<?php echo $baseUrl ?>assets/img/A1.jpg" alt="Randonnée nature" class="carousel-image">
            <div class="overlay"></div>
            <div class="carousel-content">
                <h2>Randonnée de la Vallée Verte</h2>
                <p>Le 25 Février, chaussez vos baskets pour 8km de découverte à travers nos sentiers. Un bol d'air frais pour redécouvrir notre patrimoine naturel.</p>
            </div>
        </div>

        <div class="carousel-slide">
            <img src="<?php echo $baseUrl ?>assets/img/A3.jpg" alt="Associations" class="carousel-image">
            <div class="overlay"></div>
            <div class="carousel-content">
                <h2>Printemps des Associations</h2>
                <p>Préparez votre fin mars ! Le tissu associatif de ScrumLand vous donne rendez-vous au Parc Municipal pour une journée de démonstrations et d'échanges.</p>
            </div>
        </div>
    </div>

    <button class="nav-btn prev" aria-label="Image précédente">&#10094;</button>
    <button class="nav-btn next" aria-label="Image suivante">&#10095;</button>

    <div class="carousel-dots">
        <button class="dot active" aria-label="Aller à la slide 1"></button>
        <button class="dot" aria-label="Aller à la slide 2"></button>
        <button class="dot" aria-label="Aller à la slide 3"></button>
    </div>
</section>

<main class="container-principal">
    
    <div class="main-column">
        
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

        <section class="bloc bloc-actus" id="agenda">
            <div class="bloc-header">
                <h2>Prochaines manifestations</h2>
                <a href="#archives" style="font-size: 0.9rem; color: var(--secondary-color); font-weight: bold; text-transform: uppercase;">
                    Voir les événements passés &rarr;
                </a>
            </div>

            <div class="grid-actus">
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
                    </div>
                </article>

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
                    </div>
                </article>

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
                    </div>
                </article>
            </div>
        </section>

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
            </div>
        </section>

    </div>

    <aside class="sidebar">
        <section class="bloc bloc-urgence">
            <h2>Infos manifestations</h2>
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

        <section class="bloc bloc-horaires">
            <h2>Lieux fréquents</h2>
            
            <div class="horaire-row">
                <a href="https://www.google.com/maps/place/Salle+Gaston+Bonheur/@43.3043838,-0.3614266,15z/data=!4m10!1m2!2m1!1ssalle+des+f%C3%AAtes+pau!3m6!1s0xd564884849fe329:0x20ce303942cab46b!8m2!3d43.3236839!4d-0.3446486!15sChRzYWxsZSBkZXMgZsOqdGVzIHBhdVoWIhRzYWxsZSBkZXMgZsOqdGVzIHBhdZIBFmZ1bmN0aW9uX3Jvb21fZmFjaWxpdHmaAURDaTlEUVVsUlFVTnZaRU5vZEhsalJqbHZUMnhXYWt4WVNUVmtWbTgwWTIwNVIxSnFhRUpOYTFwRVRXcFNTRlpWUlJBQuABAPoBBAgAECw!16s%2Fg%2F11bw7ck58b?entry=ttu&g_ep=EgoyMDI2MDEwNi4wIKXMDSoASAFQAw%3D%3D" target="_blank" style="text-decoration: none; color: inherit;">
                    <strong class="firstblocks">Salle des fêtes</strong>
                </a>
            </div>
            
            <div class="horaire-row">
                <a href="https://www.google.com/maps/place/Av.+des+Tilleuls,+64000+Pau/@43.3043648,-0.3537018,17z/data=!3m1!4b1!4m6!3m5!1s0xd5648eeab8205f1:0xf2768b4a41778455!8m2!3d43.3043609!4d-0.3511269!16s%2Fg%2F1tg9t_zg?entry=ttu&g_ep=EgoyMDI2MDEwNi4wIKXMDSoASAFQAw%3D%3D" target="_blank" style="text-decoration: none; color: inherit;">
                    <strong class="firstblocks">Rue des Tilleuls</strong>
                </a>
            </div>
            
            <div class="horaire-row">
                <a href="https://www.google.com/maps/place/Parc+L%C3%A9on+Jaussely/@43.3220311,-0.4214001,13z/data=!4m10!1m2!2m1!1sParc+municipal+Pau!3m6!1s0xd56494ea068f90b:0xeb14d43d08b0ebe3!8m2!3d43.3060829!4d-0.3661152!15sChJQYXJjIG11bmljaXBhbCBQYXVaFCIScGFyYyBtdW5pY2lwYWwgcGF1kgEEcGFya5oBJENoZERTVWhOTUc5blMwVkpRMEZuU1VOb04zVmxkak5uUlJBQuABAPoBBAgAEDk!16s%2Fg%2F11h4b8dst2?entry=ttu&g_ep=EgoyMDI2MDEwNi4wIKXMDSoASAFQAw%3D%3D" target="_blank" style="text-decoration: none; color: inherit;">
                    <strong class="firstblocks">Parc municipal</strong>
                </a>
            </div>
            
            <div class="horaire-row">
                <a href="https://www.google.com/maps/place/Chem.+de+la+Lande,+64000+Pau/@43.3135457,-0.3146249,17z/data=!3m1!4b1!4m6!3m5!1s0xd564816d8438867:0xf4bafb9eb119edb2!8m2!3d43.3135418!4d-0.31205!16s%2Fg%2F1tvm42c5?entry=ttu&g_ep=EgoyMDI2MDEwNi4wIKXMDSoASAFQAw%3D%3D" target="_blank" style="text-decoration: none; color: inherit;">
                    <strong class="firstblocks">Chemin de la Lande</strong>
                </a>
            </div>
            
            <div class="horaire-row">
                <a href="https://www.google.com/maps/place/Pl.+de+l'%C3%89glise,+64160+Maucor/@43.3544919,-0.2854172,17z/data=!3m1!4b1!4m6!3m5!1s0xd5638699fa41391:0xb38c4f8cc2eb4376!8m2!3d43.354488!4d-0.2828423!16s%2Fg%2F1v4k7vgq?entry=ttu&g_ep=EgoyMDI2MDEwNi4wIKXMDSoASAFQAw%3D%3D" target="_blank" style="text-decoration: none; color: inherit;">
                    <strong class="firstblocks">Place de l'Église</strong>
                </a>
            </div>
            
            <div class="horaire-row">
                <a href="https://www.google.com/maps/search/Pau+centre-bourg/@43.3125049,-0.3985737,11z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI2MDEwNi4wIKXMDSoASAFQAw%3D%3D" target="_blank" style="text-decoration: none; color: inherit;">
                    <strong class="firstblocks">Centre-bourg</strong>
                </a>
            </div>

        </section>

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
require_once __DIR__ . '/Templates/footer.php'; 
?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const track = document.querySelector('.carousel-track');
        const slides = Array.from(track.children);
        const nextButton = document.querySelector('.nav-btn.next');
        const prevButton = document.querySelector('.nav-btn.prev');
        const dotsNav = document.querySelector('.carousel-dots');
        const dots = Array.from(dotsNav.children);
        
        let currentIndex = 0;
        let autoPlayInterval;

        // Fonction pour changer de slide
        const updateCarousel = (targetIndex) => {
            // Gestion des limites (boucle infinie)
            if (targetIndex < 0) {
                targetIndex = slides.length - 1;
            } else if (targetIndex >= slides.length) {
                targetIndex = 0;
            }

            // Changer la classe active sur les slides
            const currentSlide = document.querySelector('.carousel-slide.active');
            currentSlide.classList.remove('active');
            slides[targetIndex].classList.add('active');

            // Changer la classe active sur les dots
            const currentDot = document.querySelector('.dot.active');
            currentDot.classList.remove('active');
            dots[targetIndex].classList.add('active');

            currentIndex = targetIndex;
        };

        // Event Listeners
        nextButton.addEventListener('click', () => {
            updateCarousel(currentIndex + 1);
            resetAutoPlay();
        });

        prevButton.addEventListener('click', () => {
            updateCarousel(currentIndex - 1);
            resetAutoPlay();
        });

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                updateCarousel(index);
                resetAutoPlay();
            });
        });

        // Autoplay (changement automatique toutes les 5 secondes)
        const startAutoPlay = () => {
            autoPlayInterval = setInterval(() => {
                updateCarousel(currentIndex + 1);
            }, 5000);
        };

        const resetAutoPlay = () => {
            clearInterval(autoPlayInterval);
            startAutoPlay();
        };

        // Démarrer l'autoplay
        startAutoPlay();
    });
</script>