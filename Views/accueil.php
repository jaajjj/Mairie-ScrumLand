<?php 
// Inclusion du header (adaptez le chemin si nécessaire selon votre point d'entrée index.php)
require_once __DIR__ . '/Templates/header.php'; 
?>

<!-- Carrousel d'images -->
<section class="hero-carousel">
            <div class="carousel-track">
                <!-- Slide 1 -->
                <div class="carousel-slide active">
                    <img src="<?php echo $baseUrl ?>Assets/img/ScrumLandLandscape.jpg" alt="Vue panoramique de ScrumLand" class="carousel-image">
                    <div class="overlay"></div>
                    <div class="carousel-content">
                        <h2>Découvrez ScrumLand</h2>
                        <p>Située au cœur de la région, ScrumLand allie modernité et tradition avec de nombreux espaces verts et des infrastructures modernes. Aujourd'hui, notre commune est un exemple de développement harmonieux avec nos 12400 habitants.</p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-slide">
                    <img src="<?php echo $baseUrl ?>assets/img/ScrumLandLandscape2.jpg" alt="Parc et espaces verts" class="carousel-image">
                    <div class="overlay"></div>
                    <div class="carousel-content">
                        <h2>Un Engagement Durable</h2>
                        <p>Des espaces verts préservés et un engagement fort pour le développement durable et le bien-être de tous les habitants. En 2024, nous avons fait pousser 2500 arbres afin de lutter contre le réchauffement climatique.</p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-slide">
                    <img src="<?php echo $baseUrl ?>assets/img/ScrumLandLandscape3.jpg" alt="Centre-ville dynamique" class="carousel-image">
                    <div class="overlay"></div>
                    <div class="carousel-content">
                        <h2>Une Vie Associative Riche</h2>
                        <p>La ville propose un tissu associatif riche, des événements réguliers et des services de proximité pour tous. Du foot au yoga, nous avons le nécessaire afin de s'épanouir pleinement.</p>
                    </div>
                </div>

            </div>

            <!-- Navigation Buttons -->
            <button class="nav-btn prev" aria-label="Image précédente">&#10094;</button>
            <button class="nav-btn next" aria-label="Image suivante">&#10095;</button>

            <!-- Dots -->
            <div class="carousel-dots">
                <button class="dot active" aria-label="Aller à la slide 1"></button>
                <button class="dot" aria-label="Aller à la slide 2"></button>
                <button class="dot" aria-label="Aller à la slide 3"></button>
            </div>
</section>

<main class="container-principal">
    
    <!-- Colonne Principale : Présentation et Actualités -->
    <div class="main-column">
        
        <!-- Bloc Présentation -->
        <section class="bloc bloc-presentation">
            <div class="bloc-header">
                <h2>Le mot du Maire</h2>
            </div>
            <div class="bloc-content">
                <p>
                    <strong>ScrumLand</strong> est une commune dynamique qui met l’accent sur la collaboration,
                    la préservation de notre patrimoine et la qualité de vie de ses habitants. 
                    Située au cœur de la vallée verte, notre ville conjugue modernité et respect des traditions.
                </p>
                <div style="margin-top: 1.5rem; padding: 1rem; background-color: #f4f8f4; border-left: 4px solid var(--secondary-color); font-style: italic; color: var(--text-dark);">
                    "Cultivons ensemble notre art de vivre, entre champs et innovation."
                </div>
            </div>
        </section>

        <!-- Fil d’actualité -->
        <section class="bloc bloc-actus" id="actus">
            <div class="bloc-header">
                <h2>Actualités locales</h2>
                <a href="#" style="font-size: 0.9rem; color: var(--secondary-color); font-weight: bold; text-transform: uppercase;">Voir tout &rarr;</a>
            </div>
            <div class="grid-actus">
                <!-- Article 1 -->
                <article class="card-actu">
                    <div class="card-date">
                        <span class="day">20</span>
                        <span class="month">JAN</span>
                    </div>
                    <div class="card-content">
                        <h3>Conseil municipal</h3>
                        <p>Prochaine séance du conseil à 18h. Ordre du jour : Aménagement des espaces verts et rénovation de l'église.</p>
                        <a href="#" class="read-more">Lire l'article &rarr;</a>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="card-actu">
                    <div class="card-date">
                        <span class="day">05</span>
                        <span class="month">FÉV</span>
                    </div>
                    <div class="card-content">
                        <h3>Marché des Producteurs</h3>
                        <p>Le marché mensuel aura lieu sur la place du village. Venez découvrir les produits de nos fermes locales.</p>
                        <a href="#" class="read-more">Lire l'article &rarr;</a>
                    </div>
                </article>

                <!-- Article 3 -->
                <article class="card-actu">
                    <div class="card-date">
                        <span style="font-size: 1.5rem;">∞</span>
                    </div>
                    <div class="card-content">
                        <h3>Activités Nature & Loisirs</h3>
                        <p>Les inscriptions pour les randonnées et ateliers jardinage sont ouvertes. Profitez du grand air !</p>
                        <a href="#" class="read-more">Lire l'article &rarr;</a>
                    </div>
                </article>
            </div>
        </section>
    </div>

    <!-- Colonne Latérale (Sidebar) -->
    <aside class="sidebar">
        <!-- Numéros d'urgence -->
        <section class="bloc bloc-urgence">
            <h2>⚠️ Numéros d’urgence</h2>
            <ul>
                <li>
                    <span class="label">Pompiers</span>
                    <span class="number">18</span>
                </li>
                <li>
                    <span class="label">Gendarmerie</span>
                    <span class="number">17</span>
                </li>
                <li>
                    <span class="label">Samu</span>
                    <span class="number">15</span>
                </li>
                <li>
                    <span class="label">Mairie (Standard)</span>
                    <span class="number">01 23 45 67 89</span>
                </li>
            </ul>
        </section>

        <!-- Horaires -->
        <section class="bloc bloc-horaires">
            <h2>🕒 Horaires d'ouverture</h2>
            <div class="horaire-row">
                <strong>Lundi - Vendredi</strong>
                <span>08h30 - 17h30</span>
            </div>
            <div class="horaire-row">
                <strong>Samedi matin</strong>
                <span>09h00 - 12h00</span>
            </div>
            <div style="margin-top: 1.5rem; font-size: 0.9rem; border-top: 1px solid rgba(255,255,255,0.2); padding-top: 1rem;">
                📍 1 Place de l'Église<br>
                75000 ScrumLand
            </div>
        </section>
        
        <!-- Widget Info Pratique -->
         <section class="bloc" style="background: var(--bg-color); border: 1px dashed var(--secondary-color); text-align: center;">
            <h3 style="font-size: 1.1rem; color: var(--secondary-color);">Collecte des déchets</h3>
            <p style="font-size: 0.9rem;">Prochain passage (jaune) :</p>
            <div style="font-weight: bold; font-size: 1.2rem; color: var(--primary-color); margin-top: 0.5rem;">Jeudi 25 Janvier</div>
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