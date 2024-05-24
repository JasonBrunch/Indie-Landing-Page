<?php
/**
 * The template for displaying the homepage
 *
 * @package indie-game
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <section class="hero-section" style="background-image: url('<?php echo esc_url(get_theme_mod('hero_background_image', 'default-image-url.jpg')); ?>'); background-size: cover; background-position: center;">
            <div class="hero-content">
                <h1 class="hero-title"><?php echo esc_html(get_theme_mod('hero_title', 'Welcome to Chrono Rebellion')); ?></h1>
                <p class="hero-subtitle"><?php echo esc_html(get_theme_mod('hero_subtitle', 'An epic journey awaits')); ?></p>
                <div class= "button-container">
                    <a href="#cta" class="hero-button">Buy Now</a>
                </div>
            </div>
        </section>

        <section class="video-section">
      
                <h2 class="section-title">TRAILER</h2>
            
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/9bZkp7q19f0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
       
        </section>

        <!-- About the Game Section -->
        <section class="about-game">
            <div class="container">
                <h2 class="section-title">ABOUT THE GAME</h2>
                <hr class="section-divider">
                <p class="game-description">
                    Chrono Rebellion: The Dragon Prince is a Tactical RPG set in a totalitarian steampunk world. Follow the journey of the prince as he battles to reclaim his throne and restore peace to the kingdom. Engage in strategic turn-based combat, master the job system, and uncover the secrets of the past.
                </p>
                <p class="game-description">
                    The prince finds himself thousands of years in the future, where things are ruled still by his uncle's lineage in an oppressive and grim regime. So the basic story will be him gathering allies to overthrow the current king, and maybe find a way to return to the past and stop this from ever happening.
                </p>
            </div>
        </section>

        <!-- Media Section -->
        <section class="media-section">
            <div class="container">
                <h2 class="section-title">MEDIA</h2>
                <hr class="section-divider">
                <div class="media-grid">
                    <div class="media-item"><img src="http://indie-game.local/wp-content/uploads/2024/05/image2.png" alt="Screenshot 1"></div>
                    <div class="media-item"><img src="http://indie-game.local/wp-content/uploads/2024/05/image5.png" alt="Screenshot 2"></div>
                    <div class="media-item"><img src="http://indie-game.local/wp-content/uploads/2024/05/image4.png" alt="Screenshot 3"></div>
                    <div class="media-item"><img src="http://indie-game.local/wp-content/uploads/2024/05/image3.png" alt="Screenshot 4"></div>
                    <div class="media-item"><img src="http://indie-game.local/wp-content/uploads/2024/05/image.png" alt="Screenshot 5"></div>
                    <div class="media-item"><img src="http://indie-game.local/wp-content/uploads/2024/05/image6.png" alt="Screenshot 6"></div>
                </div>
            </div>
        </section>

     
        <!-- News Section -->
        <section class="news-section">
            <div class="container">
                <h2 class="section-title">LATEST NEWS</h2>
                <hr class="section-divider">
                <div class="news-grid">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                );

                $news_query = new WP_Query( $args );

                if ( $news_query->have_posts() ) :
                    while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
                        <div class="news-card">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="news-card-image-container">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="news-card-image">
                                </div>
                            <?php endif; ?>
                            <div class="news-card-content">
                                <h3 class="news-card-title"><?php the_title(); ?></h3>
                                <p class="news-card-excerpt"><?php echo get_the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="news-card-link">Read More</a>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                else : ?>
                    <p><?php esc_html_e( 'No news found.', 'indie-game' ); ?></p>
                <?php endif; ?>
                </div>
            </div>
        </section>





    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>