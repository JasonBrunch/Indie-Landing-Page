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
    <div class="footer-container">
        
        <div class="copyright-container">
            <h3>Copyright Space Owl Studios</h3>
            <!-- Social Media Icons -->
            <div class="social-media-icons">
                <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="Facebook Icon"></a>
                <a href="https://www.twitter.com" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" alt="Twitter Icon"></a>
                <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.svg" alt="Instagram Icon"></a>
                <a href="https://www.youtube.com" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.svg" alt="YouTube Icon"></a>
                <a href="https://www.whatsapp.com" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/images/whatsapp.svg" alt="WhatsApp Icon"></a>
            </div>
        </div>
        <div class="bottom-page-container">
            <h3>Privacy Policy | Terms & Conditions</h3>
            <h3>Press Kit</h3>
        </div>
    </div>
    </div>
   
</footer><!-- #colophon -->
<?php wp_footer(); ?>
</body>
</html>