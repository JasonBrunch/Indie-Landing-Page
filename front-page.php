<?php
/**
 * The template for displaying the homepage
 *
 * @package indie-game
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <section class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/heroBackground.png');">
        <div class="hero-content">
            <p class="hero-title"><?php echo esc_html(get_theme_mod('hero_title', 'Welcome to Chrono Rebellion')); ?></p>
            <p class="hero-subtitle"><?php echo esc_html(get_theme_mod('hero_subtitle', 'An epic journey awaits')); ?></p>
            <div class="button-container">
                <a href="#cta" class="hero-button">
                    <div class="button-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/steam.svg" alt="Steam Icon" class="steam-icon">
                        <div class="button-text">
                            <span class="download-text">DOWNLOAD ON</span>
                            <span class="steam-text">STEAM</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Steam Button Section -->
    <section class="steam-button-section">
        <div class="container">
            <div class="steam-button-container">
                <div class="steam-widget">
                    <iframe src="https://store.steampowered.com/widget/705530/" frameborder="0" width="646" height="190"></iframe>
                </div>
            </div>
        </div>
    </section>


        <section class="video-section">
            <div class="video-section-container">
                <div class="video-container">
                    <!--
                    <iframe  src="https://www.youtube.com/embed/9bZkp7q19f0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    -->
                </div>
                <div class="feature-container">
                    <p class="feature-heading">Lorem Ipsum is simply dummy text.</p>
                    <p class="feature-description">Lorem ipsum dolar sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidunt ut labore.</p>
                    <div class="feature-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="Feature 1" class="feature-icon">
                        <p class="feature-text">Lorem ipsum dolar sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="feature-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="Feature 2" class="feature-icon">
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


        

        <!-- Media Section -->
        <section class="media-section">
            <div class="container">
                <div class="media-grid">
                    <div class="media-item"><img src="http://indie-game.local/wp-content/uploads/2024/05/image2.png" alt="Screenshot 1"></div>
                    <div class="media-item"><img src="http://indie-game.local/wp-content/uploads/2024/05/image5.png" alt="Screenshot 2"></div>
                    <div class="media-item"><img src="http://indie-game.local/wp-content/uploads/2024/05/image4.png" alt="Screenshot 3"></div>
                    <div class="media-item"><img src="http://indie-game.local/wp-content/uploads/2024/05/image3.png" alt="Screenshot 4"></div>
                    
                </div>
            </div>
        </section>

    



              


        <Section class="reviews-section">
            <div class="container">
                <div class="reviews-grid">
                    <div class="review-card">
                     
                            <h3 class="review-card-title">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit"</h3>
                            <p class="review-author">- John Doe, IGN</p>
                      
                    </div>
                    <div class="review-card">
            
                            <h3 class="review-card-title">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</h3>
                            <p class="review-author">- Jane Doe, GameSpot</p>
                     
                    </div>
                    <div class="review-card">
              
                            <h3 class="review-card-title">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</h3>
                            <p class="review-author">- John Smith, PC Gamer</p>
                       
                    </div>
                </div>
            </div>
        </section>




    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>