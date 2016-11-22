<?php

namespace Phpfox\Cache;

return [
    'cache.drivers'  => [
        'filesystem' => FilesystemCacheStorage::class,
        'apc'        => ApcCacheStorage::class,
        'memcache'   => MemcacheCacheStorage::class,
    ],
    'cache.adapters' => [
        'cache.local' => [
            'driver' => 'filesystem',
        ],
    ],
    'services'       => [
        'cache.local' => [null, CacheManager::class,],
    ],
];