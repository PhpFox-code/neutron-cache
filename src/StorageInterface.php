<?php

namespace Phpfox\CacheManager;


/**
 * Interface StorageInterface
 *
 * Simple cache storage interface
 *
 * @package Phpfox\CacheManager
 */
interface StorageInterface
{
    /**
     * @param string $key
     *
     * @return mixed|null
     */
    public function get($key);

    /**
     * @param string $key
     * @param string $value
     *
     * @return bool
     */
    public function set($key, $value);

    /**
     * @param string $key
     *
     * @return bool
     */
    public function delete($key);

    /**
     * @return bool
     */
    public function flush();
}