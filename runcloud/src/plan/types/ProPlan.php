<?php

namespace RunCloud\plan\types;

use RunCloud\plan\Plan;

class ProPlan extends Plan {

    public function __construct()
    {
        parent::__construct();
        $this->status = "Pro Plan";
        $this->set_status("Pro Plan");
    }

    public function set_status($newStatus)
    {
        self::$status = $newStatus;
    }

}

?>
