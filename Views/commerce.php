<?php
require_once __DIR__ . '/Templates/header.php'; 
?>

<!-- Views/commerce.php -->
<section class="commerce-page">
  <div class="hero-small">
    <div class="container-principal">
      <div class="hero-content">
        <h1>Commerce : Liste des commerces</h1>
        <p>Découvrez les commerces locaux — gastronomie, boulangerie, high-tech et literie. Informations pratiques, images et position Google Maps.</p>
      </div>
    </div>
  </div>

  <main class="container-principal commerces-list">
    <section class="commerces-grid">
      <!-- Card 1: Restaurant -->
      <article class="commerce-card">
        <figure class="commerce-media">
          <img src="Assets/img/restaurant.jpg" alt="Restaurant Lafaillette" />
        </figure>
        <div class="commerce-body">
          <h2>Restaurant Lafaillette <span class="tag">Gastronomique</span></h2>
          <p class="meta">Chef étoilé | Plats inventifs | Service du midi & soir</p>
          <p class="desc">Lafaillette propose une cuisine française contemporaine, produits locaux, menu dégustation 6 services. Atmosphère élégante et accueil chaleureux.</p>
          <ul class="info-list">
            <li><strong>Adresse :</strong> 12 rue du Marché, 75000 Ville</li>
            <li><strong>Horaires :</strong> Mar–Dim 12:00–14:30 / 19:00–22:30</li>
            <li><strong>Tél :</strong> 01 23 45 67 89</li>
          </ul>
          <div class="card-actions">
            <a class="btn-map" href="https://www.google.com/maps/search/?api=1&query=48.8566,2.3522" target="_blank" rel="noopener">Voir sur Google Maps</a>
          </div>
        </div>
      </article>

      <!-- Card 2: Boulangerie -->
      <article class="commerce-card">
        <figure class="commerce-media">
          <img src="Assets/img/boulangerie.jpg" alt="Boulangerie Le Bon Pain" />
        </figure>
        <div class="commerce-body">
          <h2>Boulangerie Le Bon Pain <span class="tag">Tradition</span></h2>
          <p class="meta">Pain au levain | Viennoiseries maison | Sandwichs gourmands</p>
          <p class="desc">Depuis 1985, Le Bon Pain travaille farines locales et levain naturel. Pains croustillants et viennoiseries fondantes, idéal pour le petit-déjeuner.</p>
          <ul class="info-list">
            <li><strong>Adresse :</strong> 5 place du Village, 75000 Ville</li>
            <li><strong>Horaires :</strong> Lun–Sam 6:30–19:00</li>
            <li><strong>Tél :</strong> 01 98 76 54 32</li>
          </ul>
          <div class="card-actions">
            <a class="btn-map" href="https://www.google.com/maps/search/?api=1&query=48.8570,2.3500" target="_blank" rel="noopener">Voir sur Google Maps</a>
          </div>
        </div>
      </article>

      <!-- Card 3: Magasin Tech -->
      <article class="commerce-card">
        <figure class="commerce-media">
          <img src="Assets/img/magazin-tech.jpg" alt="TechHub Magasin" />
        </figure>
        <div class="commerce-body">
          <h2>LDLC <span class="tag">High-Tech</span></h2>
          <p class="meta">Ordinateurs, smartphones, réparations rapides</p>
          <p class="desc">LDLC propose vente, diagnostics et atelier de réparation. Conseils personnalisés et test de matériel sur rendez-vous.</p>
          <ul class="info-list">
            <li><strong>Adresse :</strong> 23 avenue des Innovations, 75000 Ville</li>
            <li><strong>Horaires :</strong> Lun–Sam 10:00–19:00</li>
            <li><strong>Tél :</strong> 01 44 55 66 77</li>
          </ul>
          <div class="card-actions">
            <a class="btn-map" href="https://www.google.com/maps/search/?api=1&query=48.8580,2.3490" target="_blank" rel="noopener">Voir sur Google Maps</a>
          </div>
        </div>
      </article>

      <!-- Card 4: Magasin de lit -->
      <article class="commerce-card">
        <figure class="commerce-media">
          <img src="Assets/img/magazin-lit.jpg" alt="Confort & Rêve - Literie" />
        </figure>
        <div class="commerce-body">
          <h2>France Literie <span class="tag">Literie</span></h2>
          <p class="meta">Matelas ergonomiques | Conseils posturaux</p>
          <p class="desc">France Literie accompagne votre choix de literie avec essais en magasin, conseils santé du sommeil et livraison avec installation.</p>
          <ul class="info-list">
            <li><strong>Adresse :</strong> 8 rue du Sommeil, 75000 Ville</li>
            <li><strong>Horaires :</strong> Mar–Sam 10:00–18:30</li>
            <li><strong>Tél :</strong> 01 11 22 33 44</li>
          </ul>
          <div class="card-actions">
            <a class="btn-map" href="https://www.google.com/maps/search/?api=1&query=48.8590,2.3505" target="_blank" rel="noopener">Voir sur Google Maps</a>
          </div>
        </div>
      </article>
    </section>

      <div class="bloc">
        <div class="bloc-header">
          <h2>Informations utiles</h2>
        </div>
        <div class="bloc-body">
          <p>Horaires modifiables — vérifiez le site ou appelez avant de vous déplacer.</p>
          <p>Photos non contractuelles — informations fictives pour démonstration.</p>
        </div>
      </div>
    </aside>
  </main>
</section>
<?php require_once __DIR__ . '/Templates/footer.php'; ?>