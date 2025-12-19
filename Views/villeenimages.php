<?php 
require_once __DIR__ . '/Templates/header.php'; 
?>

<!-- SECTION 1 : CARROUSEL IMMERSIF (Hero) -->
<section class="hero-carousel">
    <div class="carousel-track">
        
        <!-- Slide 1 -->
        <div class="carousel-slide active">
            <img src="https://www.lagazettefrance.fr/thumbs/1368%C3%971026/articles/2025/01/AdobeStock-74327759.jpeg" alt="Panorama Nature" class="carousel-image">
            <div class="overlay"></div>
            <div class="carousel-content">
                <h2>ScrumLand, Cœur de Nature</h2>
                <p>Une ville où il fait bon respirer.</p>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-slide">
            <img src="https://medias.tendanceouest.com/photos/1200/428855/?v=1747814070" alt="Parcs et Jardins" class="carousel-image">
            <div class="overlay"></div>
            <div class="carousel-content">
                <h2>Patrimoine & Jardins</h2>
                <p>L'alliance parfaite entre histoire et biodiversité.</p>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-slide">
            <img src="https://www.lightzoomlumiere.fr/wp-content/uploads/2018/11/Coeur-de-village-de-Najac-Aveyron-France-CoCo-architecture-Concepteur-lumiere-Wonderfulight-Copyright-Jean-Marc-Charles.jpg" alt="Architecture" class="carousel-image">
            <div class="overlay"></div>
            <div class="carousel-content">
                <h2>Architecture & Lumière</h2>
                <p>Découvrez nos monuments sous un nouveau jour.</p>
            </div>
        </div>

    </div>

    <!-- Navigation -->
    <button class="nav-btn prev">❮</button>
    <button class="nav-btn next">❯</button>

    <!-- Indicateurs -->
    <div class="carousel-dots">
        <button class="dot active" data-slide="0"></button>
        <button class="dot" data-slide="1"></button>
        <button class="dot" data-slide="2"></button>
    </div>
</section>


<!-- SECTION 2 : GALERIE PHOTO MODERNE -->
<main class="container-principal gallery-container">
    
    <div class="bloc-transparent">
        <div class="gallery-header">
            <h2>Instants de vie à ScrumLand</h2>
            <p>Promenade visuelle au fil des saisons.</p>
        </div>
        
        <!-- Grille Masonry -->
        <div class="gallery-grid">
            
            <!-- Item 1 : Marché -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1488459716781-31db52582fe9?auto=format&fit=crop&w=800&q=80" alt="Marché local" loading="lazy">
                <div class="gallery-caption">Le Marché du Samedi</div>
            </div>

            <!-- Item 2 : Rue fleurie -->
            <div class="gallery-item wide">
                <img src="https://www.saint-valery-sur-somme.fr/sites/default/files/styles/full/public/2023-01/05.png?itok=vDTA14wV" alt="Rue fleurie" loading="lazy">
                <div class="gallery-caption">Rues Fleuries</div>
            </div>

            <!-- Item 3 : Bibliothèque -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?auto=format&fit=crop&w=800&q=80" alt="Bibliothèque municipale" loading="lazy">
                <div class="gallery-caption">Médiathèque</div>
            </div>

            <!-- Item 4 : Sport -->
            <div class="gallery-item tall">
                <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?auto=format&fit=crop&w=800&q=80" alt="Sport en plein air" loading="lazy">
                <div class="gallery-caption">Sport pour Tous</div>
            </div>

            <!-- Item 5 : Concert -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?auto=format&fit=crop&w=800&q=80" alt="Concert et Culture" loading="lazy">
                <div class="gallery-caption">Festival d'Été</div>
            </div>

            <!-- Item 6 : Mairie Nuit -->
            <div class="gallery-item">
                <img src="https://static.actu.fr/uploads/2023/11/dsc08224-960x640.jpg" alt="Mairie de nuit" loading="lazy">
                <div class="gallery-caption">Lumières Nocturnes</div>
            </div>

            <!-- Item 7 : Parc -->
            <div class="gallery-item wide">
                <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=1200&q=80" alt="Champs aux alentours" loading="lazy">
                <div class="gallery-caption">Espaces Naturels</div>
            </div>

             <!-- Item 8 : École -->
             <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=80" alt="École et éducation" loading="lazy">
                <div class="gallery-caption">Écoles & Jeunesse</div>
            </div>

        </div>
    </div>

</main>

<!-- SCRIPT JS POUR LE CARROUSEL -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const slides = document.querySelectorAll('.carousel-slide');
        const dots = document.querySelectorAll('.dot');
        const prevBtn = document.querySelector('.nav-btn.prev');
        const nextBtn = document.querySelector('.nav-btn.next');
        let currentSlide = 0;
        const slideInterval = 6000;
        let autoSlide;

        function showSlide(index) {
            if (index >= slides.length) currentSlide = 0;
            else if (index < 0) currentSlide = slides.length - 1;
            else currentSlide = index;

            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));

            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
        }

        function nextSlide() { showSlide(currentSlide + 1); }
        function prevSlide() { showSlide(currentSlide - 1); }
        function startAutoSlide() { autoSlide = setInterval(nextSlide, slideInterval); }
        function resetAutoSlide() { clearInterval(autoSlide); startAutoSlide(); }

        nextBtn.addEventListener('click', () => { nextSlide(); resetAutoSlide(); });
        prevBtn.addEventListener('click', () => { prevSlide(); resetAutoSlide(); });
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => { showSlide(index); resetAutoSlide(); });
        });

        startAutoSlide();
    });
</script>

<?php 
require_once __DIR__ . '/Templates/footer.php'; 
?>