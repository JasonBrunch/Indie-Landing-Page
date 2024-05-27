<?php
/**
 * The template for displaying the homepage
 *
 * @package indie-game
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <section class="hero-section">
            <div class="hero-content">
                <h1 class="hero-title"><?php echo esc_html(get_theme_mod('hero_title', 'Welcome to Chrono Rebellion')); ?></h1>
                <p class="hero-subtitle"><?php echo esc_html(get_theme_mod('hero_subtitle', 'An epic journey awaits')); ?></p>
                <div class= "button-container">
                    <a href="#cta" class="hero-button">Buy Now</a>
                </div>
            </div>
        </section>
        <!-- Steam Button Section -->
        <section class="steam-button-section">
            <div class="container">
                <div class="steam-button-container">
                    <div class="steam-button-content">
                        <h2 class="steam-button-title">Wizard Hunter 2348 on Steam</h2>
                        <div class="steam-inner-content">
                            <div class="steam-image-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/steamImage.jpg" alt="Steam Image" class="steam-image">
                            </div>
                            <p class="steam-button-description">Wizard Hunter is a medieval strategy game featuring in-depth city building, large-scale tactical battles, and complex economic and social simulations. Rule your lands as a medieval lord -- the seasons pass, the weather changes, and cities rise and fall.</p>
                        </div>
                        <div class="buynow-button-container">                    
                            <a href="https://store.steampowered.com/app/1234567" class="steam-button">Buy on Steam</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="video-section">
            <!-- This doesnt look great maybe 
            <h2 class="section-title">TRAILER</h2>
            -->
            <div class="video-section-container">
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/9bZkp7q19f0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="feature-container">
                    <h2 class="feature-heading">Lorem Ipsum is simply dummy text.</h2>
                    <p class="feature-description">Lorem ipsum dolar sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidunt ut labore.</p>
                    <div class="feature-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg"  alt="Feature 1" class="feature-icon">
                        <p class="feature-text">Lorem ipsum dolar sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="feature-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg"  alt="Feature 2" class="feature-icon">
                        <p class="feature-text">Lorem ipsum dolar sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="feature-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="Feature 3" class="feature-icon">
                        <p class="feature-text">Lorem ipsum dolar sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="feature-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="Feature 3" class="feature-icon">
                        <p class="feature-text">Lorem ipsum dolar sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
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

        <!-- Newsletter Section -->
        <section class="newsletter-section" id="cta">
            <div class="container">
                <div class="newsletter-content">
                    <div class="newsletter-text">Subscribe for the latest news</div>
                    <?php echo do_shortcode('[contact-form-7 id="95f73e3" title="Newsletter Sign Up"]'); ?>
                </div>
            </div>
        </section>





    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>