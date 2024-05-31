<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Indie-Game
 */

?>

<footer id="colophon" class="site-footer debug">
    <div class="container"> 
        <div class="footer-content">
            <h2 class="social-media-title">MORE WIZARD HUNTER CONTENT IN THESE PLACES</h2>
            <div class="social-media-icons">
                <div class="social-media-icon-holder">
                    <a href="https://www.facebook.com" class="social-media-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-facebook-white.png" alt="Facebook Icon" class="social-media-image">
                    </a>
                    <p class="social-media-name">FACEBOOK</p>
                </div>
                <div class="social-media-icon-holder">
                    <a href="https://www.twitter.com" class="social-media-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-twitter-white.png" alt="Twitter Icon" class="social-media-image">
                    </a>
                    <p class="social-media-name">TWITTER</p>
                </div>
                <div class="social-media-icon-holder">
                    <a href="https://www.instagram.com" class="social-media-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-instagram-white.png" alt="Instagram Icon" class="social-media-image">
                    </a>
                    <p class="social-media-name">INSTAGRAM</p>
                </div>
                <div class="social-media-icon-holder">
                    <a href="https://www.youtube.com" class="social-media-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-youtube-white.png" alt="Youtube Icon" class="social-media-image">
                    </a>
                    <p class="social-media-name">YOUTUBE</p>
                </div>
                <div class="social-media-icon-holder">
                    <a href="https://www.twitch.com" class="social-media-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-twitch-white.png" alt="Twitch Icon" class="social-media-image">
                    </a>
                    <p class="social-media-name">TWITCH</p>
                </div>
            </div>
        </div>

        <div class="subscribe-button-container">
            <button class="subscribe-button">SUBSCRIBE TO OUR MAILING LIST</button>
        </div>

        <div class="more-footer-content">
            <img src="<?php echo get_template_directory_uri(); ?>/images/foxLogo.png" alt="Fox Productions Logo" class="footer-logo">
            <p class="footer-description">FOXWARRIOR</p>
            <div class="footer-legal">
                <p>
                    FOXWARRIOR PRODUCTIONS &copy; <?php echo date("Y"); ?> |
                    <a href="<?php echo get_permalink(get_page_by_path('privacy-policy')); ?>">Privacy Policy</a> |
                    <a href="<?php echo get_permalink(get_page_by_path('terms-of-service')); ?>">Terms of Service</a> |
                    <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">Contact</a>
                </p>
            </div>
        </div>


    </div>
   
</footer><!-- #colophon -->
<?php wp_footer(); ?>
</body>
</html>