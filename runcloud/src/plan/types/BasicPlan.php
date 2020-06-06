<?php

namespace RunCloud\plan\types;

use RunCloud\plan\Plan;

class BasicPlan extends Plan
{

    public function __construct()
    {
        parent::__construct();
        $this->status = "Basic Plan";
        $this->set_status("Basic Plan");
    }

    public function set_status($newStatus)
    {
        self::$status = $newStatus;
    }

}
