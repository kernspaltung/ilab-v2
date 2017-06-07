<?php
if ( ! is_user_logged_in() ) { // Display WordPress login form:
    $args = array(
        'redirect' => admin_url(),
        'form_id' => 'loginform-custom',
        'label_username' => __( 'Nombre de usuario' ),
        'label_password' => __( 'Contraseña' ),
        'label_remember' => __( 'Recuérdame' ),
        'label_log_in' => __( 'Inicia' ),
        'remember' => false
    );
    wp_login_form( $args );
} else { // If logged in:
    wp_loginout( home_url() ); // Display "Log Out" link.
    // sin registro en el front
    // wp_register('', '');
}
?>
