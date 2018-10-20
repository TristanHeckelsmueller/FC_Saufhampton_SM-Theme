<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
if ( ! $messages ) {
    return;
}
?>

<?php foreach ( $messages as $message ) : ?>
    <div class="woocommerce-message" role="alert"><?php echo wp_kses_post( $message ); ?></div>
<?php endforeach; ?>