<?php

namespace App\Spec;

use Kahlan\Plugin\Stub;

describe('REDIS', function () {

    describe('connect', function () {
        
        it("redis connected", function() {

            $redis = Stub::create(['extends' => 'Redis', 'layer' => true]);
            Stub::on($redis)->method('connect')->andReturn('stubbed');
            
            expect($redis->connect('127.0.0.1'))->toBe('stubbed');
            
        });
        
        it("redis connected on RedisCall instance", function() {

            $redis = Stub::create(['extends' => 'Redis', 'layer' => true]);
            Stub::on($redis)->method('connect')->with('127.0.0.1')->andReturn(true);
                        
            $redisCall = new \App\RedisCall();
            expect($redisCall->connect())->toBe(true);
        });
        
    });
    
});