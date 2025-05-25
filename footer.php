</div><!-- .site-content -->

    <footer class="site-footer">
        <div class="footer-content">
            <div class="footer-grid">
                <!-- About Section -->
                <div class="footer-section">
                    <h3>À propos</h3>
                    <p>La commune de Kayemor, située à 262 km de Dakar, est une collectivité territoriale engagée dans le développement local et le bien-être de ses citoyens.</p>
                </div>

                <!-- Contact Info -->
                <div class="footer-section">
                    <h3>Contactez-nous</h3>
                    <ul class="footer-contact">
                        <li>
                            <strong>Siège de la mairie:</strong>
                            <span>Avenue Habib Bourguiba X Rue Abébé Bikila</span>
                        </li>
                        <li>
                            <strong>Téléphone:</strong>
                            <span>(+221) 33 864 22 09</span>
                        </li>
                        <li>
                            <strong>Mobile:</strong>
                            <span>(+221) 30 105 27 42</span>
                        </li>
                        <li>
                            <strong>Email:</strong>
                            <span>bdlgranddakar@gmail.com</span>
                        </li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div class="footer-section">
                    <h3>Liens rapides</h3>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'container' => false,
                        'menu_class' => 'footer-menu',
                        'fallback_cb' => false
                    ));
                    ?>
                </div>

                <!-- Working Hours -->
                <div class="footer-section">
                    <h3>Heures d'ouverture</h3>
                    <ul class="working-hours">
                        <li>Lundi - Vendredi: 8h00 - 17h00</li>
                        <li>Samedi: 9h00 - 13h00</li>
                        <li>Dimanche: Fermé</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="footer-bottom">
            <div class="copyright">
                <p>&copy; <?php echo date('Y'); ?> Commune de Kayemor. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
