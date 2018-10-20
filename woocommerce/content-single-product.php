<?php

defined( 'ABSPATH' ) || exit;
/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );
if ( post_password_required() ) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}

?>

<section class="single" id="product-<?php the_ID(); ?>">
    <div class="wrapper" style="display: flex;">
        <div class="single__img">
            <?php
            /**
             * Hook: woocommerce_before_single_product_summary.
             *
             * @hooked woocommerce_show_product_sale_flash - 10
             * @hooked woocommerce_show_product_images - 20
             */
            do_action( 'woocommerce_before_single_product_summary' );
            ?>
        </div>
        <div class="single__info">
    <?php
            /** TITEL */
            if ( ! defined( 'ABSPATH' ) ) {
            exit; // Exit if accessed directly.
            }
            the_title( '<h1 class="product_title entry-title">', '</h1>' );


            /** DESCRIPTION */
            if ( ! defined( 'ABSPATH' ) ) {
                exit; // Exit if accessed directly
            }
            global $post;
            $heading = esc_html( apply_filters( 'woocommerce_product_description_heading', __( 'Description', 'woocommerce' ) ) );
            ?>

            <?php if ( $heading ) : ?>

            <?php endif; ?>

            <?php the_content(); ?>





            <?php
            /** PRICE */
                if ( ! defined( 'ABSPATH' ) ) {
                    exit; // Exit if accessed directly
                }
                global $product;
                ?>
            <p class="price single__info__form__price"><?php echo $product->get_price_html(); ?> <span style="font-size: 15px;">zzgl. Versandkosten</span></p>



            <?php
            /**
             * Hook: woocommerce_single_product_summary.
             *

             * @hooked woocommerce_template_single_price - 10

             * @hooked woocommerce_template_single_add_to_cart - 30

             * @hooked WC_Structured_Data::generate_product_data() - 60
             */
            do_action( 'woocommerce_single_product_summary' );
            ?>

        </div>
    </div>
</section>
