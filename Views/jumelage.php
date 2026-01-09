<?php require_once __DIR__ . '/Templates/header.php'; ?>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
<style>
    #map { height: 400px; width: 100%; border-radius: 8px; z-index: 1; }
</style>

<section class="hero-banner" style="background-color: var(--secondary-color);">
    <div class="hero-content">
        <h1>ScrumLand à l'international</h1>
        <p>Favoriser les échanges culturels et l'amitié entre les peuples.</p>
    </div>
</section>

<main class="container-principal">
    <div class="main-column">
        
        <section class="bloc">
            <div class="bloc-header"><h2>Localisation de nos partenaires</h2></div>
            <div class="bloc-content">
                <div id="map"></div>
                <p style="margin-top: 10px; font-size: 0.9em; color: #666; text-align: center;">
                    Carte des jumelages : ScrumLand (France), Kanban-ville (Italie) et Wasserfall-Dorf (Allemagne).
                </p>
            </div>
        </section>

        <section class="bloc">
            <div class="bloc-header"><h2>Nos Villes Sœurs</h2></div>
            <div class="bloc-content">
                <p>Depuis plus de 30 ans, ScrumLand tisse des liens étroits avec ses partenaires européens à travers des échanges scolaires, sportifs et culturels.</p>
                
                <div class="elus-grid" style="margin-top: 2rem;">
                    <div class="elu-card" style="text-align: center;">
                        <span style="font-size: 3rem;">🇮🇹</span>
                        <h3>Kanban-ville</h3>
                        <p><strong>Italie (Toscane)</strong></p>
                        <p>Jumelée depuis 1992. Échanges principalement axés sur la gastronomie et les arts plastiques.</p>
                    </div>

                    <div class="elu-card" style="text-align: center;">
                        <span style="font-size: 3rem;">🇩🇪</span>
                        <h3>Wasserfall-Dorf</h3>
                        <p><strong>Allemagne (Bavière)</strong></p>
                        <p>Jumelée depuis 2005. Partenariat sur le développement durable et la gestion des espaces naturels.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bloc">
            <h3>Comité de Jumelage</h3>
            <p>Vous souhaitez participer aux échanges ou accueillir une famille étrangère ? Contactez l'association du Comité de Jumelage.</p>
            <br />
            <p><em>jumelage@scrumland.fr</em></p>
        </section>
    </div>
</main>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script>
    // 1. Initialisation de la carte (Centrée sur l'Europe pour voir les 3 villes)
    // Coordonnées [Latitude, Longitude], Zoom
    var map = L.map('map').setView([45.8, 8.0], 5); 

    // 2. Ajout du fond de carte OpenStreetMap
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // 3. Ajout des marqueurs

    // Marqueur ScrumLand (Près de Montpellier)
    var markerScrum = L.marker([43.6117, 3.8777]).addTo(map);
    markerScrum.bindPopup("<b>ScrumLand</b><br>Notre ville agile").openPopup();

    // Marqueur Kanban-ville (Italie, Toscane - ex: Florence)
    var markerItaly = L.marker([43.7696, 11.2558]).addTo(map);
    markerItaly.bindPopup("<b>Kanban-ville</b><br>Italie (Toscane).");

    // Marqueur Wasserfall-Dorf (Allemagne, Bavière - ex: Munich)
    var markerGermany = L.marker([48.1351, 11.5820]).addTo(map);
    markerGermany.bindPopup("<b>Wasserfall-Dorf</b><br>Allemagne (Bavière).");

</script>

<?php require_once __DIR__ . '/Templates/footer.php'; ?>