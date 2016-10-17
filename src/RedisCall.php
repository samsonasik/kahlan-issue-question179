<?php

namespace App;

class RedisCall
{
    public function connect()
    {
        $redis = new \Redis();
        return $redis->connect('127.0.0.1');
    }
}