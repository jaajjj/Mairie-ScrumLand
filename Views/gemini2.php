<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carroussel Moderne ScrumLand</title>
    <style>
        /* Reset et Base */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f4f4f4;
        }

        /* Variables de couleur */
        :root {
            --primary-green: #2ecc71;
            --dark-overlay: rgba(0, 0, 0, 0.5);
            --text-color: #ffffff;
        }

        /* --- SECTION CARROUSEL --- */
        .hero-carousel {
            position: relative;
            width: 100%;
            height: 80vh; /* Hauteur importante pour l'immersion */
            min-height: 500px;
            max-height: 800px;
            overflow: hidden;
            background-color: #000;
        }

        /* Container des slides */
        .carousel-track {
            position: relative;
            width: 100%;
            height: 100%;
        }

        /* Slide individuel */
        .carousel-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.8s ease-in-out, visibility 0.8s;
            z-index: 1;
        }

        .carousel-slide.active {
            opacity: 1;
            visibility: visible;
            z-index: 2;
        }

        /* Image de fond avec effet de zoom (Ken Burns) */
        .carousel-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: scale(1);
            transition: transform 6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .carousel-slide.active .carousel-image {
            transform: scale(1.1); /* Zoom léger quand actif */
        }

        /* Overlay sombre pour lisibilité du texte */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.6));
        }

        /* Contenu textuel sur l'image */
        .carousel-content {
            position: absolute;
            bottom: 20%;
            left: 10%;
            max-width: 600px;
            color: var(--text-color);
            z-index: 3;
            transform: translateY(30px);
            opacity: 0;
            transition: transform 0.8s ease-out, opacity 0.8s ease-out;
            transition-delay: 0.3s; /* Le texte arrive après l'image */
        }

        .carousel-slide.active .carousel-content {
            transform: translateY(0);
            opacity: 1;
        }

        .carousel-content h2 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: 700;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
            line-height: 1.2;
        }

        .carousel-content p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            text-shadow: 0 1px 2px rgba(0,0,0,0.3);
        }

        .carousel-btn-cta {
            display: inline-block;
            padding: 12px 24px;
            background-color: var(--primary-green);
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            transition: background 0.3s;
        }

        .carousel-btn-cta:hover {
            background-color: #27ae60;
        }

        /* Boutons de navigation (Flèches) */
        .nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            transition: all 0.3s;
        }

        .nav-btn:hover {
            background: white;
            color: #000;
        }

        .nav-btn.prev { left: 20px; }
        .nav-btn.next { right: 20px; }

        /* Indicateurs (Dots) */
        .carousel-dots {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 10;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.4);
            border: none;
            cursor: pointer;
            transition: all 0.3s;
        }

        .dot.active {
            background: var(--primary-green);
            transform: scale(1.2);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-carousel {
                height: 60vh;
            }
            .carousel-content h2 {
                font-size: 2rem;
            }
            .carousel-content {
                left: 5%;
                right: 5%;
                bottom: 15%;
                text-align: center;
            }
            .nav-btn {
                display: none; /* On cache les flèches sur mobile pour laisser place au swipe (optionnel) ou juste pour épurer */
            }
        }
    </style>
</head>
<body>

    <main>
        <!-- 
        NOTE POUR L'INTEGRATION PHP :
        Remplacez les URLs des images ci-dessous par : <?php echo $baseUrl ?>assets/img/NomImage.jpg 
        -->

        <section class="hero-carousel">
            <div class="carousel-track">
                
                <!-- Slide 1 -->
                <div class="carousel-slide active">
                    <!-- Image placeholder (nature/ville) -->
                    <img src="https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80" alt="Vue panoramique de ScrumLand" class="carousel-image">
                    <div class="overlay"></div>
                    <div class="carousel-content">
                        <h2>Découvrez ScrumLand</h2>
                        <p>Située au cœur de la région, ScrumLand allie modernité et tradition avec de nombreux espaces verts et des infrastructures modernes.</p>
                        <a href="#" class="carousel-btn-cta">En savoir plus</a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-slide">
                    <!-- Image placeholder (parc) -->
                    <img src="https://images.unsplash.com/photo-1496564203457-11bb12075d90?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80" alt="Parc et espaces verts" class="carousel-image">
                    <div class="overlay"></div>
                    <div class="carousel-content">
                        <h2>Un Engagement Durable</h2>
                        <p>Des espaces verts préservés et un engagement fort pour le développement durable et le bien-être de tous les habitants.</p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-slide">
                    <!-- Image placeholder (ville active) -->
                    <img src="https://images.unsplash.com/photo-1449824913929-4bdd42b00adf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80" alt="Centre-ville dynamique" class="carousel-image">
                    <div class="overlay"></div>
                    <div class="carousel-content">
                        <h2>Une Vie Associative Riche</h2>
                        <p>La ville propose un tissu associatif riche, des événements réguliers et des services de proximité pour tous.</p>
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

        <!-- Exemple de contenu suivant pour montrer l'intégration -->
        <section style="max-width: 1200px; margin: 40px auto; padding: 0 20px;">
            <h2>Bienvenue dans notre ville</h2>
            <p>Le carrousel ci-dessus prend toute la largeur disponible. Le reste du contenu reste centré normalement.</p>
        </section>

    </main>

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
</body>
</html>