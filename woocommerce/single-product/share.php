<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
do_action( 'woocommerce_share' ); // Sharing plugins can hook into here.
/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */