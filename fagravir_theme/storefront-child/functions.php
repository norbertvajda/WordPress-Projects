<?php

function maintance_mode() {
    if (!current_user_can('edit_themes') || !is_user_logged_in()) {
        $message = "Hamarosan jövünk";
        $title = 'Karbantartás';
        
        wp_die($message, $title);
    }
}
add_action('get_header', 'maintance_mode');

function bootstrap_enqueue_style() {
    if (is_front_page()) {
        wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css', false);
    }
}
add_action('wp_enqueue_scripts', 'bootstrap_enqueue_style');

function my_theme_enqueue_styles() {
 
    $parent_style = 'storefront'; 
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'storefront-child',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Muli:300|Rozha+One', false );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function bootstrap_enqueue_scripts() {
    if (is_front_page()) {
        wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', false);
        wp_enqueue_script('bootstrap-js-bundle', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js', false);
        wp_enqueue_script('myScripts', get_stylesheet_directory_uri() . '/myScripts.js', false);
    }

    wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?sensor=false', false);
}
add_action('wp_enqueue_scripts', 'bootstrap_enqueue_scripts');

// ----- validate password match on the registration page
function registration_errors_validation($reg_errors, $sanitized_user_login, $user_email) {
	global $woocommerce;
	extract( $_POST );
	if ( strcmp( $password, $password2 ) !== 0 ) {
		return new WP_Error( 'registration-error', __( 'Passwords do not match.', 'woocommerce' ) );
	}
	return $reg_errors;
}
//add_filter('woocommerce_registration_errors', 'registration_errors_validation', 10,3);


// ----- add a confirm password fields match on the registration page
function overthinker_wc_register_form() {
    ?>
    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
    </p>
    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" value="<?php if ( ! empty( $_POST['password'] ) ) esc_attr_e( $_POST['password'] ); ?>" />
			</p>
	<p class="form-row form-row-wide">
		<label for="reg_password2"><?php _e( 'Jelszó mégegyszer', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="password" class="input-text" name="password2" id="reg_password2" value="<?php if ( ! empty( $_POST['password2'] ) ) echo esc_attr( $_POST['password2'] ); ?>" />
	</p>
    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
				<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_billing_last_name"><?php _e( 'Last name', 'woocommerce' ); ?><span class="required">*</span></label>
       			<input type="text" class="input-text" name="billing_last_name" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" />
			</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			   <label for="reg_billing_first_name"><?php _e( 'First name', 'woocommerce' ); ?><span class="required">*</span></label>
       		   <input type="text" class="input-text" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" />
            </p>
            
            
	<?php
}
//add_action( 'woocommerce_register_form', 'overthinker_wc_register_form' );

// ----- Validate confirm password field match to the checkout page
function overthinker_wc_confirm_password_validation( $posted ) {
    $checkout = WC()->checkout;
    if ( ! is_user_logged_in() && ( $checkout->must_create_account || ! empty( $posted['createaccount'] ) ) ) {
        if ( strcmp( $posted['account_password'], $posted['account_confirm_password'] ) !== 0 ) {
            wc_add_notice( __( 'Passwords do not match.', 'woocommerce' ), 'error' ); 
        }
    }
}
//add_action( 'woocommerce_after_checkout_validation', 'overthinker_wc_confirm_password_validation', 10, 2 );

// ----- Add a confirm password field to the checkout page
function overthinker_wc_confirm_password_checkout( $checkout ) {
    if ( get_option( 'woocommerce_registration_generate_password' ) == 'no' ) {

        $fields = $checkout->get_checkout_fields();

        $fields['account']['account_confirm_password'] = array(
            'type'              => 'password',
            'label'             => __( 'Jelszó mégegyszer', 'woocommerce' ),
            'required'          => true,
            'placeholder'       => _x( 'Jelszó mégegyszer', 'placeholder', 'woocommerce' )
        );

        $checkout->__set( 'checkout_fields', $fields );
    }
}
//add_action( 'woocommerce_checkout_init', 'overthinker_wc_confirm_password_checkout', 10, 1 );

// ----- Save fields 
function overthinker_save_reg_fields( $customer_id ) {
    
    if ( isset( $_POST['billing_first_name'] ) ) {
        update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
        update_user_meta( $customer_id, 'first_name', sanitize_text_field($_POST['billing_first_name']) );
    }
    if ( isset( $_POST['billing_last_name'] ) ) {
        update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
        update_user_meta( $customer_id, 'last_name', sanitize_text_field($_POST['billing_last_name']) );
    }
    if ( isset( $_POST['password'] ) ) {
        update_user_meta( $customer_id, 'password', sanitize_text_field( $_POST['password'] ) );
    }
 
}
//add_action( 'woocommerce_created_customer', 'overthinker_save_reg_fields' );


// ----- User registration at order
function wc_register_guests( $order_id ) {
    // get all the order data
    $order = new WC_Order($order_id);
    
    //get the user email from the order
    $order_email = $order->billing_email;
      
    // check if there are any users with the billing email as user or email
    $email = email_exists( $order_email );  
    $user = username_exists( $order_email );
    
    // if the UID is null, then it's a guest checkout
    if( $user == false && $email == false ){
      
      // random password with 12 chars
      $random_password = wp_generate_password();
      
      // create new user with email as username & newly created pw
      $user_id = wp_create_user( $order_email, $random_password, $order_email );
      
      //WC guest customer identification
      update_user_meta( $user_id, 'guest', 'yes' );
   
      //user's billing data
      update_user_meta( $user_id, 'billing_address_1', $order->billing_address_1 );
      update_user_meta( $user_id, 'billing_address_2', $order->billing_address_2 );
      update_user_meta( $user_id, 'billing_city', $order->billing_city );
      update_user_meta( $user_id, 'billing_company', $order->billing_company );
      update_user_meta( $user_id, 'billing_country', $order->billing_country );
      update_user_meta( $user_id, 'billing_email', $order->billing_email );
      update_user_meta( $user_id, 'billing_first_name', $order->billing_first_name );
      update_user_meta( $user_id, 'billing_last_name', $order->billing_last_name );
      update_user_meta( $user_id, 'billing_phone', $order->billing_phone );
      update_user_meta( $user_id, 'billing_postcode', $order->billing_postcode );
      update_user_meta( $user_id, 'billing_state', $order->billing_state );
   
      // user's shipping data
      update_user_meta( $user_id, 'shipping_address_1', $order->shipping_address_1 );
      update_user_meta( $user_id, 'shipping_address_2', $order->shipping_address_2 );
      update_user_meta( $user_id, 'shipping_city', $order->shipping_city );
      update_user_meta( $user_id, 'shipping_company', $order->shipping_company );
      update_user_meta( $user_id, 'shipping_country', $order->shipping_country );
      update_user_meta( $user_id, 'shipping_first_name', $order->shipping_first_name );
      update_user_meta( $user_id, 'shipping_last_name', $order->shipping_last_name );
      update_user_meta( $user_id, 'shipping_method', $order->shipping_method );
      update_user_meta( $user_id, 'shipping_postcode', $order->shipping_postcode );
      update_user_meta( $user_id, 'shipping_state', $order->shipping_state );
      
      // link past orders to this newly created customer
      wc_update_new_customer_past_orders( $user_id );
    }
    
  }
   
  //add this newly created function to the thank you page
  //add_action( 'woocommerce_thankyou', 'wc_register_guests', 10, 1 );


  //=========================================================================================================================================================

// unique order id
function my_order_number($order_id) {
    $prefix = 'REND-';
    $count_of_orders = wc_orders_count('completed') + wc_orders_count('processing') + wc_orders_count('on-hold') + wc_orders_count('pending') + wc_orders_count('cancelled') + wc_orders_count('refunded') + wc_orders_count('failed');
    $new_order_id = $prefix . $order_id;
    return $new_order_id;
}
add_filter('woocommerce_order_number', 'my_order_number');

// add country select field to registration
function wooc_extra_register_fields() {

    wp_enqueue_script( 'wc-country-select' );

    woocommerce_form_field( 'reg_country', array(
        'type'        => 'country',
        'class'       => array('chzn-drop'),
        'label'       => __('Ország'),
        'placeholder' => __('Ország választása'),
        'required'    => true,
        'clear'       => false
    ));

}
add_action( 'woocommerce_register_form_start', 'wooc_extra_register_fields' );

/**
* Validate the extra register fields.
*
* @param string $username          Current username.
* @param string $email             Current email.
* @param object $validation_errorsWP_Error object.
*
* @return void
*/
function wooc_validate_extra_register_fields( $username, $email, $validation_errors ) {
	if ( isset( $_POST['first_name'] ) && empty( $_POST['first_name'] ) )
		$validation_errors->add( 'first_name_error', __( 'Keresztnév megadása kötelező.', 'woocommerce' ) );
	if ( isset( $_POST['last_name'] ) && empty( $_POST['last_name'] ) )
		$validation_errors->add( 'last_name_error', __( 'Vezetéknév megadása kötelező.', 'woocommerce' ) );
	
	if ( isset( $_POST['address'] ) && empty( $_POST['address'] ) )
		$validation_errors->add( 'address_1_error', __( 'Cím megadása kötelező.', 'woocommerce' ) );
	
	if ( isset( $_POST['city'] ) && empty( $_POST['city'] ) )
		$validation_errors->add( 'city_error', __( 'Város megadása kötelező.', 'woocommerce' ) );
	
	if ( isset( $_POST['zip_code'] ) && empty( $_POST['zip_code'] ) )
		$validation_errors->add( 'zip_code_error', __( 'Irányítószám megadása kötelező.', 'woocommerce' ) );
	
	if ( isset( $_POST['country'] ) && empty( $_POST['country'] ) )
        $validation_errors->add( 'country_error', __( 'Ország megadása kiválasztása kötelező.', 'woocommerce' ) );
        
	if ( isset( $_POST['retype_password'] ) && empty( $_POST['retype_password'] ) )
        $validation_errors->add( 'retype_password_error', __( 'A jelszó ismételt megadása kötelező.', 'woocommerce' ) );
        
	if( isset( $_POST['password'] ) && ! empty( $_POST['password'] ) && isset( $_POST['retype_password'] ) && ! empty( $_POST['retype_password'] ) ) {
		if( $_POST['password'] != $_POST['retype_password'] )
			$validation_errors->add( 'password_retypepassword_validation_error', __( "A két megadott jelszó nem egyezik.", 'woocommerce' ) );
	}
}
add_action( 'woocommerce_register_post', 'wooc_validate_extra_register_fields', 10, 3 );
/**
* Save the extra register fields.
*
* @paramint $customer_id Current customer ID.
*
* @return void
*/
function wooc_save_extra_register_fields( $customer_id ) {
	if ( isset( $_POST['first_name'] ) ) {
		// WordPress default first name field.
		update_user_meta( $customer_id, 'first_name', sanitize_text_field( $_POST['first_name'] ) );
		// WooCommerce billing first name.
		update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['first_name'] ) );
		// WooCommerce shipping first name.
		update_user_meta( $customer_id, 'shipping_first_name', sanitize_text_field( $_POST['first_name'] ) );
	}
	if ( isset( $_POST['last_name'] ) ) {
		// WordPress default last name field.
		update_user_meta( $customer_id, 'last_name', sanitize_text_field( $_POST['last_name'] ) );
		// WooCommerce billing last name.
		update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['last_name'] ) );
		// WooCommerce shipping last name.
		update_user_meta( $customer_id, 'shipping_last_name', sanitize_text_field( $_POST['last_name'] ) );
	}
	if ( isset( $_POST['contact_number'] ) ) {
		// WooCommerce billing phone
		update_user_meta( $customer_id, 'billing_phone', sanitize_text_field( $_POST['contact_number'] ) );
	}
	if ( isset( $_POST['address'] ) ) {
		// WooCommerce billing address line 1
		update_user_meta( $customer_id, 'billing_address_1', sanitize_text_field( $_POST['address'] ) );
		// WooCommerce shipping address line 1
		update_user_meta( $customer_id, 'shipping_address_1', sanitize_text_field( $_POST['address'] ) );
	}
	if ( isset( $_POST['city'] ) ) {
		// WooCommerce billing city
		update_user_meta( $customer_id, 'billing_city', sanitize_text_field( $_POST['city'] ) );
		// WooCommerce shipping city
		update_user_meta( $customer_id, 'shipping_city', sanitize_text_field( $_POST['city'] ) );
	}
	if ( isset( $_POST['zip_code'] ) ) {
		// WooCommerce billing postcode
		update_user_meta( $customer_id, 'billing_postcode', sanitize_text_field( $_POST['zip_code'] ) );
		// WooCommerce shipping postcode
		update_user_meta( $customer_id, 'shipping_postcode', sanitize_text_field( $_POST['zip_code'] ) );
	}
	if ( isset( $_POST['country'] ) ) {
		// WooCommerce billing country
		update_user_meta( $customer_id, 'billing_country', sanitize_text_field( $_POST['country'] ) );
		// WooCommerce shipping country
		update_user_meta( $customer_id, 'shipping_country', sanitize_text_field( $_POST['country'] ) );
	}
}
add_action( 'woocommerce_created_customer', 'wooc_save_extra_register_fields' );

?>