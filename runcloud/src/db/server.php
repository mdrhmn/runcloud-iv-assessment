<?php

namespace RunCloud\db;

class Server {

    public $name;
    public $ipAddress;
    public $connection_status;
    public $no_of_connections;
    
    public function __construct()
    {
        $this->name = null;
        $this->ipAddress = null;
        $this->connection_status = null;
        $this->no_of_connections = 0;
    }
}

?>
