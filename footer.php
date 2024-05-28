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

<footer id="colophon" class="site-footer">
    <div class="container"> 
        <div class="footer-content">
            <h2 class="social-media-title">MORE WIZARD HUNTER CONTENT IN THESE PLACES</h2>
            <div class="social-media-icons">
                <a href="https://www.facebook.com" class="social-media-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="Facebook Icon" class="social-media-image">
                </a>
                <a href="https://www.twitter.com" class="social-media-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" alt="Twitter Icon" class="social-media-image">
                </a>
                <a href="https://www.instagram.com" class="social-media-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.svg" alt="Instagram Icon" class="social-media-image">
                </a>
                <a href="https://www.youtube.com" class="social-media-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/youtube.svg" alt="Youtube Icon" class="social-media-image">
                </a>
            </div>
        </div>

        <div class="subscribe-button-container">
            <button class="subscribe-button">SUBSCRIBE TO OUR MAILING LIST</button>
        </div>

        <div class="more-footer-content">
            <img src="<?php echo get_template_directory_uri(); ?>/images/steamImage.jpg" alt="Wizard Hunter Logo" class="footer-logo">
            <div class="footer-legal">
                <p>
                    FOX PRODUCTION C &copy; <?php echo date("Y"); ?> |
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