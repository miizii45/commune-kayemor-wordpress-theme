<?php
/**
 * The template for displaying single news posts
 */

get_header(); ?>

<article class="single-news">
    <!-- Hero Section -->
    <div class="news-hero">
        <?php if (has_post_thumbnail()) : ?>
            <div class="news-hero-image">
                <?php the_post_thumbnail('hero-image'); ?>
            </div>
        <?php endif; ?>
        
        <div class="news-hero-content">
            <div class="container">
                <div class="news-meta">
                    <!-- Categories -->
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

                    <!-- Date -->
                    <div class="news-date">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                        <?php echo get_the_date('j F Y'); ?>
                    </div>
                </div>

                <h1 class="news-title"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="news-content">
        <div class="container">
            <div class="content-wrapper">
                <!-- Share Buttons -->
                <div class="share-buttons" data-aos="fade-left">
                    <span class="share-label">Partager</span>
                    <div class="share-links">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" class="share-link facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" class="share-link twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                            </svg>
                        </a>
                        <a href="https://wa.me/?text=<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>" target="_blank" class="share-link whatsapp">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Article Content -->
                <div class="article-content" data-aos="fade-up">
                    <?php the_content(); ?>
                </div>

                <!-- Tags -->
                <?php
                $tags = get_the_terms(get_the_ID(), 'news_tag');
                if ($tags) :
                ?>
                    <div class="news-tags" data-aos="fade-up">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                            <line x1="7" y1="7" x2="7.01" y2="7"></line>
                        </svg>
                        <?php foreach ($tags as $tag) : ?>
                            <a href="<?php echo get_term_link($tag); ?>" class="tag-link"><?php echo esc_html($tag->name); ?></a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Related News -->
            <?php
            $related_args = array(
                'post_type' => 'news',
                'posts_per_page' => 3,
                'post__not_in' => array(get_the_ID()),
                'orderby' => 'rand'
            );
            $related_query = new WP_Query($related_args);

            if ($related_query->have_posts()) :
            ?>
                <div class="related-news" data-aos="fade-up">
                    <h2 class="section-title">Articles similaires</h2>
                    <div class="related-news-grid">
                        <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                            <article class="related-news-card">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="related-news-image">
                                        <?php the_post_thumbnail('card-image'); ?>
                                    </a>
                                <?php endif; ?>
                                <div class="related-news-content">
                                    <h3 class="related-news-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <div class="related-news-date">
                                        <?php echo get_the_date('j F Y'); ?>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</article>

<?php get_footer(); ?>
