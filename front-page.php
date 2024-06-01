<?php
/**
 * The template for displaying the homepage
 *
 * @package indie-game
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <section class="hero-section " style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/heroBackground.png');">
        <div class="hero-content">
            <p class="hero-title">WIZARD HUNTER</p>
            <p class="hero-subtitle">2348</p>
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
                    <iframe 
                        src="https://www.youtube.com/embed/16mb52CwafU?si=UC6K2ymIAsqN0jPM" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" 
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="feature-container">
                    <p class="feature-heading">In the hidden corners of the world there lurks a criminal element: Wizards.</p>
                    <p class="feature-description">As a member of an elite commando branch of the Immigration Services department, it is your privilege and duty to bring down any demon-summoning wizards.</p>
                    <div class="feature-item-container">
                        <div class="feature-item">
                            <svg class="feature-icon" width="32" height="32" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="8" cy="8" r="8" fill="currentColor"/>
                            </svg>
                            <p class="feature-text">A hand-crafted campaign.</p>
                        </div>
                        <div class="feature-item">
                            <svg class="feature-icon" width="32" height="32" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="8" cy="8" r="8" fill="currentColor"/>
                            </svg>
                            <p class="feature-text">Multiple playable characters and unique attacks to unlock.</p>
                        </div>
                        <div class="feature-item">
                            <svg class="feature-icon" width="32" height="32" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="8" cy="8" r="8" fill="currentColor"/>
                            </svg>
                            <p class="feature-text">Splitscreen co-op with co-operative dialogue trees.</p>
                        </div>
                        <div class="feature-item">
                            <svg class="feature-icon" width="32" height="32" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="8" cy="8" r="8" fill="currentColor"/>
                            </svg>
                            <p class="feature-text">A built in level editor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        

        <!-- Media Section -->
        <section class="media-section">
            <div class="container">
                <div class="media-grid">
                    <div class="media-item"><img src="http://indie-game.local/wp-content/uploads/2024/05/screenshot1.jpg" alt="Screenshot 1"></div>
                    <div class="media-item"><img src="http://indie-game.local/wp-content/uploads/2024/05/screenshot2.jpg" alt="Screenshot 2"></div>
                    <div class="media-item"><img src="http://indie-game.local/wp-content/uploads/2024/05/screenshot3.jpg" alt="Screenshot 3"></div>
                    <div class="media-item"><img src="http://indie-game.local/wp-content/uploads/2024/05/screenshot4.jpg" alt="Screenshot 4"></div>          
                </div>
            </div>
        </section>

    



              


        <Section class="reviews-section">
            <div class="container">
                <div class="reviews-grid">
                    <div class="review-card">
                     
                            <h3 class="review-card-title">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit"</h3>
                            <p class="review-author"> John Doe, IGN</p>
                      
                    </div>
                    <div class="review-card">
            
                            <h3 class="review-card-title">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</h3>
                            <p class="review-author"> Jane Doe, GameSpot</p>
                     
                    </div>
                    <div class="review-card">
              
                            <h3 class="review-card-title">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</h3>
                            <p class="review-author"> John Smith, PC Gamer</p>
                       
                    </div>
                </div>
            </div>
        </section>




    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>