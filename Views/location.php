<?php 
require_once __DIR__ . '/Templates/header.php'; 
?>

<!-- Page Location : formulaire pour louer une salle communale -->
<section class="hero-carousel">
    <div class="carousel-track">
        <div class="carousel-slide active">
            <img src="<?php echo $baseUrl ?>assets/img/salleFete3.jpg" alt="Salle des fêtes - vue intérieure" class="carousel-image">
            <div class="overlay"></div>
            <div class="carousel-content">
                <h2>Location de la salle communale</h2>
                <p>Découvrez la salle et ses aménagements ci-dessous. Remplissez le formulaire pour faire une demande de réservation.</p>
            </div>
        </div>

        <div class="carousel-slide">
            <img src="<?php echo $baseUrl ?>assets/img/sallefete1.jpeg" alt="Salle - scène et gradins" class="carousel-image">
            <div class="overlay"></div>
            <div class="carousel-content">
                <h2>Capacité modulable</h2>
                <p>Configuration assise, debout, ou réunion — nous adaptons la salle selon vos besoins.</p>
            </div>
        </div>

        <div class="carousel-slide">
            <img src="<?php echo $baseUrl ?>assets/img/salleFete2.jpg" alt="Équipements techniques" class="carousel-image">
            <div class="overlay"></div>
            <div class="carousel-content">
                <h2>Équipements inclus</h2>
                <p>Sonorisation, vidéoprojecteur, tables et chaises selon la configuration choisie.</p>
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
        <section class="bloc">
            <div class="bloc-header">
                <h2>Demande de location - Salle communale</h2>
            </div>
            <div class="bloc-content">
                <p>Merci de renseigner les informations ci-dessous. Un agent vous contactera pour confirmer la disponibilité et les modalités.</p>

                <form action="#" method="POST" class="contact-form booking-form">
                    <input type="hidden" name="salle" value="Salle communale" />

                    <div class="form-row">
                        <div class="form-group">
                            <label for="nom">Nom *</label>
                            <input type="text" id="nom" name="nom" required placeholder="Votre nom complet">
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom *</label>
                            <input type="text" id="prenom" name="prenom" required placeholder="Votre prénom">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">E-mail *</label>
                            <input type="email" id="email" name="email" required placeholder="contact@exemple.fr">
                        </div>
                        <div class="form-group">
                            <label for="tel">Tél *</label>
                            <input type="tel" id="tel" name="tel" required placeholder="01 23 45 67 89">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="organisation">Organisme / Société</label>
                            <input type="text" id="organisation" name="organisation" placeholder="(facultatif)">
                        </div>
                        <div class="form-group">
                            <label for="public">Public attendu</label>
                            <input type="number" id="public" name="public" min="1" placeholder="Nombre de participants">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="date">Date souhaitée *</label>
                            <input type="date" id="date" name="date" required>
                        </div>
                        <div class="form-group">
                            <label for="heure_debut">Heure début *</label>
                            <input type="time" id="heure_debut" name="heure_debut" required>
                        </div>
                        <div class="form-group">
                            <label for="heure_fin">Heure fin *</label>
                            <input type="time" id="heure_fin" name="heure_fin" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="objet">Objet / description *</label>
                        <textarea id="objet" name="objet" rows="5" required placeholder="Réunion, anniversaire, conférence..."></textarea>
                    </div>

                    <div class="form-group checkbox-group">
                        <input type="checkbox" id="rgpd_booking" name="rgpd_booking" required>
                        <label for="rgpd_booking">J'accepte que mes données soient utilisées pour le traitement de cette demande.</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Envoyer la demande</button>
                </form>
            </div>
        </section>
    </div>

    <aside class="sidebar">
        <section class="bloc">
            <h3>Informations pratiques</h3>
            <p><strong>Capacité :</strong> Jusqu'à 150 personnes (selon configuration)</p>
            <p><strong>Équipements :</strong> Sonorisation, vidéoprojecteur, tables, chaises</p>
            <p style="font-size:0.95rem;">Les tarifs et conditions d'assurance vous seront communiqués lors de la validation de votre demande.</p>
        </section>

        <section class="bloc">
            <h3>Contact Réservation</h3>
            <p><strong>Service Événementiel</strong><br>
            Tél : 02 67 69 72 53<br>
            Mail : evenements@scrumland.fr</p>
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

        const updateCarousel = (targetIndex) => {
            if (targetIndex < 0) {
                targetIndex = slides.length - 1;
            } else if (targetIndex >= slides.length) {
                targetIndex = 0;
            }

            const currentSlide = document.querySelector('.carousel-slide.active');
            currentSlide.classList.remove('active');
            slides[targetIndex].classList.add('active');

            const currentDot = document.querySelector('.dot.active');
            currentDot.classList.remove('active');
            dots[targetIndex].classList.add('active');

            currentIndex = targetIndex;
        };

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

        const startAutoPlay = () => {
            autoPlayInterval = setInterval(() => {
                updateCarousel(currentIndex + 1);
            }, 5000);
        };

        const resetAutoPlay = () => {
            clearInterval(autoPlayInterval);
            startAutoPlay();
        };

        startAutoPlay();
    });
</script>
