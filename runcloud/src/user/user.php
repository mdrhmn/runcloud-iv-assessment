<?php

namespace RunCloud\user;

use RunCloud\db\Server;
use RunCloud\plan\Plan;

class User
{

    public $name;
    public $connection;
    public $no_of_connections;
    public $user_status;

    public function __construct()
    {
        $this->name = null;
        $this->no_of_connections = 0;
        $this->connection = array();
        $this->user_status = 0;
    }

    public function subscribe(Plan $plan)
    {
        if ($plan->status == "BasicPlan") {
            if ($this->user_status == 0) {
                $this->user_status = 1;
                echo "Subscribed to Basic Plan.\n";
            } else if ($this->user_status == 1) {
                echo "You have already subscribed to Basic Plan.\n";
            } else {
                $this->user_status = 1;
                echo "Changed plan to Basic Plan.\n";
            }
        } else if ($plan->status == "ProPlan") {
            if ($this->user_status == 0) {
                $this->user_status = 2;
                echo "Subscribed to Pro Plan.\n";
            } else if ($this->user_status == 2) {
                echo "You have already subscribed to Pro Plan.\n";
            } else {
                $this->user_status = 2;
                echo "Changed plan to Pro Plan.\n";
            }
        } else if ($plan->status == "BizPlan") {
            if ($this->user_status == 0) {
                $this->user_status = 3;
                echo "Subscribed to Business Plan.\n";
            } else if ($this->user_status == 3) {
                echo "You have already subscribed to Business Plan.\n";
            } else {
                $this->user_status = 3;
                echo "Changed plan to Business Plan.\n";
            }
        }
    }

    public function unsubscribe()
    {
        if (Plan::$status == null)
            echo "You have not subscribed to any plans.\n";
        else {
            Plan::$status = null;
            $this->connection = false;
            $this->user_status = 0;
            $this->no_of_connections = 0;
            echo "Server disconnected. Unsubscribed.\n";
        }
    }

    public function connectServer(Server $server)
    {
        if (Plan::$status == "BasicPlan") {
            if ($this->no_of_connections == 0 && $this->connection == null) {
                array_push($this->connection ,$server->ipAddress);
                $server->no_of_connections++;
                $this->no_of_connections++;
                echo "Server connection successful.\n";
            } else {
                echo "Server connection unsuccessful. Basic Plan allows for maximum 1 connection only.\n";
            }
        } else if (Plan::$status == "ProPlan" || Plan::$status == "BizPlan") {
            array_push($this->connection ,$server->ipAddress);
            $server->no_of_connections++;
            $this->no_of_connections++;
            echo "Server connection successful.\n";
        } else {
            echo "Server connection unsuccessful. You are not subscribed to any plans.\n";
        }
    }
}
