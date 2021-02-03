<?php

require_once 'ConnectDB.php';

class InitDB extends ConnectDB {

    public function __construct( $host, $db_name, $user, $password ) {
        parent::__construct( $host, $db_name, $user, $password );
        
    }

    public function create_database( $db_name ) {
        $this->db_name = $db_name;
        $this->sql = "CREATE DATABASE IF NOT EXISTS $this->db_name DEFAULT COLLATE utf8mb4_polish_ci;";
        // $this->sql = "DROP DATABASE $this->db_name;";
        

        try {
            $this->db->exec( $this->sql );
        } catch ( PDOException $e ) {
            die( "I can't create a databse: " . $e->getMessage() );
        }
    }

    public function create_table() {
        $this->sql = "CREATE TABLE IF NOT EXISTS users (
            id SERIAL,
            email VARCHAR(50) NOT NULL UNIQUE,
            username VARCHAR(50) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (id)
        );";

        try {
            $this->db->exec( $this->sql );
        } catch ( PDOException $e ) {
            die( "I can't create a table " . $e->getMessage());
        }
    }
}