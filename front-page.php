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
                 <h1 class="hero-title">Welcome to Chrono Rebellion</h1>
                 <p class="hero-subtitle">An epic journey awaits</p>
                 <a href="#cta" class="hero-button">Get Started</a>
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
 


     </main><!-- #main -->
 </div><!-- #primary -->
 
 <?php get_footer(); ?>