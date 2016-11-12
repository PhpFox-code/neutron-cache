<?php

namespace Phpfox\CacheManager;

/**
 * Class ApcCachePool
 *
 * Require apc extension
 *
 * @package Phpfox\CacheManager
 */
class ApcCachePool implements CacheItemPoolInterface
{
    public function getItem($key)
    {
        $success = false;
        $result = \apc_fetch($key, $success);
        return $result;
    }

    public function getItems(array $keys = [])
    {
        // TODO: Implement getItems() method.
    }

    public function hasItem($key)
    {
        return apc_exists($key);
    }

    public function clear()
    {

        // http://php.net/manual/en/function.apc-clear-cache.php
        apc_clear_cache("user");
        return true;
    }

    public function deleteItem($key)
    {
        return apc_delete($key);
    }

    public function deleteItems(array $keys)
    {
        array_walk($keys, function ($v) {
            apc_delete($v);
        });
        return true;
    }

    public function save(CacheItemInterface $item)
    {
        // TODO: Implement save() method.
    }

    public function saveDeferred(CacheItemInterface $item)
    {
        // TODO: Implement saveDeferred() method.
    }

    public function commit()
    {
        // TODO: Implement commit() method.
    }
}