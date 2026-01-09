<?php
require_once __DIR__ . '/Templates/header.php';
?>

<!-- Hero Banner -->
<section class="hero-banner"
    style="background: linear-gradient(rgba(26, 77, 46, 0.9), rgba(79, 119, 45, 0.8)), url('<?php echo getenv('BASE_URL'); ?>Assets/img/mairie.jpg'); background-size: cover; background-position: center;">
    <div class="hero-content">
        <h1>Bulletins Municipaux</h1>
        <p>Retrouvez toute l'actualité de ScrumLand en version numérique.</p>
    </div>
</section>

<main class="container-principal">

    <!-- Main Content: Bulletins Grid -->
    <div class="main-column">
        <section class="bloc">
            <div class="bloc-header">
                <h2>Archives Récentes</h2>
            </div>

            <p style="margin-bottom: 2rem; color: var(--text-light);">
                Consultez et téléchargez les derniers numéros de "ScrumLand Mag".
                Les fichiers sont au format PDF.
            </p>

            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 2rem;">

                <!-- Bulletin Card Example 1 -->
                <div class="bulletin-card"
                    style="text-align: center; background: #f8fafc; padding: 1.5rem; border-radius: 8px; border: 1px solid #e2e8f0; transition: transform 0.2s;">
                    <div style="font-size: 3rem; color: var(--primary-color); margin-bottom: 1rem;">
                        <i class="fas fa-file-pdf"></i> 📄
                    </div>
                    <h3 style="font-size: 1.1rem; margin-bottom: 0.5rem; color: var(--text-dark);">Janvier 2026</h3>
                    <span style="display: block; font-size: 0.85rem; color: var(--text-light); margin-bottom: 1rem;">N°
                        142 • 2.4 Mo</span>
                    <a href="<?php echo getenv('BASE_URL'); ?>Assets/docs/bulletins/bulletin-jan-2026.pdf"
                        class="btn btn-outline" style="font-size: 0.9rem; padding: 0.5rem 1rem;"
                        download>Télécharger</a>
                </div>

                <!-- Bulletin Card Example 2 -->
                <div class="bulletin-card"
                    style="text-align: center; background: #f8fafc; padding: 1.5rem; border-radius: 8px; border: 1px solid #e2e8f0; transition: transform 0.2s;">
                    <div style="font-size: 3rem; color: var(--text-light); margin-bottom: 1rem;">
                        <i class="fas fa-file-pdf"></i> 📄
                    </div>
                    <h3 style="font-size: 1.1rem; margin-bottom: 0.5rem; color: var(--text-dark);">Décembre 2025</h3>
                    <span style="display: block; font-size: 0.85rem; color: var(--text-light); margin-bottom: 1rem;">N°
                        141 • 3.1 Mo</span>
                    <a href="<?php echo getenv('BASE_URL'); ?>Assets/docs/bulletins/bulletin-dec-2025.pdf"
                        class="btn btn-outline" style="font-size: 0.9rem; padding: 0.5rem 1rem;"
                        download>Télécharger</a>
                </div>

                <!-- Bulletin Card Example 3 -->
                <div class="bulletin-card"
                    style="text-align: center; background: #f8fafc; padding: 1.5rem; border-radius: 8px; border: 1px solid #e2e8f0; transition: transform 0.2s;">
                    <div style="font-size: 3rem; color: var(--text-light); margin-bottom: 1rem;">
                        <i class="fas fa-file-pdf"></i> 📄
                    </div>
                    <h3 style="font-size: 1.1rem; margin-bottom: 0.5rem; color: var(--text-dark);">Novembre 2025</h3>
                    <span style="display: block; font-size: 0.85rem; color: var(--text-light); margin-bottom: 1rem;">N°
                        140 • 2.8 Mo</span>
                    <a href="<?php echo getenv('BASE_URL'); ?>Assets/docs/bulletins/bulletin-nov-2025.pdf"
                        class="btn btn-outline" style="font-size: 0.9rem; padding: 0.5rem 1rem;"
                        download>Télécharger</a>
                </div>

                <!-- Bulletin Card Example 4 -->
                <div class="bulletin-card"
                    style="text-align: center; background: #f8fafc; padding: 1.5rem; border-radius: 8px; border: 1px solid #e2e8f0; transition: transform 0.2s;">
                    <div style="font-size: 3rem; color: var(--text-light); margin-bottom: 1rem;">
                        <i class="fas fa-file-pdf"></i> 📄
                    </div>
                    <h3 style="font-size: 1.1rem; margin-bottom: 0.5rem; color: var(--text-dark);">Octobre 2025</h3>
                    <span style="display: block; font-size: 0.85rem; color: var(--text-light); margin-bottom: 1rem;">N°
                        139 • 2.5 Mo</span>
                    <a href="<?php echo getenv('BASE_URL'); ?>Assets/docs/bulletins/bulletin-oct-2025.pdf"
                        class="btn btn-outline" style="font-size: 0.9rem; padding: 0.5rem 1rem;"
                        download>Télécharger</a>
                </div>

            </div>
        </section>
    </div>

    <!-- Sidebar -->
    <aside class="sidebar">
        <section class="bloc" style="background-color: var(--primary-color); color: white;">
            <h3 style="color: var(--accent-color); border-bottom-color: rgba(255,255,255,0.2);">Newsletter</h3>
            <p>Recevez le bulletin municipal directement dans votre boîte mail chaque début de mois.</p>

            <form action="#" style="margin-top: 1rem;">
                <div style="margin-bottom: 1rem;">
                    <input type="email" placeholder="Votre adresse email"
                        style="width: 100%; padding: 0.8rem; border-radius: 4px; border: none;">
                </div>
                <button type="button" class="btn btn-primary"
                    style="width: 100%; border: none; cursor: pointer;">S'abonner</button>
                <p style="font-size: 0.75rem; margin-top: 0.5rem; opacity: 0.8;">En cliquant sur s'abonner, vous
                    acceptez notre politique de confidentialité.</p>
            </form>
        </section>

        <section class="bloc">
            <h3>Archives</h3>
            <ul style="list-style: none;">
                <li style="padding: 0.5rem 0; border-bottom: 1px solid #f0f0f0;"><a href="#">Année 2024 (12)</a></li>
                <li style="padding: 0.5rem 0; border-bottom: 1px solid #f0f0f0;"><a href="#">Année 2023 (11)</a></li>
                <li style="padding: 0.5rem 0; border-bottom: 1px solid #f0f0f0;"><a href="#">Année 2022 (10)</a></li>
            </ul>
        </section>
    </aside>

</main>

<?php require_once __DIR__ . '/Templates/footer.php'; ?>