<?php

namespace RunCloud\plan;

abstract class Plan {

    public static $status;

    public function __construct()
    {
        $this->status = null;
    }

    public function reset()
    {
        self::$status = null;
    }

    public abstract function set_status($newStatus);

}
