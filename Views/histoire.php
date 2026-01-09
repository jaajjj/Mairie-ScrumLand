<?php 
// Inclusion du header (adaptez le chemin si nécessaire selon votre point d'entrée index.php)
require_once __DIR__ . '/Templates/header.php'; 
?>
<section class="ville-art-hero">
    <div class="container">
        <h1>ScrumLand, ville d’art et d’histoire</h1>
        <p>
            De village forestier à cité numérique, ScrumLand s’est transformée au fil des décennies
            tout en préservant son patrimoine et son identité.
        </p>
    </div>
</section>

<section class="ville-art-eras">
    <div class="container">

        <!-- 1. ScrumLand rurale (années 1950) -->
        <article class="era-row">
            <div class="era-image">
                <img src="https://imgs.search.brave.com/XsSVTjJO98MATmE2C5rAcEZTqiQJhfOwwi2l4srrXwI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5zdWRvdWVzdC5m/ci8yMjY1MzE4OS8x/MjAweC0xLzJmaTc5/OS1oYWxsZXMtZGUt/cGF1LTE5NjcuanBn/P3Y9MTczNzIwODgw/MA">
            </div>
            <div class="era-text">
                <h2>Années 1950 – Les racines rurales</h2>
                <p>
                    À l’origine, ScrumLand n’était qu’un bourg entouré de forêts et de chemins de terre,
                    où l’on vivait surtout de l’agriculture et de l’artisanat.
                </p>
                <p>
                    Les premières maisons en pierre, la place du marché et l’ancienne église forment encore
                    aujourd’hui le cœur historique de la ville.
                </p>
            </div>
        </article>

        <!-- 2. Essor industriel (1970–1990) -->
        <article class="era-row era-row--reverse">
            <div class="era-image">
                <img src="https://imgs.search.brave.com/ficOQbTRhUA7ZQzmUcJLaAjVMNOXRJabzMg2_aWqcaY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/Y2xhc3NpY2NvdXJz/ZXMuZnIvd3AtY29u/dGVudC91cGxvYWRz/LzIwMjMvMDUvRWN1/cmllLU1hc2VyYXRp/LUdQLWRlLVBhdTE5/NTUtJUMyJUE5LURS/LnBuZw" alt="ScrumLand industrielle dans les années 1970">
            </div>
            <div class="era-text">
                <h2>1970 – 1990 : L’essor industriel</h2>
                <p>
                    L’arrivée des premières usines et des zones d’activité a profondément transformé
                    ScrumLand, attirant de nouveaux habitants.
                </p>
                <p>
                    Des quartiers modernes se construisent autour du centre ancien,
                    créant un contraste architectural entre patrimoine et béton.
                </p>
            </div>
        </article>

        <!-- 3. Culture & patrimoine (1990–2010) -->
        <article class="era-row">
            <div class="era-image">
                <img src="https://imgs.search.brave.com/mA-PmCJK5Wt2-rbRp7m1AgUDPUzX7-zO4NRV2AgcsoM/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93b29k/eS5jbG91ZGx5LnNw/YWNlL2FwcC91cGxv/YWRzL3BhdS8yMDI0/LzA2L3RodW1icy9t/dXNlZS1iZWF1eC1h/cnRzLXBhdS0wMy02/NDB4MzYwLWNyb3At/MTcxOTMyNjg1Mi53/ZWJw" alt="Vie culturelle et festivals à ScrumLand">
            </div>
            <div class="era-text">
                <h2>1990 – 2010 : Le réveil culturel</h2>
                <p>
                    ScrumLand consacre cette période à la mise en valeur de son patrimoine :
                    restauration des façades, création de la médiathèque et d’un parcours patrimonial.
                </p>
                <p>
                    Les festivals, expositions et résidences d’artistes donnent à la ville
                    une nouvelle visibilité régionale.
                </p>
            </div>
        </article>

        <article class="era-row era-row--reverse">
            <div class="era-image">
                <img src="https://imgs.search.brave.com/NB4SGb9L0-20dv3YvF7Fx9T2efTpjskwaB56j4p0xxw/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93b29k/eS5jbG91ZGx5LnNw/YWNlL2FwcC91cGxv/YWRzL3BhdS8yMDI0/LzA1L3RodW1icy9n/YXZlLWRlLXBhdS1w/b250LTE0LWp1aWxs/ZXQtY2hhdGVhdS1w/YXUtMS02NDB4MzIw/LndlYnA" alt="ScrumLand ville connectée et durable">
            </div>
            <div class="era-text">
                <h2>2010 – Aujourd’hui : Ville créative et connectée</h2>
                <p>
                    ScrumLand mise désormais sur l’innovation numérique, les tiers-lieux,
                    et des espaces publics repensés pour les mobilités douces.
                </p>
                <p>
                    Entre patrimoine sauvegardé et nouveaux bâtiments éco‑conçus,
                    la ville revendique pleinement son statut de “ville d’art et d’histoire”.
                </p>
            </div>
        </article>

    </div>
</section>

<?php 
require_once __DIR__ . '/Templates/footer.php'; 
?>