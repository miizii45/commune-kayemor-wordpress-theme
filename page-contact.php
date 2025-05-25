<?php
/**
 * Template Name: Page Contact
 */

get_header(); ?>

<div class="contact-page">
    <!-- Contact Hero -->
    <div class="contact-hero">
        <div class="container">
            <h1 class="page-title">Contactez-nous</h1>
            <p class="hero-description">Pour toute demande d'information ou assistance, n'hésitez pas à nous contacter.</p>
        </div>
    </div>

    <div class="container">
        <div class="contact-content">
            <!-- Contact Information -->
            <div class="contact-info-section">
                <div class="info-cards">
                    <!-- Address Card -->
                    <div class="info-card" data-aos="fade-up">
                        <div class="info-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <h3>Adresse</h3>
                        <p>Avenue Habib Bourguiba X Rue Abébé Bikila<br>Dakar, Sénégal</p>
                    </div>

                    <!-- Phone Card -->
                    <div class="info-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="info-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </div>
                        <h3>Téléphone</h3>
                        <p>
                            <a href="tel:+221338642209">(+221) 33 864 22 09</a><br>
                            <a href="tel:+221301052742">(+221) 30 105 27 42</a>
                        </p>
                    </div>

                    <!-- Email Card -->
                    <div class="info-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="info-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <h3>Email</h3>
                        <p><a href="mailto:bdlgranddakar@gmail.com">bdlgranddakar@gmail.com</a></p>
                    </div>

                    <!-- Hours Card -->
                    <div class="info-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="info-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <h3>Heures d'ouverture</h3>
                        <ul class="hours-list">
                            <li>Lundi - Vendredi: 8h00 - 17h00</li>
                            <li>Samedi: 9h00 - 13h00</li>
                            <li>Dimanche: Fermé</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Contact Form Section -->
            <div class="contact-form-section">
                <div class="form-wrapper" data-aos="fade-up">
                    <h2>Envoyez-nous un message</h2>
                    <form id="contact-form" class="contact-form" action="" method="post">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Nom complet *</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">Téléphone</label>
                                <input type="tel" id="phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="subject">Sujet *</label>
                                <input type="text" id="subject" name="subject" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="6" required></textarea>
                        </div>

                        <div class="form-submit">
                            <button type="submit" class="submit-button">
                                <span>Envoyer le message</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Contact Page Specific Styles */
.contact-page {
    background: #f8f9fa;
    padding-bottom: 60px;
}

.contact-hero {
    background: #fff;
    padding: 60px 0;
    text-align: center;
    margin-bottom: 40px;
    border-bottom: 1px solid #dee2e6;
}

.page-title {
    font-size: 2.5rem;
    color: #343a40;
    margin-bottom: 1rem;
}

.hero-description {
    color: #6c757d;
    font-size: 1.1rem;
    max-width: 600px;
    margin: 0 auto;
}

.contact-content {
    max-width: 1200px;
    margin: 0 auto;
}

/* Info Cards */
.info-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-bottom: 3rem;
}

.info-card {
    background: #fff;
    padding: 2rem;
    border-radius: 0.5rem;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
}

.info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.info-icon {
    width: 48px;
    height: 48px;
    margin: 0 auto 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #e9ecef;
    border-radius: 50%;
    color: #007bff;
}

.info-card h3 {
    color: #343a40;
    margin-bottom: 1rem;
    font-size: 1.25rem;
}

.info-card p {
    color: #6c757d;
    margin: 0;
}

.info-card a {
    color: #007bff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.info-card a:hover {
    color: #0056b3;
}

.hours-list {
    list-style: none;
    padding: 0;
    margin: 0;
    color: #6c757d;
}

.hours-list li {
    margin-bottom: 0.5rem;
}

/* Contact Form */
.contact-form-section {
    background: #fff;
    border-radius: 0.5rem;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    padding: 2rem;
}

.form-wrapper {
    max-width: 800px;
    margin: 0 auto;
}

.form-wrapper h2 {
    color: #343a40;
    margin-bottom: 2rem;
    text-align: center;
}

.form-row {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
    margin-bottom: 1.5rem;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    color: #495057;
    font-weight: 500;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 0.75rem 1rem;
    border: 2px solid #dee2e6;
    border-radius: 0.375rem;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.form-group input:focus,
.form-group textarea:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 0 3px rgba(0,123,255,0.1);
}

.submit-button {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 1rem 2rem;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 0.375rem;
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
}

.submit-button:hover {
    background: #0056b3;
    transform: translateY(-2px);
}

.submit-button svg {
    transition: transform 0.3s ease;
}

.submit-button:hover svg {
    transform: translateX(4px);
}

@media (max-width: 768px) {
    .form-row {
        grid-template-columns: 1fr;
    }

    .contact-hero {
        padding: 40px 20px;
    }

    .page-title {
        font-size: 2rem;
    }

    .info-cards {
        grid-template-columns: 1fr;
    }

    .contact-form-section {
        padding: 1.5rem;
    }
}
</style>

<?php get_footer(); ?>
