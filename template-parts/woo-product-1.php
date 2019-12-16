<?php
global $bellini;

if ( ! defined( 'ABSPATH' ) ) { exit; }

global $product;

if ( empty( $product ) || ! $product->is_visible() ) { return; }
?>
<div class="product product-holder--l1 <?php echo $bellini['woo_product_new_row'];?>">
<div class="product-card__inner">
	<?php woocommerce_template_loop_product_link_open();?>
	<?php woocommerce_show_product_loop_sale_flash();?>
	<?php woocommerce_template_loop_product_thumbnail();?>
	<?php woocommerce_template_loop_product_link_close();?>

	<div class="product-card__info">
		<div class="product-card__info__product">
			<?php woocommerce_template_loop_product_link_open();?>
			<h3 class="woocommerce-loop-product__title"><?php the_title();?></h3>
			<?php woocommerce_template_loop_product_link_close();?>
		</div>
		<div class="product-card__info__price">
			<?php if ( $price_html = $product->get_price_html() ) : ?>
				<span class="price"><?php echo $price_html; ?></span>
			<?php endif; ?>
		</div>
	</div>
</div>
</div>