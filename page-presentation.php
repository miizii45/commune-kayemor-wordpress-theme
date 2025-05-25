<?php
/**
 * Template Name: Page Présentation
 * 
 * This is a custom template for the presentation page
 */

get_header(); ?>

<main class="presentation-page">
    <div class="page-hero">
        <div class="container">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </div>
    </div>

    <div class="container">
        <div class="presentation-content">
            <section class="intro-section">
                <div class="mayor-profile">
                    <div class="mayor-image">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/mayor.jpg')); ?>" alt="Mr Saliou CISSÉ">
                    </div>
                    <div class="mayor-info">
                        <h2>Mr Saliou CISSÉ</h2>
                        <p class="mayor-title">Maire de la commune de Kayemor</p>
                    </div>
                </div>

                <div class="commune-overview">
                    <h2>Présentation de la Commune</h2>
                    <p>La commune de Kayemor est située à 262 km de la capitale Dakar, à la limite entre la zone sahélienne sud et la zone soudanienne. Elle se trouve entre les longitudes 14°30' et 16°30' Ouest, et les latitudes 13°30' et 14°30' Nord. Elle couvre une superficie de 195 km².</p>
                </div>
            </section>

            <section class="key-facts">
                <h2>Chiffres Clés</h2>
                <div class="facts-grid">
                    <div class="fact-card" data-aos="fade-up">
                        <div class="fact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <h3>Population</h3>
                        <p class="fact-number">30 000</p>
                        <p class="fact-label">Habitants</p>
                    </div>

                    <div class="fact-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="fact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </div>
                        <h3>Superficie</h3>
                        <p class="fact-number">195</p>
                        <p class="fact-label">km²</p>
                    </div>

                    <div class="fact-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="fact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        </div>
                        <h3>Villages</h3>
                        <p class="fact-number">23</p>
                        <p class="fact-label">Villages et 17 hamos</p>
                    </div>
                </div>
            </section>

            <section class="demographics">
                <h2>Démographie (2022/2023)</h2>
                <div class="demographics-grid">
                    <div class="demo-card">
                        <h3>Répartition</h3>
                        <ul>
                            <li>Nourrissons : 63%</li>
                            <li>Adultes : 37%</li>
                            <li>Personnes âgées : 10%</li>
                        </ul>
                    </div>
                    <div class="demo-card">
                        <h3>Ethnies</h3>
                        <ul>
                            <li>Wolof : 87%</li>
                            <li>Peulh (Pulaar) : 13%</li>
                        </ul>
                    </div>
                    <div class="demo-card">
                        <h3>Répartition professionnelle</h3>
                        <ul>
                            <li>Agriculteurs : 75%</li>
                            <li>Éleveurs : 20%</li>
                            <li>Artisans, pêcheurs, commerçants et transporteurs : 5%</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="environment">
                <h2>Milieu physique</h2>
                <div class="environment-content">
                    <div class="env-card">
                        <h3>Climat</h3>
                        <p>La commune connaît un climat soudano-sahélien, avec une courte saison des pluies (juin à septembre) et une longue saison sèche (8 à 9 mois). Les températures sont souvent élevées entre avril et juillet (35° à 40°C).</p>
                    </div>
                    <div class="env-card">
                        <h3>Sols</h3>
                        <ul>
                            <li>Sols Dior-Deck : sablo-argileux (75% sable / 25% argile)</li>
                            <li>Sols Deck-Dior : argilo-sableux (60% argile / 40% sable)</li>
                            <li>Sols Deck : argileux (80%) et limoneux (20%), localisés dans la vallée</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>

<?php get_footer(); ?>
