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
    <div class="site-info">
        <!-- Remove or comment out the following lines to hide the footer text -->
        <!--
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'textdomain' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'textdomain' ), 'WordPress' ); ?></a>
        <span class="sep"> | </span>
        <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'textdomain' ), 'my-custom-theme', '<a href="https://example.com">Your Name</a>' ); ?>
        -->
    </div><!-- .site-info -->
</footer><!-- #colophon -->
<?php wp_footer(); ?>
</body>
</html>