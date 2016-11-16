<?php

namespace Phpfox\Cache;

/**
 * Class CacheItem
 *
 * @package Phpfox\Cache
 */
class CacheItem implements CacheItemInterface
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var mixed
     */
    public $value;

    /**
     * @var bool
     */
    public $hit = true;

    /**
     * @var int
     */
    public $expiration = 0;

    /**
     * CacheItem constructor.
     *
     * @param string $key
     * @param mixed  $value
     * @param int    $expiration
     * @param bool   $hit
     */
    public function __construct(
        $key,
        $value = null,
        $expiration = 0,
        $hit = true
    ) {
        $this->key = $key;
        $this->value = $value;
        $this->expiration = $expiration;
        $this->hit = $hit;

    }

    public function getKey()
    {
        return $this->key;
    }

    public function get()
    {
        return $this->value;
    }

    public function isHit()
    {
        return $this->hit;
    }

    public function set($value)
    {
        $this->value = $value;
        return $this;
    }

    public function expiresAt($expiration)
    {
        $this->expiration = $expiration;
        return $this;
    }

    public function expiresAfter($time)
    {
        $this->expiration = time() + $time;
        return $this;
    }

}