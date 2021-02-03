<?php

class ConnectDB {
    protected $host;
    protected $db_name;
    protected $user;
    protected $password;

    public function __construct ( string $host, string $db_name, string $user, string $password )  {
        $this->host = $host;
        $this->db_name = $db_name;
        $this->user = $user;
        $this->password = $password;

        
    }

    public function connect(  ) {
        try {
            $this->db = new PDO( "mysql:host=$this->host;dbname=$this->db_name", $this->user, $this->password );

            $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch ( PDOException $e ) {
            die("PDO ERROR: " . $e->getMessage());
        }

        return $this->db;
    }
}