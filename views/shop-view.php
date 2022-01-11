<div class = "product-item">
    <div class = "item-inner">
        <div class = "product-thumbnail">
            <?php
            if ( $product->is_on_sale() ) :
                echo apply_filters( 'woocommerce_sale_flash', '<div class="icon-sale-label sale-left">' . esc_html__( 'Sale', 'metrostore' ) . '</div>', $post, $product );
                ?>
            <?php endif; ?>
            <?php
            global $metrostore_label;
            if ( $metrostore_label != '' ) {
                echo '<div class="icon-new-label new-right">' . esc_html__( 'New', 'metrostore' ) . '</div>';
            }
            ?>
            <?php do_action( 'metrostore_child_after_sale_flash' ); ?>
            <div class="pr-img-area">
                <figure>
                    <?php echo get_the_post_thumbnail( $product->get_id(), 'shop_catalog', array( 'class' => 'first-img' ) ); ?> 
                    <?php echo get_the_post_thumbnail( $product->get_id(), 'shop_catalog', array( 'class' => 'hover-img' ) ); ?>
                </figure>
                <div class="add-to-cart-mt">                	      
                    <?php woocommerce_template_loop_add_to_cart(); ?> 
                </div>

            </div>

            <div class="pr-info-area">
                <div class="pr-button">
                    <div class="mt-button add_to_wishlist">
                        <?php
                        if ( function_exists( 'metrostore_wishlist_products' ) ) {
                            metrostore_wishlist_products();
                        }
                        ?> 
                    </div>
                    <div class="mt-button add_to_compare"> 
                        <?php
                        if ( function_exists( 'add_compare_link' ) ) {
                            add_compare_link();
                        }
                        ?>                                   
                    </div>
                    <div class="mt-button quick-view"> 
                        <?php
                        if ( function_exists( 'metrostore_quickview' ) ) {
                            metrostore_quickview();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="item-info">
            <div class="info-inner">
                <?php do_action( 'metrostore_child_before_title' ); ?>
                <div class="item-title"> 
                    <h3>
                        <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                </div>
                <?php do_action( 'metrostore_child_after_title' ); ?>
                <div class="item-content">
                    <div class="rating">
                        <?php woocommerce_template_loop_rating(); ?>
                    </div>
                    <div class="item-price">
                        <?php woocommerce_template_loop_price(); ?>
                    </div>
                </div>
                <?php do_action( 'metrostore_child_after_price' ); ?>
            </div>
        </div>