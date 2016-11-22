<?php

namespace Phpfox\Cache;

/**
 * Do not create instance of CacheItemInterface directly, it should be usage
 * as result of CacheStorageInterface getItem.
 *
 * @package Phpfox\Cache
 */
interface CacheItemInterface
{
    public function getKey();

    /**
     * @return mixed
     */
    public function get();

    /**
     * @return bool
     */
    public function isHit();

    /**
     * @param $value
     *
     * @return mixed
     */
    public function set($value);

    /**
     * @param int $expiration
     *
     * @return mixed
     */
    public function expiresAt($expiration);

    /**
     * @param int $time seconds
     *
     * @return mixed
     */
    public function expiresAfter($time);
}
