<?php 
require_once 'views/templates/header.php';
?>

<main class="container-accueil">
    <!-- Bloc Numéros d'urgence -->
    <section class="bloc bloc-urgence">
        <h2>Numéros d’urgence</h2>
        <ul>
            <li><strong>Urgences européennes (pompiers / secours)</strong> : 112</li>
            <li><strong>Police</strong> : 17</li>
            <li><strong>Samu</strong> : 15</li>
            <li><strong>Mairie de ScrumLand</strong> : 01 23 45 67 89</li>
        </ul>
    </section>

    <!-- Bloc Présentation de la ville -->
    <section class="bloc bloc-presentation">
        <h2>Bienvenue à ScrumLand</h2>
        <p>
            ScrumLand est une commune dynamique qui met l’accent sur la collaboration,
            l’innovation et la qualité de vie de ses habitants.
        </p>
        <p>
            Retrouvez ici toutes les informations pratiques, les services municipaux
            et les actualités de votre ville.
        </p>
    </section>

    <!-- Bloc Fil d’actualité -->
    <section class="bloc bloc-actus">
        <h2>Fil d’actualité</h2>
        <article class="actu">
            <h3>Conseil municipal – 20 janvier</h3>
            <p>Prochaine séance du conseil municipal à 18h à la salle des fêtes.</p>
        </article>
        <article class="actu">
            <h3>Travaux rue des Sprints</h3>
            <p>Des travaux de voirie auront lieu du 5 au 10 février. Merci de votre compréhension.</p>
        </article>
        <article class="actu">
            <h3>Inscription aux activités périscolaires</h3>
            <p>Les inscriptions pour le trimestre sont ouvertes sur l’espace familles.</p>
        </article>
    </section>
</main>

<?php
require_once 'views/templates/footer.php';
?>
