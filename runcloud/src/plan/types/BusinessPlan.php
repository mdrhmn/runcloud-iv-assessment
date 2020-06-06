<?php

namespace RunCloud\plan\types;

use RunCloud\plan\Plan;

class BusinessPlan extends Plan {

    public function __construct()
    {
        parent::__construct();
        $this->status = "Business Plan";
        $this->set_status("Business Plan");
    }

    public function set_status($newStatus)
    {
        self::$status = $newStatus;
    }

}

?>
