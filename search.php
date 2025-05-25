<?php
/**
 * The template for displaying search results
 */

get_header(); ?>

<div class="search-results-page">
    <div class="page-hero">
        <div class="container">
            <h1 class="search-title">
                <?php
                printf(
                    esc_html__('Résultats de recherche pour : %s', 'kayemor'),
                    '<span>' . get_search_query() . '</span>'
                );
                ?>
            </h1>
            
            <!-- Search Form -->
            <div class="search-form-wrapper">
                <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                    <div class="search-input-group">
                        <input type="search" 
                               class="search-field" 
                               placeholder="Rechercher..." 
                               value="<?php echo get_search_query(); ?>" 
                               name="s" />
                        <button type="submit" class="search-submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="search-content">
            <?php if (have_posts()) : ?>
                <!-- Results Count -->
                <div class="results-count">
                    <?php
                    global $wp_query;
                    printf(
                        esc_html(_n(
                            '%d résultat trouvé',
                            '%d résultats trouvés',
                            $wp_query->found_posts,
                            'kayemor'
                        )),
                        $wp_query->found_posts
                    );
                    ?>
                </div>

                <!-- Results Grid -->
                <div class="results-grid">
                    <?php while (have_posts()) : the_post(); ?>
                        <article <?php post_class('search-result-card'); ?> data-aos="fade-up">
                            <div class="result-card-inner">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="result-image">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('medium'); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <div class="result-content">
                                    <!-- Post Type Badge -->
                                    <div class="post-type-badge">
                                        <?php
                                        $post_type = get_post_type();
                                        $post_type_obj = get_post_type_object($post_type);
                                        echo esc_html($post_type_obj->labels->singular_name);
                                        ?>
                                    </div>

                                    <h2 class="result-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>

                                    <div class="result-meta">
                                        <span class="result-date">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                                <line x1="3" y1="10" x2="21" y2="10"></line>
                                            </svg>
                                            <?php echo get_the_date(); ?>
                                        </span>
                                    </div>

                                    <div class="result-excerpt">
                                        <?php 
                                        // Custom excerpt with highlighted search terms
                                        $excerpt = get_the_excerpt();
                                        $keys = explode(" ", get_search_query());
                                        $excerpt = preg_replace('/(' . implode('|', $keys) . ')/iu', '<mark>$0</mark>', $excerpt);
                                        echo wp_kses_post($excerpt);
                                        ?>
                                    </div>

                                    <a href="<?php the_permalink(); ?>" class="read-more">
                                        Lire la suite
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <!-- Pagination -->
                <?php if (get_the_posts_pagination()) : ?>
                    <div class="pagination-wrapper">
                        <?php
                        echo paginate_links(array(
                            'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                            'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
                        ));
                        ?>
                    </div>
                <?php endif; ?>

            <?php else : ?>
                <div class="no-results">
                    <div class="no-results-content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            <line x1="11" y1="8" x2="11" y2="14"></line>
                            <line x1="8" y1="11" x2="14" y2="11"></line>
                        </svg>
                        <h2>Aucun résultat trouvé</h2>
                        <p>Désolé, aucun résultat ne correspond à vos critères de recherche. Veuillez réessayer avec d'autres mots-clés.</p>
                        
                        <!-- Popular Searches -->
                        <div class="popular-searches">
                            <h3>Recherches populaires</h3>
                            <div class="search-tags">
                                <a href="<?php echo esc_url(add_query_arg('s', 'actualités', home_url())); ?>">Actualités</a>
                                <a href="<?php echo esc_url(add_query_arg('s', 'projets', home_url())); ?>">Projets</a>
                                <a href="<?php echo esc_url(add_query_arg('s', 'événements', home_url())); ?>">Événements</a>
                                <a href="<?php echo esc_url(add_query_arg('s', 'services', home_url())); ?>">Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<style>
/* Search Results Page Specific Styles */
.search-results-page {
    padding-top: 60px;
    background: #f8f9fa;
    min-height: calc(100vh - 200px);
}

.page-hero {
    background: #fff;
    padding: 40px 0;
    margin-bottom: 40px;
    border-bottom: 1px solid #dee2e6;
}

.search-title {
    font-size: 2rem;
    color: #343a40;
    margin-bottom: 1.5rem;
}

.search-title span {
    color: #007bff;
}

.search-form-wrapper {
    max-width: 600px;
}

.search-input-group {
    position: relative;
}

.search-field {
    width: 100%;
    padding: 1rem 3rem 1rem 1.5rem;
    border: 2px solid #dee2e6;
    border-radius: 0.5rem;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.search-field:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 0 3px rgba(0,123,255,0.1);
}

.search-submit {
    position: absolute;
    right: 1rem;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    color: #6c757d;
    cursor: pointer;
    padding: 0.5rem;
    transition: color 0.3s ease;
}

.search-submit:hover {
    color: #007bff;
}

.results-count {
    margin-bottom: 2rem;
    color: #6c757d;
}

.results-grid {
    display: grid;
    gap: 2rem;
    margin-bottom: 3rem;
}

.search-result-card {
    background: #fff;
    border-radius: 0.5rem;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
}

.search-result-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.result-card-inner {
    display: grid;
    grid-template-columns: 250px 1fr;
    gap: 1.5rem;
}

.result-image {
    height: 100%;
}

.result-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.result-content {
    padding: 1.5rem;
}

.post-type-badge {
    display: inline-block;
    padding: 0.25rem 0.75rem;
    background: #e9ecef;
    color: #495057;
    border-radius: 1rem;
    font-size: 0.875rem;
    margin-bottom: 1rem;
}

.result-title {
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

.result-title a {
    color: #343a40;
    text-decoration: none;
    transition: color 0.3s ease;
}

.result-title a:hover {
    color: #007bff;
}

.result-meta {
    display: flex;
    gap: 1rem;
    color: #6c757d;
    margin-bottom: 1rem;
}

.result-date {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.result-excerpt {
    color: #6c757d;
    margin-bottom: 1.5rem;
    line-height: 1.6;
}

.result-excerpt mark {
    background: #fff3cd;
    color: #856404;
    padding: 0.2em 0;
}

.read-more {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: #007bff;
    text-decoration: none;
    font-weight: 500;
    transition: gap 0.3s ease;
}

.read-more:hover {
    gap: 0.75rem;
}

.no-results {
    text-align: center;
    padding: 4rem 0;
}

.no-results-content {
    max-width: 600px;
    margin: 0 auto;
}

.no-results svg {
    color: #6c757d;
    margin-bottom: 1.5rem;
}

.no-results h2 {
    font-size: 1.5rem;
    color: #343a40;
    margin-bottom: 1rem;
}

.no-results p {
    color: #6c757d;
    margin-bottom: 2rem;
}

.popular-searches {
    margin-top: 2rem;
}

.popular-searches h3 {
    font-size: 1.25rem;
    color: #343a40;
    margin-bottom: 1rem;
}

.search-tags {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
    justify-content: center;
}

.search-tags a {
    padding: 0.5rem 1rem;
    background: #e9ecef;
    color: #495057;
    text-decoration: none;
    border-radius: 2rem;
    transition: all 0.3s ease;
}

.search-tags a:hover {
    background: #007bff;
    color: #fff;
}

@media (max-width: 768px) {
    .result-card-inner {
        grid-template-columns: 1fr;
    }

    .result-image {
        height: 200px;
    }

    .search-title {
        font-size: 1.5rem;
    }

    .result-content {
        padding: 1rem;
    }
}
</style>

<?php get_footer(); ?>
