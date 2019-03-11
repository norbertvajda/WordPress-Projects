<?php
/**
 * The template used for displaying page content in template-homepage.php
 *
 * @package storefront
 */

?>

<?php get_header(); ?>
<section id="welcome" class="container-fluid">
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Üdvözöljük a fagravir.com oldalon!</h1>
			<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique tempora aspernatur nostrum</p>
		</div>
	</div>
</section>

</div></div> <!-- storefront containers -->
<section id="welcome-about-us" class="container-fluid">
	<div class="row helper-color">
		<div class="container">			
			<div class="row">
				<div class="col-12 link-center">
					<h2><a class="irany_a_bolt" href="#">Néhány szó rólunk</a></h2>
				</div>
			</div>
			<div class="row justify-content-around">
				<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 bios">
					<div class="photo"><img src="https://randomuser.me/api/portraits/women/21.jpg" alt="sample"></div>
					<div class="triangle-parent"><div class="triangle"></div></div>
					<div class="bio">
						<h3>Anita</h3> 
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta architecto corrupti, asperiores fugit fuga aut magnam veniam, aliquid nesciunt quaerat eos nobis exercitationem sed mollitia ducimus officiis quos repellat veritatis!</p>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 bios">
					<div class="photo"><img src="https://randomuser.me/api/portraits/men/32.jpg" alt="sample"></div>
					<div class="triangle-parent"><div class="triangle"></div></div>
					<div class="bio">
						<h3>Anita</h3> 
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti minus tempora sapiente, hic perferendis atque, natus necessitatibus, magnam perspiciatis earum vero dolor? Accusamus minima eaque consectetur natus soluta iure repellat?</p>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 bios">
					<div class="photo"><img src="https://randomuser.me/api/portraits/men/61.jpg" alt="sample"></div>
					<div class="triangle-parent"><div class="triangle"></div></div>
					<div class="bio">
						<h3>Anita</h3> 
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis repudiandae quas modi harum nam enim, soluta aut, nobis expedita molestias rem suscipit illo nemo veniam voluptatem, earum pariatur beatae animi.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="welcome-comments" class="container-fluid">
	<div class="row">
		<div class="container">			
			<div class="row">
				<div class="col-12 link-center">
					<h2>Vélemények rólunk és a termékeinkről</h2>
				</div>
			</div>
			<div class="row">
				<?php
					$args = array(
						'status'         => 'approve',
						'type'           => '',
						'post_type'      => 'product',
						'number'         => '',
						'orderby'        => 'comment_date',
					);

					// The Comment Query
					$comment_query = new WP_Comment_Query;

					$comments = $comment_query->query( $args );
					echo $comments->count;
					// Comment Loop
					if ( $comments ) {
						foreach ( $comments as $comment ) {
							echo '<div class="card" style="width: 18rem;">';
							echo 	'<div class="card-body">';
							echo 		'<h5 class="card-title comment-author">' . $comment->comment_author . '</h5>';
							echo 		'<h6 class="card-subtitle mb-2 text-muted comment-date">' . $comment->comment_date . '</h6>';
							echo 		'<p class="card-text comment-text">' . $comment->comment_content . '</p>';
							echo 	'</div>';
							echo '</div>';
						}
					} else {
						echo 'Még nincsenek vélemények.';
					}
				?>			
			</div>
		</div>
	</div>
</section>

<section id="welcome-data" class="container-fluid">
	<div class="row" id="googlemaps">
	<iframe id="the-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2704.2798295558923!2d17.48132611562083!3d47.3284060791672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47696174541cd465%3A0x1a1e123ce5025fd6!2sP%C3%A1pa%2C+Fiumei+u.%2C+8500+Magyarorsz%C3%A1g!5e0!3m2!1shu!2shr!4v1549808458958" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		<div class="container">			
			<div class="row">
				<div class="col-12 link-center">
					<h2>Adatok a cégről</h2>
				</div>
				<div class="col-12">
					<p>Név: Stenger Anita Ev.</p>
					<p>Statisztikai szám: 68800783-479-231-19</p>
					<p>Adószám: 68800783-1-39</p>
					<p>&nbsp;</p>
					<p>Cím: Fiumei utca 17.</p>
					<p>Város: 8500 Pápa</p>
					<p><a href="https://goo.gl/maps/Bd7vFtJKcvA2" target="_blank">Mutasd a térképen</a></p>
					<p>Telefonszám: +36 (06) 20 276 8991</p>
					<p>E-mail cím: <a href="mailto:info@fagravir.com?subject=Hello%20fagravir.com" target="_top">info@fagravir.com</a></p>
					<p>&nbsp;</p>
					<p>Nyitvatartás: H - P: 09 - 17</p>
				</div>
			</div>
		</div>
	</div>
</section>

<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

							<div class="footer-widgets row-1 col-4 fix">
									<div class="block footer-widget-1">
						<div id="custom_html-2" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget">Név: Stenger Anita Ev.<br>
Statisztikai szám: 68800783-479-231-19<br>
Adószám: 68800783-1-39<br>
Cím: Fiumei utca 17.<br>
Város: 8500 Pápa<br>
<br>
<a href="https://goo.gl/maps/Bd7vFtJKcvA2" target="_blank" rel="noopener">Mutasd a térképen</a><br>
<br>
Telefonszám: +36 (06) 20 276 8991<br>
E-mail cím: <a href="mailto:info@fagravir.com?subject=Hello%20fagravir.com" target="_top">info@fagravir.com</a><br>
Nyitvatartás: H - P: 09 - 17</div></div>					</div>
											<div class="block footer-widget-2">
						<div id="woocommerce_product_search-2" class="widget woocommerce widget_product_search"><form role="search" method="get" class="woocommerce-product-search" action="https://fagravir.com/">
	<label class="screen-reader-text" for="woocommerce-product-search-field-1">Keresés a következőre:</label>
	<input type="search" id="woocommerce-product-search-field-1" class="search-field" placeholder="Termékek keresése&hellip;" value="" name="s" />
	<button type="submit" value="Keresés">Keresés</button>
	<input type="hidden" name="post_type" value="product" />
</form>
</div><div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><span class="gamma widget-title">Termékkategóriák</span><ul class="product-categories"><li class="cat-item cat-item-15"><a href="https://fagravir.com/termekkategoria/egyeb/">Egyéb</a></li>
</ul></div>					</div>
											<div class="block footer-widget-3">
						<div id="woocommerce_widget_cart-2" class="widget woocommerce widget_shopping_cart"><span class="gamma widget-title">Kosár</span><div class="widget_shopping_cart_content"></div></div>					</div>
											<div class="block footer-widget-4">
						<div id="text-2" class="widget widget_text">			<div class="textwidget"><p><a href="https://fagravir.com/">Kezdőlap</a></p>
<p><a href="https://fagravir.com/kapcsolat/">Kapcsolat</a></p>
<p><a href="https://fagravir.com/rolunk/">Rólunk</a></p>
<p><a href="https://fagravir.com/fiokom/">A fiókom</a></p>
<p><a href="https://fagravir.com/adatvedelmi-iranyelvek/">Adatvédelmi irányelvek</a></p>
<p><a href="https://fagravir.com/altalanos-szerzodesi-feltetelek/">Általános szerződési feltételek</a></p>
</div>
		</div>					</div>
									</div><!-- .footer-widgets.row-1 -->
						<div class="site-info">
			&copy; Fagravír 2019						<br />
				<a class="privacy-policy-link" href="https://fagravir.com/adatvedelmi-iranyelvek/">Adatvédelmi irányelvek</a><span role="separator" aria-hidden="true"></span>				<a href="https://woocommerce.com" target="_blank" title="WooCommerce - The Best eCommerce Platform for WordPress" rel="author">Built with Storefront &amp; WooCommerce</a>.					</div><!-- .site-info -->
				<div class="storefront-handheld-footer-bar">
			<ul class="columns-3">
									<li class="my-account">
						<a href="https://fagravir.com/fiokom/">Fiókom</a>					</li>
									<li class="search">
						<a href="">Keresés</a>			<div class="site-search">
				<div class="widget woocommerce widget_product_search"><form role="search" method="get" class="woocommerce-product-search" action="https://fagravir.com/">
	<label class="screen-reader-text" for="woocommerce-product-search-field-2">Keresés a következőre:</label>
	<input type="search" id="woocommerce-product-search-field-2" class="search-field" placeholder="Termékek keresése&hellip;" value="" name="s" />
	<button type="submit" value="Keresés">Keresés</button>
	<input type="hidden" name="post_type" value="product" />
</form>
</div>			</div>
								</li>
									<li class="cart">
									<a class="footer-cart-contents" href="https://fagravir.com/kosar/" title="Kosár megtekintése">
				<span class="count">0</span>
			</a>
							</li>
							</ul>
		</div>
		
		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	
</div><!-- #page -->

    <div id="moove_gdpr_cookie_info_bar" class="moove-gdpr-info-bar-hidden moove-gdpr-align-center moove-gdpr-dark-scheme gdpr_infobar_postion_bottom">
        <div class="moove-gdpr-info-bar-container">
            <div class="moove-gdpr-info-bar-content">
                <div class="moove-gdpr-cookie-notice">
    <p>This website uses cookies to provide you with the best browsing experience.</p><p>Find out more or adjust your <span data-href="#moove_gdpr_cookie_modal" class="change-settings-button">settings</span>.</p></div>
<!--  .moove-gdpr-cookie-notice -->                <div class="moove-gdpr-button-holder">
    <button class="mgbutton moove-gdpr-infobar-allow-all" rel="nofollow">Elfogad</button>
    </div>
<!--  .button-container -->            </div>
            <!-- moove-gdpr-info-bar-content -->
        </div>
        <!-- moove-gdpr-info-bar-container -->
    </div>
    <!-- #moove_gdpr_cookie_info_bar  -->
<script type="application/ld+json">{"@context":"https:\/\/schema.org\/","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"item":{"name":"Kezd\u0151lap","@id":"https:\/\/fagravir.com"}},{"@type":"ListItem","position":2,"item":{"name":"A fi\u00f3kom","@id":"https:\/\/fagravir.com\/fiokom\/"}}]}</script>	<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
	<script type='text/javascript' src='https://fagravir.com/wp-includes/js/admin-bar.min.js?ver=5.1'></script>
<script type='text/javascript' src='https://fagravir.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"Kos\u00e1r","cart_url":"https:\/\/fagravir.com\/kosar\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='https://fagravir.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.5.5'></script>
<script type='text/javascript' src='https://fagravir.com/wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min.js?ver=1.0.4'></script>
<script type='text/javascript' src='https://fagravir.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='https://fagravir.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.5.5'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_8f6aed31de47637d2f30ef80d68d482f","fragment_name":"wc_fragments_8f6aed31de47637d2f30ef80d68d482f"};
/* ]]> */
</script>
<script type='text/javascript' src='https://fagravir.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.5.5'></script>
<script type='text/javascript'>
		jQuery( 'body' ).bind( 'wc_fragments_refreshed', function() {
			jQuery( 'body' ).trigger( 'jetpack-lazy-images-load' );
		} );
	
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var mailchimp_public_data = {"site_url":"https:\/\/fagravir.com","ajax_url":"https:\/\/fagravir.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='https://fagravir.com/wp-content/plugins/mailchimp-for-woocommerce/public/js/mailchimp-woocommerce-public.min.js?ver=2.1.14'></script>
<script type='text/javascript' src='https://chimpstatic.com/mcjs-connected/js/users/631829c1a6419e9c4758f2e15/3bb8f74a8f2e104ea34f969e2.js?ver=2.1.14'></script>
<script type='text/javascript' src='https://fagravir.com/wp-content/themes/storefront/assets/js/navigation.min.js?ver=2.4.3'></script>
<script type='text/javascript' src='https://fagravir.com/wp-content/themes/storefront/assets/js/skip-link-focus-fix.min.js?ver=20130115'></script>
<script type='text/javascript' src='https://fagravir.com/wp-content/themes/storefront/assets/js/vendor/pep.min.js?ver=0.4.3'></script>
<script type='text/javascript' src='https://fagravir.com/wp-content/themes/storefront/assets/js/woocommerce/header-cart.min.js?ver=2.4.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var moove_frontend_gdpr_scripts = {"ajaxurl":"https:\/\/fagravir.com\/wp-admin\/admin-ajax.php","post_id":"7","plugin_dir":"https:\/\/fagravir.com\/wp-content\/plugins\/gdpr-cookie-compliance","is_page":"1","strict_init":"1","enabled_default":{"third_party":0,"advanced":0},"force_reload":"false","is_single":"","current_user":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://fagravir.com/wp-content/plugins/gdpr-cookie-compliance/dist/scripts/main.js?ver=2.0.3'></script>
<script type='text/javascript' src='https://fagravir.com/wp-includes/js/wp-embed.min.js?ver=5.1'></script>
<!-- WooCommerce JavaScript -->
<script type="text/javascript">
jQuery(function($) { 

	jQuery( function( $ ) {
		var ppec_mark_fields      = '#woocommerce_ppec_paypal_title, #woocommerce_ppec_paypal_description';
		var ppec_live_fields      = '#woocommerce_ppec_paypal_api_username, #woocommerce_ppec_paypal_api_password, #woocommerce_ppec_paypal_api_signature, #woocommerce_ppec_paypal_api_certificate, #woocommerce_ppec_paypal_api_subject';
		var ppec_sandbox_fields   = '#woocommerce_ppec_paypal_sandbox_api_username, #woocommerce_ppec_paypal_sandbox_api_password, #woocommerce_ppec_paypal_sandbox_api_signature, #woocommerce_ppec_paypal_sandbox_api_certificate, #woocommerce_ppec_paypal_sandbox_api_subject';

		var enable_toggle         = $( 'a.ppec-toggle-settings' ).length > 0;
		var enable_sandbox_toggle = $( 'a.ppec-toggle-sandbox-settings' ).length > 0;

		$( '#woocommerce_ppec_paypal_environment' ).change(function(){
			$( ppec_sandbox_fields + ',' + ppec_live_fields ).closest( 'tr' ).hide();

			if ( 'live' === $( this ).val() ) {
				$( '#woocommerce_ppec_paypal_api_credentials, #woocommerce_ppec_paypal_api_credentials + p' ).show();
				$( '#woocommerce_ppec_paypal_sandbox_api_credentials, #woocommerce_ppec_paypal_sandbox_api_credentials + p' ).hide();

				if ( ! enable_toggle ) {
					$( ppec_live_fields ).closest( 'tr' ).show();
				}
			} else {
				$( '#woocommerce_ppec_paypal_api_credentials, #woocommerce_ppec_paypal_api_credentials + p' ).hide();
				$( '#woocommerce_ppec_paypal_sandbox_api_credentials, #woocommerce_ppec_paypal_sandbox_api_credentials + p' ).show();

				if ( ! enable_sandbox_toggle ) {
					$( ppec_sandbox_fields ).closest( 'tr' ).show();
				}
			}
		}).change();

		$( '#woocommerce_ppec_paypal_enabled' ).change(function(){
			if ( $( this ).is( ':checked' ) ) {
				$( ppec_mark_fields ).closest( 'tr' ).show();
			} else {
				$( ppec_mark_fields ).closest( 'tr' ).hide();
			}
		}).change();

		$( '#woocommerce_ppec_paypal_paymentaction' ).change(function(){
			if ( 'sale' === $( this ).val() ) {
				$( '#woocommerce_ppec_paypal_instant_payments' ).closest( 'tr' ).show();
			} else {
				$( '#woocommerce_ppec_paypal_instant_payments' ).closest( 'tr' ).hide();
			}
		}).change();

		if ( enable_toggle ) {
			$( document ).off( 'click', '.ppec-toggle-settings' );
			$( document ).on( 'click', '.ppec-toggle-settings', function( e ) {
				$( ppec_live_fields ).closest( 'tr' ).toggle( 'fast' );
				e.preventDefault();
			} );
		}
		if ( enable_sandbox_toggle ) {
			$( document ).off( 'click', '.ppec-toggle-sandbox-settings' );
			$( document ).on( 'click', '.ppec-toggle-sandbox-settings', function( e ) {
				$( ppec_sandbox_fields ).closest( 'tr' ).toggle( 'fast' );
				e.preventDefault();
			} );
		}

		$( '.woocommerce_ppec_paypal_button_layout' ).change( function( event ) {
			if ( ! $( '#woocommerce_ppec_paypal_use_spb' ).is( ':checked' ) ) {
				return;
			}

			// Show settings that pertain to selected layout in same section
			var isVertical = 'vertical' === $( event.target ).val();
			var table      = $( event.target ).closest( 'table' );
			table.find( '.woocommerce_ppec_paypal_vertical' ).closest( 'tr' ).toggle( isVertical );
			table.find( '.woocommerce_ppec_paypal_horizontal' ).closest( 'tr' ).toggle( ! isVertical );

			// Disable 'small' button size option in vertical layout only
			var button_size        = table.find( '.woocommerce_ppec_paypal_button_size' );
			var button_size_option = button_size.find( 'option[value="small"]' );
			if ( button_size_option.prop( 'disabled' ) !== isVertical ) {
				button_size.removeClass( 'enhanced' )
				button_size_option.prop( 'disabled', isVertical );
				$( document.body ).trigger( 'wc-enhanced-select-init' );
				! button_size.val() && button_size.val( 'responsive' ).change();
			}
		} ).change();

		// Hide default layout and size settings if they'll be overridden anyway.
		function showHideDefaultButtonSettings() {
			var display =
				$( '#woocommerce_ppec_paypal_cart_checkout_enabled' ).is( ':checked' ) ||
				( $( '#woocommerce_ppec_paypal_checkout_on_single_product_enabled' ).is( ':checked' ) && ! $( '#woocommerce_ppec_paypal_single_product_settings_toggle' ).is( ':checked' ) ) ||
				( $( '#woocommerce_ppec_paypal_mark_enabled' ).is( ':checked' ) && ! $( '#woocommerce_ppec_paypal_mark_settings_toggle' ).is( ':checked' ) );

			$( '#woocommerce_ppec_paypal_button_layout, #woocommerce_ppec_paypal_button_size, #woocommerce_ppec_paypal_hide_funding_methods, #woocommerce_ppec_paypal_credit_enabled' ).closest( 'tr' ).toggle( display );
			display && $( '#woocommerce_ppec_paypal_button_layout' ).change();
		}

		// Toggle mini-cart section based on whether checkout on cart page is enabled
		$( '#woocommerce_ppec_paypal_cart_checkout_enabled' ).change( function( event ) {
			if ( ! $( '#woocommerce_ppec_paypal_use_spb' ).is( ':checked' ) ) {
				return;
			}

			var checked = $( event.target ).is( ':checked' );
			$( '#woocommerce_ppec_paypal_mini_cart_settings_toggle, .woocommerce_ppec_paypal_mini_cart' )
				.closest( 'tr' )
				.add( '#woocommerce_ppec_paypal_mini_cart_settings' ) // Select title.
					.next( 'p' ) // Select description if present.
				.addBack()
				.toggle( checked );
			checked && $( '#woocommerce_ppec_paypal_mini_cart_settings_toggle' ).change();
			showHideDefaultButtonSettings();
		} ).change();

		$( '#woocommerce_ppec_paypal_mini_cart_settings_toggle' ).change( function( event ) {
			// Only show settings specific to mini-cart if configured to override global settings.
			var checked = $( event.target ).is( ':checked' );
			$( '.woocommerce_ppec_paypal_mini_cart' ).closest( 'tr' ).toggle( checked );
			checked && $( '#woocommerce_ppec_paypal_mini_cart_button_layout' ).change();
			showHideDefaultButtonSettings();
		} ).change();

		$( '#woocommerce_ppec_paypal_checkout_on_single_product_enabled, #woocommerce_ppec_paypal_single_product_settings_toggle' ).change( function( event ) {
			if ( ! $( '#woocommerce_ppec_paypal_use_spb' ).is( ':checked' ) ) {
				return;
			}

			if ( ! $( '#woocommerce_ppec_paypal_checkout_on_single_product_enabled' ).is( ':checked' ) ) {
				// If product page button is disabled, hide remaining settings in section.
				$( '#woocommerce_ppec_paypal_single_product_settings_toggle, .woocommerce_ppec_paypal_single_product' ).closest( 'tr' ).hide();
			} else if ( ! $( '#woocommerce_ppec_paypal_single_product_settings_toggle' ).is( ':checked' ) ) {
				// If product page button is enabled but not configured to override global settings, hide remaining settings in section.
				$( '#woocommerce_ppec_paypal_single_product_settings_toggle' ).closest( 'tr' ).show();
				$( '.woocommerce_ppec_paypal_single_product' ).closest( 'tr' ).hide();
			} else {
				// Show all settings in section.
				$( '#woocommerce_ppec_paypal_single_product_settings_toggle, .woocommerce_ppec_paypal_single_product' ).closest( 'tr' ).show();
				$( '#woocommerce_ppec_paypal_single_product_button_layout' ).change();
			}
			showHideDefaultButtonSettings();
		} ).change();

		$( '#woocommerce_ppec_paypal_mark_enabled, #woocommerce_ppec_paypal_mark_settings_toggle' ).change( function() {
			if ( ! $( '#woocommerce_ppec_paypal_use_spb' ).is( ':checked' ) ) {
				return;
			}

			if ( ! $( '#woocommerce_ppec_paypal_mark_enabled' ).is( ':checked' ) ) {
				// If checkout page button is disabled, hide remaining settings in section.
				$( '#woocommerce_ppec_paypal_mark_settings_toggle, .woocommerce_ppec_paypal_mark' ).closest( 'tr' ).hide();
			} else if ( ! $( '#woocommerce_ppec_paypal_mark_settings_toggle' ).is( ':checked' ) ) {
				// If checkout page button is enabled but not configured to override global settings, hide remaining settings in section.
				$( '#woocommerce_ppec_paypal_mark_settings_toggle' ).closest( 'tr' ).show();
				$( '.woocommerce_ppec_paypal_mark' ).closest( 'tr' ).hide();
			} else {
				// Show all settings in section.
				$( '#woocommerce_ppec_paypal_mark_settings_toggle, .woocommerce_ppec_paypal_mark' ).closest( 'tr' ).show();
				$( '#woocommerce_ppec_paypal_mark_button_layout' ).change();
			}
			showHideDefaultButtonSettings();
		} ).change();

		// Make sure handlers are only attached once if script is loaded multiple times.
		$( '#woocommerce_ppec_paypal_use_spb' ).off( 'change' );

		$( '#woocommerce_ppec_paypal_use_spb' ).change( function( event ) {
			var checked = $( event.target ).is( ':checked' );

			// Show settings specific to Smart Payment Buttons only if enabled.
			$( '.woocommerce_ppec_paypal_spb' ).not( 'h3 ').closest( 'tr' ).toggle( checked );
			$( '.woocommerce_ppec_paypal_spb' ).filter( 'h3' ).next( 'p' ).addBack().toggle( checked );

			if ( checked ) {
				// Trigger all logic that controls visibility of other settings.
				$( '.woocommerce_ppec_paypal_visibility_toggle' ).change();
			} else {
				// If non-SPB mode is enabled, show all settings that may have been hidden.
				$( '#woocommerce_ppec_paypal_button_size, #woocommerce_ppec_paypal_credit_enabled' ).closest( 'tr' ).show();
			}

			// Hide 'Responsive' button size option in SPB mode, and make sure to show 'Small' option.
			var button_size = $( '#woocommerce_ppec_paypal_button_size' ).removeClass( 'enhanced' );
			button_size.find( 'option[value="responsive"]' ).prop( 'disabled', ! checked );
			! checked && button_size.find( 'option[value="small"]' ).prop( 'disabled', false );
			$( document.body ).trigger( 'wc-enhanced-select-init' );
		} ).change();

		// Reset button size values to default when switching modes.
		$( '#woocommerce_ppec_paypal_use_spb' ).change( function( event ) {
			if ( $( event.target ).is( ':checked' ) ) {
				// In SPB mode, set to recommended 'Responsive' value so it is not missed.
				$( '#woocommerce_ppec_paypal_button_size' ).val( 'responsive' ).change();
			} else if ( ! $( '#woocommerce_ppec_paypal_button_size' ).val() ) {
				// Set back to original default for non-SPB mode.
				$( '#woocommerce_ppec_paypal_button_size' ).val( 'large' ).change();
			}
		} );

	});

 });
</script>
<style>
    #moove_gdpr_cookie_modal,#moove_gdpr_cookie_info_bar,.gdpr_cookie_settings_shortcode_content{font-family:inherit}#moove_gdpr_save_popup_settings_button{background-color:#373737;color:#fff}#moove_gdpr_save_popup_settings_button:hover{background-color:#000}#moove_gdpr_cookie_info_bar .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content a.mgbutton,#moove_gdpr_cookie_info_bar .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content button.mgbutton{background-color:#0c4da2}#moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-footer-content .moove-gdpr-button-holder a.mgbutton,#moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-footer-content .moove-gdpr-button-holder button.mgbutton,.gdpr_cookie_settings_shortcode_content .gdpr-shr-button.button-green{background-color:#0c4da2;border-color:#0c4da2}#moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-footer-content .moove-gdpr-button-holder a.mgbutton:hover,#moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-footer-content .moove-gdpr-button-holder button.mgbutton:hover,.gdpr_cookie_settings_shortcode_content .gdpr-shr-button.button-green:hover{background-color:#fff;color:#0c4da2}#moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-close i{background-color:#0c4da2;border:1px solid #0c4da2}#moove_gdpr_cookie_modal .gdpr-acc-link{line-height:0;font-size:0;color:transparent;position:absolute}#moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-close:hover i,#moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li a,#moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li button,#moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li button i,#moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li a i,#moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-tab-main .moove-gdpr-tab-main-content a:hover,#moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content a.mgbutton:hover,#moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content button.mgbutton:hover,#moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content a:hover,#moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content button:hover,#moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content span.change-settings-button:hover{color:#0c4da2}#moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li.menu-item-selected a,#moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li.menu-item-selected button{color:#000}#moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li.menu-item-selected a i,#moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li.menu-item-selected button i{color:#000}#moove_gdpr_cookie_modal.lity-hide{display:none}</style><!-- V1 -->
<div id="moove_gdpr_cookie_modal" class="lity-hide">
    <div class="moove-gdpr-modal-content moove-clearfix logo-position-left moove_gdpr_modal_theme_v1">
        <a href="#" class="moove-gdpr-modal-close" rel="nofollow"><i class="moovegdpr-arrow-close"></i></a>
        <div class="moove-gdpr-modal-left-content">
            <div class="moove-gdpr-company-logo-holder">
    <img src="https://fagravir.com/wp-content/plugins/gdpr-cookie-compliance/dist/images/gdpr-logo.png" alt="Fagravír" class="img-responsive" />
</div>
<!--  .moove-gdpr-company-logo-holder -->            <ul id="moove-gdpr-menu">
                <li class="menu-item-on menu-item-privacy_overview menu-item-selected">
    <button data-href="#privacy_overview" class="moove-gdpr-tab-nav"><i class="moovegdpr-privacy-overview"></i> <span>Adatvédelmi áttekintés</span></button>
</li>

    <li class="menu-item-strict-necessary-cookies menu-item-off">
        <button data-href="#strict-necessary-cookies" class="moove-gdpr-tab-nav"><i class="moovegdpr-strict-necessary"></i> <span>Feltétlenül szükséges sütik</span></button>
    </li>




            </ul>
            <div class="moove-gdpr-branding-cnt">
    
		<a href="https://wordpress.org/plugins/gdpr-cookie-compliance" target="_blank" rel="noopener" class='moove-gdpr-branding'>Powered by GDPR bővítmény</a>
		</div>
<!--  .moove-gdpr-branding -->        </div>
        <!--  .moove-gdpr-modal-left-content -->
        <div class="moove-gdpr-modal-right-content">
            <div class="moove-gdpr-modal-title">
                 
            </div>
            <!-- .moove-gdpr-modal-ritle -->
            <div class="main-modal-content">

                <div class="moove-gdpr-tab-content">
                    <div id="privacy_overview" class="moove-gdpr-tab-main">
            <h3 class="tab-title">Adatvédelmi áttekintés</h3>
        <div class="moove-gdpr-tab-main-content">
    	<p>A weboldalon cookie-kat használunk az optimális működés érdekében.</p>
    </div>
    <!--  .moove-gdpr-tab-main-content -->
</div>
<!-- #privacy_overview -->                        <div id="strict-necessary-cookies" class="moove-gdpr-tab-main" style="display:none">
        <h3 class="tab-title">Feltétlenül szükséges sütik</h3>
        <div class="moove-gdpr-tab-main-content">
            <p><span class="tlid-translation translation"><span class="" title="">A szigorúan szükséges cookie-kat mindig engedélyezni kell, hogy elmenthessük az Ön beállításait cookieban.</span></span></p>
            <div class="moove-gdpr-status-bar ">
                <form>
                    <fieldset>
                        <label class='gdpr-acc-link' for="moove_gdpr_strict_cookies" >letilt</label>
                        <label class="switch">                            
                            <input type="checkbox"  value="check" name="moove_gdpr_strict_cookies" id="moove_gdpr_strict_cookies">
                            <span class="slider round" data-text-enable="Engedélyez" data-text-disabled="Elutasít"></span>
                        </label>
                    </fieldset>
                </form>
            </div>
            <!-- .moove-gdpr-status-bar -->
                            <div class="moove-gdpr-strict-warning-message" style="margin-top: 10px;">
                    <p>Amennyiben ez a süti nem kerül engedélyezésre, akkor nem tudjuk elmenteni a kiválasztott beállításokat, ami azt eredményezi, hogy minden egyes látogatás alkalmával ismételten el kell végezni a sütik engedélyezésének műveletét.</p>
                </div>
                <!--  .moove-gdpr-tab-main-content -->
                                                    
        </div>
        <!--  .moove-gdpr-tab-main-content -->
    </div>
    <!-- #strict-necesarry-cookies -->
                                                                            </div>
                <!--  .moove-gdpr-tab-content -->
            </div>
            <!--  .main-modal-content -->
            <div class="moove-gdpr-modal-footer-content">
                <div class="moove-gdpr-button-holder">
    <button class="mgbutton moove-gdpr-modal-allow-all button-visible" rel="nofollow">Összes engedélyezése</button>
    <button class="mgbutton moove-gdpr-modal-save-settings button-visible" rel="nofollow">Beállítások mentése</button>
</div>
<!--  .moove-gdpr-button-holder -->            </div>
            <!--  .moove-gdpr-modal-footer-content -->
        </div>
        <!--  .moove-gdpr-modal-right-content -->

        <div class="moove-clearfix"></div>

    </div>
    <!--  .moove-gdpr-modal-content -->
</div>
<!-- #moove_gdpr_cookie_modal  -->	<!--[if lte IE 8]>
		<script type="text/javascript">
			document.body.className = document.body.className.replace( /(^|\s)(no-)?customize-support(?=\s|$)/, '' ) + ' no-customize-support';
		</script>
	<![endif]-->
	<!--[if gte IE 9]><!-->
		<script type="text/javascript">
			(function() {
				var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

						request = true;
		
				b[c] = b[c].replace( rcs, ' ' );
				// The customizer requires postMessage and CORS (if the site is cross domain)
				b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
			}());
		</script>
	<!--<![endif]-->
			<div id="wpadminbar" class="nojq nojs">
							<a class="screen-reader-shortcut" href="#wp-toolbar" tabindex="1">Tovább az eszköztárra</a>
						<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Eszköztár">
				<ul id='wp-admin-bar-root-default' class="ab-top-menu"><li id='wp-admin-bar-wp-logo' class="menupop"><a class='ab-item' aria-haspopup="true" href='https://fagravir.com/wp-admin/about.php'><span class="ab-icon"></span><span class="screen-reader-text">WordPress, a csodás</span></a><div class="ab-sub-wrapper"><ul id='wp-admin-bar-wp-logo-default' class="ab-submenu"><li id='wp-admin-bar-about'><a class='ab-item' href='https://fagravir.com/wp-admin/about.php'>WordPress, a csodás</a></li></ul><ul id='wp-admin-bar-wp-logo-external' class="ab-sub-secondary ab-submenu"><li id='wp-admin-bar-wporg'><a class='ab-item' href='https://hu.wordpress.org/'>WordPress Magyarország</a></li><li id='wp-admin-bar-documentation'><a class='ab-item' href='https://codex.wordpress.org/'>Dokumentáció</a></li><li id='wp-admin-bar-support-forums'><a class='ab-item' href='http://kozosseg.wphu.org/'>Támogató fórum</a></li><li id='wp-admin-bar-feedback'><a class='ab-item' href='https://wordpress.org/support/forum/requests-and-feedback'>Visszajelzés</a></li></ul></div></li><li id='wp-admin-bar-site-name' class="menupop"><a class='ab-item' aria-haspopup="true" href='https://fagravir.com/wp-admin/'>Fagravír</a><div class="ab-sub-wrapper"><ul id='wp-admin-bar-site-name-default' class="ab-submenu"><li id='wp-admin-bar-dashboard'><a class='ab-item' href='https://fagravir.com/wp-admin/'>Vezérlőpult</a></li></ul><ul id='wp-admin-bar-appearance' class="ab-submenu"><li id='wp-admin-bar-themes'><a class='ab-item' href='https://fagravir.com/wp-admin/themes.php'>Sablonok</a></li><li id='wp-admin-bar-widgets'><a class='ab-item' href='https://fagravir.com/wp-admin/widgets.php'>Widgetek</a></li><li id='wp-admin-bar-menus'><a class='ab-item' href='https://fagravir.com/wp-admin/nav-menus.php'>Menük</a></li><li id='wp-admin-bar-background' class="hide-if-customize"><a class='ab-item' href='https://fagravir.com/wp-admin/themes.php?page=custom-background'>Háttér</a></li><li id='wp-admin-bar-header' class="hide-if-customize"><a class='ab-item' href='https://fagravir.com/wp-admin/themes.php?page=custom-header'>Fejrész</a></li></ul></div></li><li id='wp-admin-bar-customize' class="hide-if-no-customize"><a class='ab-item' href='https://fagravir.com/wp-admin/customize.php?url=https%3A%2F%2Ffagravir.com%2Ffiokom%2F'>Testreszabás</a></li><li id='wp-admin-bar-comments'><a class='ab-item' href='https://fagravir.com/wp-admin/edit-comments.php'><span class="ab-icon"></span><span class="ab-label awaiting-mod pending-count count-0" aria-hidden="true">0</span><span class="screen-reader-text">0 hozzászólás vár moderációra</span></a></li><li id='wp-admin-bar-new-content' class="menupop"><a class='ab-item' aria-haspopup="true" href='https://fagravir.com/wp-admin/post-new.php'><span class="ab-icon"></span><span class="ab-label">Új</span></a><div class="ab-sub-wrapper"><ul id='wp-admin-bar-new-content-default' class="ab-submenu"><li id='wp-admin-bar-new-post'><a class='ab-item' href='https://fagravir.com/wp-admin/post-new.php'>Bejegyzés</a></li><li id='wp-admin-bar-new-media'><a class='ab-item' href='https://fagravir.com/wp-admin/media-new.php'>Média</a></li><li id='wp-admin-bar-new-page'><a class='ab-item' href='https://fagravir.com/wp-admin/post-new.php?post_type=page'>Oldal</a></li><li id='wp-admin-bar-new-product'><a class='ab-item' href='https://fagravir.com/wp-admin/post-new.php?post_type=product'>Termék</a></li><li id='wp-admin-bar-new-shop_order'><a class='ab-item' href='https://fagravir.com/wp-admin/post-new.php?post_type=shop_order'>Rendelés</a></li><li id='wp-admin-bar-new-shop_coupon'><a class='ab-item' href='https://fagravir.com/wp-admin/post-new.php?post_type=shop_coupon'>Kupon</a></li><li id='wp-admin-bar-new-user'><a class='ab-item' href='https://fagravir.com/wp-admin/user-new.php'>Felhasználó</a></li></ul></div></li><li id='wp-admin-bar-edit'><a class='ab-item' href='https://fagravir.com/wp-admin/post.php?post=7&#038;action=edit'>Oldal szerkesztése</a></li></ul><ul id='wp-admin-bar-top-secondary' class="ab-top-secondary ab-top-menu"><li id='wp-admin-bar-search' class="admin-bar-search"><div class="ab-item ab-empty-item" tabindex="-1"><form action="https://fagravir.com/" method="get" id="adminbarsearch"><input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150" /><label for="adminbar-search" class="screen-reader-text">Keresés</label><input type="submit" class="adminbar-button" value="Keresés"/></form></div></li><li id='wp-admin-bar-my-account' class="menupop with-avatar"><a class='ab-item' aria-haspopup="true" href='https://fagravir.com/wp-admin/profile.php'>Üdvözlet <span class="display-name">Anita_Stenger_1E3t5O0a</span>!<img alt='' src='https://secure.gravatar.com/avatar/9e7e9b05092827d2b67695deba4b230a?s=26&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/9e7e9b05092827d2b67695deba4b230a?s=52&#038;d=mm&#038;r=g 2x' class='avatar avatar-26 photo' height='26' width='26' /></a><div class="ab-sub-wrapper"><ul id='wp-admin-bar-user-actions' class="ab-submenu"><li id='wp-admin-bar-user-info'><a class='ab-item' tabindex="-1" href='https://fagravir.com/wp-admin/profile.php'><img alt='' src='https://secure.gravatar.com/avatar/9e7e9b05092827d2b67695deba4b230a?s=64&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/9e7e9b05092827d2b67695deba4b230a?s=128&#038;d=mm&#038;r=g 2x' class='avatar avatar-64 photo' height='64' width='64' /><span class='display-name'>Anita_Stenger_1E3t5O0a</span></a></li><li id='wp-admin-bar-edit-profile'><a class='ab-item' href='https://fagravir.com/wp-admin/profile.php'>Adatlapom szerkesztése</a></li><li id='wp-admin-bar-logout'><a class='ab-item' href='https://fagravir.com/wp-login.php?action=logout&#038;_wpnonce=384c2dafdb'>Kijelentkezés</a></li></ul></div></li></ul>			</div>
						<a class="screen-reader-shortcut" href="https://fagravir.com/wp-login.php?action=logout&#038;_wpnonce=384c2dafdb">Kijelentkezés</a>
					</div>


<?php //wp_footer(); ?>