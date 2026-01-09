<?php 
require_once __DIR__ . '/Templates/header.php'; 
?>

<main class="container-principal">

    <div class="main-column">

        <section class="bloc bloc-presentation">
            <div class="bloc-header">
                <h2>Vie associative</h2>
            </div>
            <div class="bloc-content">
                <p>
                    ScrumLand dispose d'un tissu associatif riche et dynamique : sport, culture, solidarité et animations locales. Retrouvez ci-dessous les associations locales, leurs contacts et les prochaines dates importantes pour vous engager ou participer.
                </p>
            </div>
        </section>

        <section class="bloc bloc-list-assos">
            <div class="bloc-header">
                <h2>Associations locales</h2>
            </div>

            <div class="grid-assos">
                <article class="card-assos">
                    <img src="<?php echo $baseUrl ?>Assets/img/sports/football.jpg" alt="Football ScrumLand">
                    <div class="card-body">
                        <h3>Football Club de ScrumLand</h3>
                        <p>Club omnisports pour les jeunes et adultes. Entraînements : mardi et jeudi 18h30 au stade municipal.</p>
                        <p><strong>Contact :</strong> contact@fc-scrumland.fr — <strong>Tél :</strong> 04 91 22 33 44</p>
                        <a class="btn-link" href="<?php echo $baseUrl ?>contact">Contacter</a>
                    </div>
                </article>

                <article class="card-assos">
                    <img src="<?php echo $baseUrl ?>Assets/img/sports/yoga.jpg" alt="Yoga ScrumLand">
                    <div class="card-body">
                        <h3>Ateliers Yoga & Bien-être</h3>
                        <p>Ateliers hebdomadaires ouverts à tous les niveaux. Lieux : salle Jules Ferry.</p>
                        <p><strong>Animatrice :</strong> Marie Dupont — <strong>Tél :</strong> 06 12 34 56 78</p>
                        <a class="btn-link" href="#inscription-yoga">S'inscrire</a>
                    </div>
                </article>

                <article class="card-assos">
                    <img src="<?php echo $baseUrl ?>Assets/img/sports/benevolat.jpg" alt="Bénévolat ScrumLand">
                    <div class="card-body">
                        <h3>Association des Bénévoles</h3>
                        <p>Soutien aux événements locaux et actions solidaires (banque alimentaire, aide aux aînés).</p>
                        <p><strong>Responsable :</strong> Mme Legrand — <strong>Tél :</strong> 04 91 55 22 33</p>
                        <a class="btn-link" href="#benevolat">En savoir plus</a>
                    </div>
                </article>
            </div>

        </section>

        <section class="bloc bloc-evenements">
            <div class="bloc-header">
                <h2>Prochains rendez-vous</h2>
            </div>
            <div class="bloc-content">
                <ul class="list-evenements">
                    <li><strong>12 Mars 2026</strong> — Tournoi intercommunal de football (stade municipal)</li>
                    <li><strong>29 Avril 2026</strong> — Fête des associations (place du village)</li>
                    <li><strong>15 Mai 2026</strong> — Atelier jardinage partagé (Jardins familiaux)</li>
                </ul>
                <p style="margin-top: 1rem;">Vous souhaitez inscrire une association ou proposer un événement ? Envoyez-nous les informations via la <a href="<?php echo $baseUrl ?>contact">page contact</a>.</p>
            </div>
        </section>

    </div>

    <aside class="sidebar">
        <section class="bloc bloc-contact-assos">
            <h2>Inscription & contact</h2>
            <p>Pour enregistrer une association au registre municipal, merci d'envoyer :</p>
            <ul>
                <li>Nom de l'association</li>
                <li>Objet / activités</li>
                <li>Personne à contacter + téléphone</li>
                <li>Attestation d'assurance</li>
            </ul>
            <p style="margin-top:0.5rem;"><strong>Mail :</strong> associations@scrumland.fr</p>
            <p><strong>Accueil Mairie :</strong> 04 91 55 11 11</p>
            <a class="btn-primary" href="<?php echo $baseUrl ?>contact">Nous contacter</a>
        </section>

        <section class="bloc bloc-ressources">
            <h2>Ressources utiles</h2>
            <ul>
                <li><a href="#">Modèle de dossier d'inscription (PDF)</a></li>
                <li><a href="#">Guide des salles communales</a></li>
                <li><a href="#">Procédure de demande de subvention</a></li>
            </ul>
        </section>

        <section class="bloc bloc-map" style="text-align:center;">
            <h3>Localisation</h3>
            <div style="width:100%; height:180px; background:#e9eef0; display:flex; align-items:center; justify-content:center; color:#666;">Carte interactive à venir</div>
        </section>
    </aside>

</main>

<?php 
require_once __DIR__ . '/Templates/footer.php'; 
?>
