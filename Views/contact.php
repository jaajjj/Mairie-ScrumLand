<?php 
require_once __DIR__ . '/Templates/header.php'; 
?>

    <!-- Hero Banner Spécifique Contact -->
    <section class="hero-banner" style="min-height: 250px; align-items: center;">
        <div class="hero-content">
            <h1>Contactez-nous</h1>
            <p>Une question ? Une démarche ? Nos services sont à votre écoute.</p>
        </div>
    </section>

    <main class="container-principal contact-layout">
        
        <!-- Colonne Gauche : Formulaire -->
        <div class="main-column">
            <section class="bloc">
                <div class="bloc-header">
                    <h2>Formulaire de contact</h2>
                </div>
                <div class="bloc-content">
                    <p style="margin-bottom: 1.5rem;">
                        Remplissez ce formulaire pour envoyer un message directement au service concerné. 
                        Les champs marqués d'un astérisque (*) sont obligatoires.
                    </p>

                    <form action="#" method="POST" class="contact-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nom">Nom *</label>
                                <input type="text" id="nom" name="nom" required placeholder="Votre nom">
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prénom *</label>
                                <input type="text" id="prenom" name="prenom" required placeholder="Votre prénom">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Adresse E-mail *</label>
                            <input type="email" id="email" name="email" required placeholder="exemple@email.com">
                        </div>

                        <div class="form-group">
                            <label for="service">Service concerné *</label>
                            <select id="service" name="service" required>
                                <option value="" disabled selected>-- Choisissez un service --</option>
                                <option value="accueil">Accueil / Renseignements généraux</option>
                                <option value="etat-civil">État Civil (Naissances, Mariages...)</option>
                                <option value="urbanisme">Urbanisme & Travaux</option>
                                <option value="scolaire">Affaires Scolaires & Cantine</option>
                                <option value="maire">Secrétariat du Maire</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="sujet">Sujet *</label>
                            <input type="text" id="sujet" name="sujet" required placeholder="Objet de votre message">
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="6" required placeholder="Votre message..."></textarea>
                        </div>

                        <div class="form-group checkbox-group">
                            <input type="checkbox" id="rgpd" name="rgpd" required>
                            <label for="rgpd">J'accepte que mes données soient traitées dans le cadre de ma demande de contact.</label>
                        </div>

                        <button type="submit" class="btn btn-primary">Envoyer le message</button>
                    </form>
                </div>
            </section>
            <!-- Coordonnées -->
        </div>

        <!-- Colonne Droite : Infos Pratiques -->
        <aside class="sidebar">

            <section class="bloc info-bloc">
                <h3>📍 Coordonnées</h3>
                <p><strong>Mairie de ScrumLand</strong><br>
                1 Place de l'Église<br>
                75000 ScrumLand</p>
                
                <ul class="contact-list">
                    <li><i class="fas fa-phone"></i> 01 23 45 67 89</li>
                    <li><i class="fas fa-envelope"></i> contact@scrumland.fr</li>
                </ul>
            </section>
            
            <!-- Horaires (Repris de l'accueil) -->
            <section class="bloc bloc-horaires">
                <h3>🕒 Horaires d'ouverture</h3>
                <div class="horaire-row">
                    <strong>Lundi - Vendredi</strong>
                    <span>08h30 - 17h30</span>
                </div>
                <div class="horaire-row">
                    <strong>Samedi matin</strong>
                    <span>09h00 - 12h00</span>
                </div>
                <div class="alert-info" style="margin-top:1rem; font-size:0.85rem; background: rgba(255,255,255,0.1); padding:0.5rem; border-radius:4px;">
                    <em>Fermé les dimanches et jours fériés.</em>
                </div>
            </section>

            <!-- Services Directs -->
            <section class="bloc">
                <h3>📞 Numéros directs</h3>
                <ul class="direct-lines">
                    <li><strong>Police Municipale :</strong> 01 23 45 67 90</li>
                    <li><strong>Services Techniques :</strong> 01 23 45 67 91</li>
                    <li><strong>CCAS :</strong> 01 23 45 67 92</li>
                </ul>
            </section>

        </aside>

    </main>

    <!-- Footer Simulation -->
    <footer style="background: var(--primary-color); color: white; padding: 2rem; margin-top: 3rem; text-align: center;">
        <p>&copy; 2025 Mairie de ScrumLand. Tous droits réservés.</p>
    </footer>

</body>
</html>