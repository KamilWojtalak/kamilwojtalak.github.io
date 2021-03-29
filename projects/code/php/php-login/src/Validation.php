<?php

class Validation {

    public function __construct() {

    }

    public function empty_v( $input, &$input_err ) {
        if ( empty($input) ) {
            $input_err .= "Cannot be empty. ";
        }
    }

    public function email_v( $email, &$email_err ) {
        if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
            $email_err .= "Email is not valid";

        }
    }
    public function username_v( $username, &$username_err ) {
        if ( strlen($username) < 5 || strlen($username) > 20 ) {
            $username_err .= "Username must contain between 5 and 20 characters. ";
        }
        if (preg_match( '/(^[\d]|[\W])([^!@#$%^&*\(\)\\\{\}\[\]:\"\';\<\>\?,.\/])*/i', $username)) {
            $username_err .= "Username can contain only letters, digits and underscore. ";
        }
    }

    public function password_v( $password, &$password_err ) {
        if ( strlen($password) < 5 || strlen($password) > 30 ) {
            $password_err .= "Password must contain between 5 and 30 characters. ";
        }

        if ( !preg_match( '/(\w{3}(\d{1})(\W{1}))/i', $password ) ) {
            $password_err .= "Password must contain min 3 letters, 1 digit and 1 special character. ";
        }
    }

    public function r_password_v( $r_password, $password, &$r_password_err ) {
        if ( $r_password !== $password ) {
            $r_password_err .= "Repeat password correctly. ";
        }
    }
}