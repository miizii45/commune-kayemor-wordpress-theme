<?php get_header(); ?>

<main class="main-content">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <div class="mayor-profile">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/mayor.jpg')); ?>" alt="Mr Saliou CISSÉ" class="mayor-image">
                <div class="mayor-info">
                    <h2>Mr Saliou CISSÉ</h2>
                    <p>Maire de la commune de Kayemor</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Links Section -->
    <section class="quick-links">
        <div class="links-grid">
            <a href="#" class="link-card">
                <h3>Les commissions</h3>
            </a>
            <a href="#" class="link-card">
                <h3>Le Bureau municipal</h3>
            </a>
            <a href="#" class="link-card">
                <h3>Urbanisme et Habitat</h3>
            </a>
            <a href="#" class="link-card">
                <h3>LE BDL</h3>
            </a>
        </div>
    </section>

    <!-- Presentation Section -->
    <section class="presentation">
        <h2 class="section-title">Présentation de la Commune de Kayemor</h2>
        <div class="presentation-content">
            <p>La commune de Kayemor est située à 262 km de la capitale Dakar, à la limite entre la zone sahélienne sud et la zone soudanienne. Elle se trouve entre les longitudes 14°30' et 16°30' Ouest, et les latitudes 13°30' et 14°30' Nord. Elle couvre une superficie de 195 km².</p>
            
            <p>Le climat est de type soudano-sahélien, avec des températures élevées entre avril et juillet (35° à 40°C). Le relief est accidenté, et la végétation, très variée. Le réseau hydrographique est dominé par un affluent du fleuve Gambie : le Baobolong.</p>
            
            <p>La pluviométrie annuelle varie entre 600 mm et 1 100 mm.</p>
            
            <div class="stats-grid">
                <div class="stat-card">
                    <h4>Population</h4>
                    <p>30 000 habitants</p>
                </div>
                <div class="stat-card">
                    <h4>Superficie</h4>
                    <p>195 km²</p>
                </div>
                <div class="stat-card">
                    <h4>Villages</h4>
                    <p>23 villages et 17 hamos</p>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="news">
        <h2 class="section-title">Nos dernières actualités</h2>
        <div class="news-grid">
            <?php 
            if(have_posts()) :
                while(have_posts()) : the_post();
            ?>
                <article class="news-card">
                    <?php if(has_post_thumbnail()) : ?>
                        <div class="news-image">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="news-content">
                        <div class="news-date"><?php echo get_the_date(); ?></div>
                        <h3 class="news-title"><?php the_title(); ?></h3>
                        <div class="news-excerpt"><?php the_excerpt(); ?></div>
                        <a href="<?php the_permalink(); ?>" class="read-more">Plus de détails</a>
                    </div>
                </article>
            <?php 
                endwhile;
            endif;
            ?>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact">
        <h2 class="section-title">Contactez-nous</h2>
        <div class="contact-grid">
            <div class="contact-info">
                <h3>Pour nous contacter</h3>
                <ul class="contact-list">
                    <li><strong>Adresse:</strong> Avenue Habib Bourguiba X Rue Abébé Bikila</li>
                    <li><strong>Téléphone:</strong> (+221) 33 864 22 09</li>
                    <li><strong>Mobile:</strong> (+221) 30 105 27 42</li>
                    <li><strong>Email:</strong> bdlgranddakar@gmail.com</li>
                </ul>
            </div>
            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="contact-form"]'); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
