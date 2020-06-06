<?php

namespace RunCloud\plan\types;

use RunCloud\plan\Plan;

class ProPlan extends Plan {

    public function __construct()
    {
        parent::__construct();
        $this->status = "ProPlan";
        $this->set_status("ProPlan");
    }

    public function set_status($newStatus)
    {
        self::$status = $newStatus;
    }

}

?>