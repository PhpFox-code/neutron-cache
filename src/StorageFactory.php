<?php

namespace Phpfox\CacheManager;


/**
 * Class StorageFactory
 *
 * @package Phpfox\CacheManager
 */
class StorageFactory
{
    /**
     * @return StorageInterface
     */
    public function factory()
    {
        return new FilesystemStorage();
    }

    /**
     * @return bool
     */
    public function shouldCache()
    {
        return false;
    }
}