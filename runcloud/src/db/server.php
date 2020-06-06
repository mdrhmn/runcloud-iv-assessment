<?php

namespace RunCloud\db;

class Server {

    public $name;
    public $ipAddress;
    public $no_of_connections;

    public function __construct()
    {
        $this->name = null;
        $this->ipAddress = null;
        $this->no_of_connections = 0;
    }
}

?>
