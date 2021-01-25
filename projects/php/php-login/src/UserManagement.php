<?php

require_once 'ConnectDB.php';

class UserManagement extends ConnectDB {

    public function __construct( string $host, string $dbname, string $user, string $password) {
        parent::__construct( $host, $dbname, $user, $password);
    }

    public function emailCanBeAdd( $email, &$emailErr  ) {
        $this->sql = "SELECT id FROM users WHERE email=:email";;

        if( $stmt = $this->db->prepare( $this->sql ) ) {
            $stmt->bindParam( ":email", $email );

            if ( $stmt->execute() ) {

                if ( $stmt->rowCount() > 0 ) {
                    $emailErr = 'There is already account that is using this email';
                    return false;
                } else {
                    return true;
                }
            } else {
                echo "Something went wrong" . __FILE__ . ". Line: " . __LINE;
            }
            unset( $stmt );
        }
    }
    public function usernameCanBeAdd( $username, &$usernameErr ) {
        $this->sql = "SELECT id FROM users WHERE username=:username";;

        if( $stmt = $this->db->prepare( $this->sql ) ) {
            $stmt->bindParam( ":username", $username );

            if ( $stmt->execute() ) {

                if ( $stmt->rowCount() > 0 ) {
                    $usernameErr = 'There is already account that is using this username';
                    return false;
                } else {
                    return true;
                }
                unset( $this->stmt );
            } else {
                echo "Something went wrong" . __FILE__ . ". Line: " . __LINE;
            }

        }
    }

    public function register( $email, $username, $password) {
        $this->sql = "INSERT INTO users VALUES (default, :email, :username, :upassword, :time);";
        if ( $this->stmt = $this->db->prepare( $this->sql ) ) {
            $this->stmt->bindParam( ':email', $email );
            $this->stmt->bindParam( ':username', $username );
            $this->stmt->bindParam( ':upassword', $password );

            $time = new DateTime();
            $time = $time->format('Y-m-d H:i:s');

            $this->stmt->bindParam( ':time', $time );

            try {
                $this->stmt->execute();
                header("location: login.php");
            } catch ( PDOException $e ) {
                echo "Error: " . $e->getMessage();
            }
            unset( $this->stmt );
        } else {
            echo "Error " . __FILE__ . __LINE__;
        }
        unset( $this->db );
    }

    public function login( $email, $password, &$err ) {
        $this->sql = "SELECT id, email, username, password FROM users WHERE email=:email;";
        
        if ( $stmt = $this->db->prepare( $this->sql ) ) {
            $stmt->bindParam( ':email', $email );

            if ( $stmt->execute() ) {

                if ( $stmt->rowCount() == 1) {

                    if ($row = $stmt->fetch()) {
                            $id = $row['id'];
                            $email = $row['email'];
                            $username = $row['username'];
                            $hasedPassword = $row['password'];

                            if ( password_verify( $password, $hasedPassword )) {
                                echo "That's it";

                                $_SESSION['loggedin'] = true;
                                $_SESSION['id'] = $id;
                                $_SESSION['email'] = $email;
                                $_SESSION['username'] = $username;
                                $_SESSION['password'] = $password;
                                
                                header( "location: welcome.php" );
                            } else {
                                $err = "Invalid password.";
                            }
                    }
                } else {
                    $err = "There is not an account singed upon $email address!";
                }
            }
            unset( $stmt );
        }
    }

    public function checkIfCorrectPassword ( $id, $opassword, &$opasswordErr ) {
        $this->sql = "SELECT password FROM users WHERE id=:id;";

        if ( $stmt = $this->db->prepare( $this->sql ) ) {
            $stmt->bindParam( ':id', $id );

            if ( $stmt->execute() ) {

                $hashedPassowrd = $stmt->fetch();

                if ( !password_verify( $opassword, $hashedPassowrd['password'])) {
                    $opasswordErr .= "You passed in wrong password. ";
                } 
            }
            unset( $stmt );
        }
    }

    public function updatePassword ( $id, $pass, &$info ) {
        $this->sql = "UPDATE users SET password=:pass WHERE id=:id;";

        if ( $stmt = $this->db->prepare( $this->sql ) ) {
            $stmt->bindParam( ':pass', $pass );
            $stmt->bindParam( ':id', $id );

            if ( $stmt->execute() ) {
                $info = "Password updated. ";

                session_destroy();
                header('location: login.php');
            } else {
                $info = "Password hasn't been updated. ";
            }
            unset( $stmt );
        }
    }
}