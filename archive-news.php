<?php
/**
 * The template for displaying news archive
 */

get_header(); ?>

<div class="archive-news">
    <div class="page-hero">
        <div class="container">
            <h1 class="archive-title">
                <?php 
                if (is_post_type_archive('news')) {
                    echo 'Actualités';
                } else {
                    the_archive_title();
                }
                ?>
            </h1>
        </div>
    </div>

    <div class="container">
        <!-- News Filter -->
        <div class="news-filters">
            <div class="filter-wrapper">
                <select class="news-category-filter">
                    <option value="">Toutes les catégories</option>
                    <?php
                    $categories = get_terms(array(
                        'taxonomy' => 'news_category',
                        'hide_empty' => true,
                    ));
                    foreach ($categories as $category) {
                        echo '<option value="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</option>';
                    }
                    ?>
                </select>

                <select class="news-date-filter">
                    <option value="">Toutes les dates</option>
                    <option value="this-month">Ce mois</option>
                    <option value="last-month">Le mois dernier</option>
                    <option value="this-year">Cette année</option>
                </select>
            </div>
        </div>

        <!-- News Grid -->
        <div class="news-grid">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                <article class="news-card" data-aos="fade-up">
                    <div class="news-card-inner">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="news-image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('card-image'); ?>
                                </a>
                                <?php
                                $categories = get_the_terms(get_the_ID(), 'news_category');
                                if ($categories) :
                                ?>
                                    <div class="news-categories">
                                        <?php foreach ($categories as $category) : ?>
                                            <span class="category-tag"><?php echo esc_html($category->name); ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <div class="news-content">
                            <div class="news-meta">
                                <span class="news-date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                    <?php echo get_the_date('j F Y'); ?>
                                </span>
                            </div>

                            <h2 class="news-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>

                            <div class="news-excerpt">
                                <?php the_excerpt(); ?>
                            </div>

                            <div class="news-footer">
                                <a href="<?php the_permalink(); ?>" class="read-more">
                                    Lire la suite
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            <?php
                endwhile;
            else :
            ?>
                <div class="no-posts-found">
                    <div class="message">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                        <p>Aucune actualité trouvée.</p>
                    </div>
                </div>
            <?php endif; ?>
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
    </div>
</div>

<?php get_footer(); ?>
