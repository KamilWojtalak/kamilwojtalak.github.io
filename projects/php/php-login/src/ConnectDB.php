<?php

class ConnectDB {
    protected $host;
    protected $dbname;
    protected $user;
    protected $password;

    public function __construct ( string $host, string $dbname, string $user, string $password )  {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $password;

        
    }

    public function connect(  ) {
        try {
            $this->db = new PDO( "mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password );

            $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch ( PDOException $e ) {
            die("PDO ERROR: " . $e->getMessage());
        }

        return $this->db;
    }
}