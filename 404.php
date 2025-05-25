<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

<div class="error-404 not-found">
    <div class="container">
        <div class="error-content">
            <!-- Error Illustration -->
            <div class="error-image">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="error-icon">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M16 16s-1.5-2-4-2-4 2-4 2"></path>
                    <line x1="9" y1="9" x2="9.01" y2="9"></line>
                    <line x1="15" y1="9" x2="15.01" y2="9"></line>
                </svg>
            </div>

            <!-- Error Message -->
            <div class="error-message">
                <h1>404</h1>
                <h2>Page Non Trouvée</h2>
                <p>Désolé, la page que vous recherchez n'existe pas ou a été déplacée.</p>
            </div>

            <!-- Helpful Links -->
            <div class="helpful-links">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="button primary-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    Retour à l'accueil
                </a>
                
                <a href="#" class="button secondary-button" onclick="history.back(); return false;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 12H6M12 5l-7 7 7 7"/>
                    </svg>
                    Page précédente
                </a>
            </div>

            <!-- Search Form -->
            <div class="search-section">
                <h3>Essayez de rechercher</h3>
                <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                    <div class="search-input-wrapper">
                        <input type="search" class="search-input" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>" name="s" />
                        <button type="submit" class="search-submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Popular Pages -->
            <div class="popular-pages">
                <h3>Pages populaires</h3>
                <ul class="pages-list">
                    <li>
                        <a href="<?php echo esc_url(home_url('/presentation')); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                            Présentation de la Commune
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/actualites')); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                            Actualités
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                            </svg>
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
/* 404 Page Specific Styles */
.error-404 {
    min-height: calc(100vh - 200px);
    display: flex;
    align-items: center;
    padding: 60px 0;
    background: #f8f9fa;
}

.error-content {
    max-width: 600px;
    margin: 0 auto;
    text-align: center;
}

.error-image {
    margin-bottom: 2rem;
}

.error-icon {
    width: 120px;
    height: 120px;
    color: #6c757d;
}

.error-message h1 {
    font-size: 6rem;
    font-weight: 700;
    color: #343a40;
    margin: 0;
    line-height: 1;
}

.error-message h2 {
    font-size: 2rem;
    color: #495057;
    margin: 1rem 0;
}

.error-message p {
    color: #6c757d;
    margin-bottom: 2rem;
}

.helpful-links {
    display: flex;
    gap: 1rem;
    justify-content: center;
    margin-bottom: 2rem;
}

.button {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    border-radius: 0.375rem;
    text-decoration: none;
    transition: all 0.3s ease;
}

.primary-button {
    background: #007bff;
    color: white;
}

.primary-button:hover {
    background: #0056b3;
}

.secondary-button {
    background: #6c757d;
    color: white;
}

.secondary-button:hover {
    background: #5a6268;
}

.search-section {
    margin-bottom: 2rem;
}

.search-section h3 {
    color: #343a40;
    margin-bottom: 1rem;
}

.search-input-wrapper {
    position: relative;
    max-width: 400px;
    margin: 0 auto;
}

.search-input {
    width: 100%;
    padding: 0.75rem 1rem;
    padding-right: 3rem;
    border: 2px solid #dee2e6;
    border-radius: 0.375rem;
    font-size: 1rem;
}

.search-submit {
    position: absolute;
    right: 0.5rem;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    color: #6c757d;
    cursor: pointer;
    padding: 0.5rem;
}

.popular-pages h3 {
    color: #343a40;
    margin-bottom: 1rem;
}

.pages-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.pages-list a {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: #495057;
    text-decoration: none;
    padding: 0.5rem;
    border-radius: 0.25rem;
    transition: all 0.3s ease;
}

.pages-list a:hover {
    background: #e9ecef;
    color: #007bff;
}

@media (max-width: 768px) {
    .error-404 {
        padding: 40px 20px;
    }

    .error-message h1 {
        font-size: 4rem;
    }

    .error-message h2 {
        font-size: 1.5rem;
    }

    .helpful-links {
        flex-direction: column;
    }

    .button {
        width: 100%;
        justify-content: center;
    }
}
</style>

<?php get_footer(); ?>
