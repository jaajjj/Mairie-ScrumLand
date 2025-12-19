<?php 
// Inclusion du header (adaptez le chemin si nécessaire selon votre point d'entrée index.php)
require_once __DIR__ . '/Templates/header.php'; 
?>
<section class="page-elus">
    <div class="container">
        <h1>Les élus de ScrumLand</h1>

        <div class="elus-grid">
            <article class="elu-card">
                <div class="elu-avatar">
                    <img src="<?php echo $baseUrl; ?>assets/img/Jean.jpg" alt="Photo du Maire">
                </div>
                <h2>Maire</h2>
                <p class="elu-nom">Jean Dupont</p>
                <p class="elu-fonction">Maire de ScrumLand</p>
                <p class="elu-contact">maire@scrumland.fr</p>
            </article>

            <article class="elu-card">
                <div class="elu-avatar">
                    <img src="<?php echo $baseUrl; ?>assets/img/Marie.jpg" alt="Photo de la 1ère adjointe">
                </div>
                <h2>1<sup>ère</sup> adjointe</h2>
                <p class="elu-nom">Marie Martin</p>
                <p class="elu-fonction">Adjointe aux finances</p>
                <p class="elu-contact">m.martin@scrumland.fr</p>
            </article>

            <article class="elu-card">
                <div class="elu-avatar">
                    <img src="<?php echo $baseUrl; ?>assets/img/Lucas.jpg" alt="Photo du 2e adjoint">
                </div>
                <h2>2<sup>e</sup> adjoint</h2>
                <p class="elu-nom">Lucas Bernard</p>
                <p class="elu-fonction">Adjoint à l’urbanisme</p>
                <p class="elu-contact">l.bernard@scrumland.fr</p>
            </article>
        </div>
    </div>
</section>
<section class="maires-timeline">
    <div class="container">
        <h2>Chronologie des maires depuis 1950</h2>

        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-date">1950 - 1962</div>
                <div class="timeline-content">
                    <h3>André Morel</h3>
                    <p>Maire de ScrumLand durant la période d’après-guerre, modernisation des infrastructures de base.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date">1962 - 1978</div>
                <div class="timeline-content">
                    <h3>Louise Carpentier</h3>
                    <p>Développement des quartiers résidentiels et création de nouvelles écoles.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date">1978 - 1990</div>
                <div class="timeline-content">
                    <h3>Georges Lemaître</h3>
                    <p>Impulsion culturelle avec ouverture de la médiathèque municipale.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date">1990 - 2005</div>
                <div class="timeline-content">
                    <h3>Sophie Verdier</h3>
                    <p>Développement durable, premiers plans de verdissement de ScrumLand.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date">2005 - 2020</div>
                <div class="timeline-content">
                    <h3>Paul Navarro</h3>
                    <p>Numérisation des services municipaux et rénovation du centre-ville.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date">2020 - Aujourd’hui</div>
                <div class="timeline-content">
                    <h3>Jean Dupont</h3>
                    <p>Poursuite de la transition écologique et des projets citoyens participatifs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
require_once __DIR__ . '/Templates/footer.php'; 
?>
