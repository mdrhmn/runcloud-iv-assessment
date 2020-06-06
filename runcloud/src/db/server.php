<?php

namespace RunCloud\db;

class Server {

    public $name;
    public $ipAddress;
    public $connection_status;

    public function __construct()
    {
        $this->name = null;
        $this->ipAddress = null;
        $this->connection_status = null;
    }
}

?>
