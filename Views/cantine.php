<?php 
require_once __DIR__ . '/Templates/header.php'; 
?>
<section class="hero-banner" style="background-color: #689f38;">
    <div class="hero-content">
        <h1>Restauration Scolaire</h1>
        <p>Des repas sains, locaux et équilibrés pour les petits écoliers de ScrumLand.</p>
    </div>
</section>

<main class="container-principal">

    <div class="main-column">
        
        <section class="bloc">
            <div class="bloc-header">
                <h2>Menus de la semaine</h2>
            </div>
            <div class="bloc-content">
                <p style="text-align: center; margin-bottom: 1rem; font-style: italic;">
                    Semaine du 20 au 24 Janvier 2025
                </p>

                <div class="menu-grid">
                    <article class="menu-card">
                        <div class="menu-header">Lundi 20</div>
                        <div class="menu-body">
                            <div class="plat-row">
                                <span class="plat-name">Salade de lentilles</span>
                            </div>
                            <div class="plat-row">
                                <span class="plat-name">Sauté de dinde <span class="label-bio">BIO</span></span>
                            </div>
                            <div class="plat-row">
                                <span class="plat-name">Petits pois carottes</span>
                            </div>
                            <div class="plat-row">
                                <span class="plat-name">Camembert</span>
                            </div>
                            <div class="plat-row">
                                <span class="plat-name">Pomme locale</span>
                            </div>
                        </div>
                    </article>

                    <article class="menu-card">
                        <div class="menu-header">Mardi 21</div>
                        <div class="menu-body">
                            <div class="plat-row">
                                <span class="plat-name">Potage légumes d'hiver</span>
                            </div>
                            <div class="plat-row">
                                <span class="plat-name">Filet de Colin Meunière</span>
                            </div>
                            <div class="plat-row">
                                <span class="plat-name">Riz Pilaf</span>
                            </div>
                            <div class="plat-row">
                                <span class="plat-name">Yaourt nature <span class="label-bio">BIO</span></span>
                            </div>
                        </div>
                    </article>

                    <article class="menu-card">
                        <div class="menu-header">Jeudi 23</div>
                        <div class="menu-body">
                            <div class="plat-row">
                                <span class="plat-name">Œuf mimosa</span>
                            </div>
                            <div class="plat-row">
                                <span class="plat-name">Lasagnes végétariennes</span>
                            </div>
                            <div class="plat-row">
                                <span class="plat-name">Salade verte</span>
                            </div>
                            <div class="plat-row">
                                <span class="plat-name">Tarte aux poires</span>
                            </div>
                        </div>
                    </article>

                    <article class="menu-card">
                        <div class="menu-header">Vendredi 24</div>
                        <div class="menu-body">
                            <div class="plat-row">
                                <span class="plat-name">Tomates vinaigrette</span>
                            </div>
                            <div class="plat-row">
                                <span class="plat-name">Haché de bœuf VBF</span>
                            </div>
                            <div class="plat-row">
                                <span class="plat-name">Frites maison</span>
                            </div>
                            <div class="plat-row">
                                <span class="plat-name">Glace vanille</span>
                            </div>
                        </div>
                    </article>
                </div>
                
                <div style="margin-top: 20px; text-align: right;">
                    <a href="#" class="btn btn-secondary" style="font-size: 0.9rem;">Voir les allergènes (PDF)</a>
                </div>
            </div>
        </section>

        <section class="bloc">
            <div class="bloc-header">
                <h2>Réserver des tickets</h2>
            </div>
            <div class="bloc-content">
                <div class="reservation-alert">
                    <strong>Attention :</strong> Toute réservation doit être effectuée au plus tard la veille avant 10h00.
                </div>

                <form action="#" method="POST" class="contact-form">
                    
                    <h3 style="font-size: 1.1rem; margin-bottom: 1rem; color: var(--primary-color);">Informations Famille</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nom_parent">Nom du Parent *</label>
                            <input type="text" id="nom_parent" name="nom_parent" required placeholder="Votre nom">
                        </div>
                        <div class="form-group">
                            <label for="email">Email de contact *</label>
                            <input type="email" id="email" name="email" required placeholder="exemple@email.com">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="prenom_enfant">Prénom de l'enfant *</label>
                            <input type="text" id="prenom_enfant" name="prenom_enfant" required placeholder="Prénom de l'élève">
                        </div>
                        <div class="form-group">
                            <label for="classe">Classe *</label>
                            <select id="classe" name="classe" required>
                                <option value="" disabled selected>-- Choisir --</option>
                                <option value="CP">CP</option>
                                <option value="CE1">CE1</option>
                                <option value="CE2">CE2</option>
                                <option value="CM1">CM1</option>
                                <option value="CM2">CM2</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Régime alimentaire spécifique</label>
                        <select name="regime">
                            <option value="standard">Standard</option>
                            <option value="sans_porc">Sans porc</option>
                            <option value="vegetarien">Végétarien</option>
                            <option value="pai">PAI (Allergie signalée)</option>
                        </select>
                    </div>

                    <hr style="border: 0; border-top: 1px solid #eee; margin: 1.5rem 0;">

                    <h3 style="font-size: 1.1rem; margin-bottom: 1rem; color: var(--primary-color);">Jours à réserver</h3>
                    
                    <div class="form-group checkbox-group" style="display: flex; gap: 20px; flex-wrap: wrap;">
                        <div>
                            <input type="checkbox" id="lundi" name="jours[]" value="lundi">
                            <label for="lundi">Lundi 20</label>
                        </div>
                        <div>
                            <input type="checkbox" id="mardi" name="jours[]" value="mardi">
                            <label for="mardi">Mardi 21</label>
                        </div>
                        <div>
                            <input type="checkbox" id="jeudi" name="jours[]" value="jeudi">
                            <label for="jeudi">Jeudi 23</label>
                        </div>
                        <div>
                            <input type="checkbox" id="vendredi" name="jours[]" value="vendredi">
                            <label for="vendredi">Vendredi 24</label>
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 20px;">
                        <button type="submit" class="btn btn-primary">Valider la réservation</button>
                    </div>
                </form>
            </div>
        </section>

    </div>

    <aside class="sidebar">
        
        <section class="bloc info-bloc">
            <h3>Tarifs 2025</h3>
            <ul class="contact-list">
                <li style="justify-content: space-between; display: flex;">
                    <span>Repas standard :</span>
                    <strong>4,20 €</strong>
                </li>
                <li style="justify-content: space-between; display: flex;">
                    <span>Tarif réduit (QF) :</span>
                    <strong>2,80 €</strong>
                </li>
                <li style="justify-content: space-between; display: flex;">
                    <span>Repas adulte :</span>
                    <strong>6,50 €</strong>
                </li>
            </ul>
            <p style="font-size: 0.8rem; margin-top: 10px; color: #666;">
                * Le tarif réduit s'applique sur présentation du quotient familial CAF.
            </p>
        </section>

        <section class="bloc">
            <h3>Documents utiles</h3>
            <ul class="direct-lines">
                <li>
                    <a href="#" style="text-decoration: none; color: inherit; display: flex; align-items: center;">
                        <i class="fas fa-file-pdf" style="color: var(--secondary-color); margin-right: 8px;"></i>
                        Menus de Janvier (PDF)
                    </a>
                </li>
                <li style="margin-top: 10px;">
                    <a href="#" style="text-decoration: none; color: inherit; display: flex; align-items: center;">
                        <i class="fas fa-file-alt" style="color: var(--secondary-color); margin-right: 8px;"></i>
                        Règlement intérieur
                    </a>
                </li>
            </ul>
        </section>

        <section class="bloc bloc-horaires">
            <h2>Contact Cantine</h2>
            <div style="font-size: 0.9rem;">
                <p><strong>Responsable :</strong> Mme Cuisine</p>
                <p style="margin-top: 5px;">04 23 45 67 95</p>
                <p style="margin-top: 5px;">cantine@scrumland.fr</p>
            </div>
            <div class="alert-info" style="margin-top:1rem; font-size:0.85rem; background: rgba(255,255,255,0.1); padding:0.5rem; border-radius:4px;">
                <em>Permanence téléphonique de 8h à 10h le matin.</em>
            </div>
        </section>

    </aside>

</main>

<?php 
require_once __DIR__ . '/Templates/footer.php'; 
?>