<?php

trait create
{
    public function user()
    {
        echo "new user created..</br>";
    }
}

trait destory
{
    public function user()
    {
        echo "user deleted..";
    }
}

class user
{
    use create, destory {
        create::user insteadof destory;
        destory::user as d_user;
    }

    public function __construct()
    {
        $this->user();
    }

    public function __destruct()
    {
        $this->d_user();
    }
}

$obj = new user();


?>