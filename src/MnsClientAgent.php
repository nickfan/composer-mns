<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 2018/9/25
 * Time: 10:27
 */

namespace ComposerMns;

use AliyunMNS\Client as MnsClient;

class MnsClientAgent
{
    /**
     * Aliyun MNS SDK Client.
     *
     * @var MnsClient
     */
    private $client;


    /**
     * Aliyun MNS SDK Queue.
     *
     * @var \AliyunMNS\Queue
     */
    private $queue;

    public function __construct(MnsClient $client)
    {
        $this->client = $client;
    }

    public function __call($method, $parameters)
    {
        return call_user_func_array([$this->client, $method], $parameters);
    }
}