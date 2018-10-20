<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Saufhampton
 */

get_header();
get_sidebar()
?>


    <section class="cart">
        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e( 'Ou Error 404, hier gibts nix zu sehen', 'fcsaufhamptonsm' ); ?></h1>
        </header><!-- .page-header -->

        <div class="page-content">
            <p><?php esc_html_e( 'Aber hauptsache du trinkst bitte kein Radler', 'fcsaufhamptonsm' ); ?></p>
            <p>Stay calm and drink Beer</p>
            <a href="/">Zurück zur Homepage...</a><br>
            <a href="/shop">Oder willst du ein T-Shirt kaufen?</a><br>
            <br><iframe src="https://giphy.com/embed/OMYj7otYRfCAo" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/beer-fantasy-happy-place-OMYj7otYRfCAo">via GIPHY</a></p>
        </div><!-- .page-content -->
    </section><!-- .error-404 -->

<?php
get_footer();
