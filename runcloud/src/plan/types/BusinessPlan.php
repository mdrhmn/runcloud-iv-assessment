<?php

namespace RunCloud\plan\types;

use RunCloud\plan\Plan;

class BusinessPlan extends Plan {

    public function __construct()
    {
        parent::__construct();
        $this->status = "BizPlan";
        $this->set_status("BizPlan");
    }

    public function set_status($newStatus)
    {
        self::$status = $newStatus;
    }

}

?>