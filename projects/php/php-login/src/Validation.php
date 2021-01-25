<?php

class Validation {

    public function __construct() {

    }

    public function emptyV( $input, &$inputErr ) {
        if ( empty($input) ) {
            $inputErr .= "Cannot be empty. ";
        }
    }

    public function emailV( $email, &$emailErr ) {
        if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
            $emailErr .= "Email is not valid";

        }
    }
    public function usernameV( $username, &$usernameErr ) {
        if ( strlen($username) < 5 || strlen($username) > 20 ) {
            $usernameErr .= "Username must contain between 5 and 20 characters. ";
        }
        if (preg_match( '/(^[\d]|[\W])([^!@#$%^&*\(\)\\\{\}\[\]:\"\';\<\>\?,.\/])*/i', $username)) {
            $usernameErr .= "Username can contain only letters, digits and underscore. ";
        }
    }

    public function passwordV( $password, &$passwordErr ) {
        if ( strlen($password) < 5 || strlen($password) > 30 ) {
            $passwordErr .= "Password must contain between 5 and 30 characters. ";
        }

        if ( !preg_match( '/(\w{3}(\d{1})(\W{1}))/i', $password ) ) {
            $passwordErr .= "Password must contain min 3 letters, 1 digit and 1 special character. ";
        }
    }

    public function rpasswordV( $rpassword, $password, &$rpasswordErr ) {
        if ( $rpassword !== $password ) {
            $rpasswordErr .= "Repeat password correctly. ";
        }
    }
}