<!-- Footer -->
<footer>
        <div class="footer-content">
            <div class="footer-col">
                <h4>Mairie de ScrumLand</h4>
                <p>Au service des habitants depuis 1842.</p>
                <p style="margin-top: 1rem;">
                    📍 1 Place de l'Église<br>
                    65000 ScrumLand
                </p>
            </div>
            <div class="footer-col">
                <h4>Accès Rapide</h4>
                <ul>
                    <li><a href="#">Démarches administratives</a></li>
                    <li><a href="#">Menu de la cantine</a></li>
                    <li><a href="#">Liste des élus</a></li>
                    <li><a href="<?php echo getenv('BASE_URL'); ?>Views/contactView.php">Page de contact</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Restons connectés</h4>
                <ul>
                    <li><a href="#">Bulletins municipaux</a></li>
                    <li><a href="#">Page associative</a></li>
                    <li><a href="#">Calendrier des manifestations</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            &copy; <?php echo date("Y"); ?> Mairie de ScrumLand. Tous droits réservés. <a href="#">Mentions légales</a>.
        </div>
    </footer>

</body>
</html>