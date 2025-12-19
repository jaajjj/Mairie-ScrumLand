<?php
    require_once 'Views/Templates/header.php';
?>

<main class="content culture-page">
    <section class="culture-intro">
        <h1>Culture à ScrumLand</h1>
        <p>
            Découvrez les événements, les lieux et les activités qui font vibrer la vie culturelle de ScrumLand.
            Une ville dynamique, créative et ouverte à tous.
        </p>
    </section>

    <section class="culture-layout">
        <!-- Événements -->
        <section class="culture-section culture-events">
            <h2>Événements culturels</h2>
            <ul>
                <li class="culture-event-item">
                    <div class="culture-event-text">
                        Activités périscolaires
                        <span>Tous les 2ᵉ et 4ᵉ mercredis du mois</span>
                    </div>
                    <img class="culture-img"
                         src="<?php echo getenv('BASE_URL') ?>Assets/img/act_peri.png"
                         alt="Activités périscolaires à ScrumLand">
                </li>

                <li class="culture-event-item">
                    <div class="culture-event-text">
                        Exposition d'art local
                        <span>Exposition permanente au musée de ScrumLand</span>
                    </div>
                    <img class="culture-img"
                         src="<?php echo getenv('BASE_URL') ?>Assets/img/artLocal.jpeg"
                         alt="Exposition d'art local à ScrumLand">
                </li>

                <li class="culture-event-item">
                    <div class="culture-event-text">
                        Théâtre en plein air
                        <span>Tous les vendredis soir</span>
                    </div>
                    <img class="culture-img"
                         src="<?php echo getenv('BASE_URL') ?>Assets/img/theatreAir.jpg"
                         alt="Théâtre en plein air à ScrumLand">
                </li>
            </ul>
        </section>

        <!-- Lieux -->
        <section class="culture-section culture-venues">
            <h2>Lieux culturels</h2>
            <ul>
                <li class="culture_lieu">
                    <span>Musée d'Histoire de ScrumLand</span>
                    <button class="mapsButton">
                        <a href="https://www.google.com/maps/place/Musée+d'Histoire+de+ScrumLand"
                           target="_blank"
                           class="btn-maps">
                            Voir sur Maps
                        </a>
                    </button>
                </li>

                <li class="culture_lieu">
                    <span>Centre des Arts Contemporains</span>
                    <button class="mapsButton">
                        <a href="https://www.google.com/maps/place/Centre+des+Arts+Contemporains+ScrumLand"
                           target="_blank"
                           class="btn-maps">
                            Voir sur Maps
                        </a>
                    </button>
                </li>

                <li class="culture_lieu">
                    <span>Bibliothèque municipale</span>
                    <button class="mapsButton">
                        <a href="https://www.google.com/maps/place/Bibliothèque+Municipale+ScrumLand"
                           target="_blank"
                           class="btn-maps">
                            Voir sur Maps
                        </a>
                    </button>
                </li>
            </ul>
        </section>
    </section>
</main>

<?php
    require_once 'Views/Templates/footer.php';
?>