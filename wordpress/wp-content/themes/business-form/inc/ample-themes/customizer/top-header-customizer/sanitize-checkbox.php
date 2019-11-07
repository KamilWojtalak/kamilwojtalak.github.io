<?php
/**
 * Sanitize checkbox field
 *
 * @param $checked
 * @return Boolean
 */
if ( !function_exists('business_form_sanitize_checkbox') ) :
    function business_form_sanitize_checkbox( $checked ) {
        // Boolean check.
        return ( ( isset( $checked ) && true == $checked ) ? true : false );
    }
endif;


