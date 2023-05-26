<?php

interface created
{
    function user(string $msg);
}

interface destoryed
{
    function user(string $msg);
}

class user implements created, destoryed
{
    /**
     * Summary of user
     * @param mixed $msg
     * @return void
     */
    public function user($msg)
    {
        echo $msg;
    }
    /**
     * Summary of __construct
     */
    public function __construct()
    {
        $this->user("user created.. </br>");
    }

    /**
     * Summary of __destruct
     */
    public function __destruct()
    {
        $this->user("user destroyed");
    }
}

$obj = new user();


?>