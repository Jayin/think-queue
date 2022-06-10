<?php

namespace think\queue\event;

/**
 * 守护进程循环事件
 */
class Looping
{
    /** @var string */
    public $connection;

    /** @var string */
    public $queue;

    /**
     * @var int
     */
    public $delay;
    /**
     * @var int
     */
    public $sleep;
    /**
     * @var int
     */
    public $maxTries;
    /**
     * @var int
     */
    public $memory;
    /**
     * @var int
     */
    public $timeout;

    public function __construct($connection, $queue, $delay, $sleep, $maxTries, $memory, $timeout)
    {
        $this->connection = $connection;
        $this->queue = $queue;
        $this->delay = $delay;
        $this->sleep = $sleep;
        $this->maxTries = $maxTries;
        $this->memory = $memory;
        $this->timeout = $timeout;

    }
}