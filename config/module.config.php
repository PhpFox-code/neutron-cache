<?php

namespace Phpfox\Cache;

return [
    'cache.drivers'  => [
        'filesystem' => FilesystemCacheStorage::class,
        'apc'        => ApcCacheStorage::class,
        'apcu'       => ApcuCacheStorage::class,
        'memcache'   => MemcacheCacheStorage::class,
        'memcached'  => MemcachedCacheStorage::class,
    ],
    'cache.adapters' => [
        'cache.filesystem' => [
            'driver' => 'filesystem',
        ],
        'cache.apc'        => [
            'driver' => 'apc',
        ],
        'cache.apcu'       => [
            'driver' => 'apcu',
        ],
        'cache.memcache'   => [
            'driver'         => 'memcache',
            'port'           => 11211,
            'timeout'        => 1,
            'persistent'     => true,
            'retry_interval' => 15,
            'servers'        => ['127.0.0.1'],
        ],
        'cache.memcached'  => [
            'driver'         => 'memcached',
            'port'           => 11211,
            'timeout'        => 1,
            'persistent'     => true,
            'retry_interval' => 15,
            'servers'        => ['127.0.0.1'],
        ],
    ],
    'services'       => [
        'cache.local'     => [CacheFactory::class, null, 'cache.filesystem'],
        'cache.apc'       => [CacheFactory::class, null, 'cache.apc'],
        'cache.apcu'      => [CacheFactory::class, null, 'cache.apcu'],
        'cache'           => [CacheFactory::class, null, 'cache.filesystem'],
        'cache.memcache'  => [CacheFactory::class, null, 'cache.memcache'],
        'cache.memcached' => [CacheFactory::class, null, 'cache.memcached'],
    ],
];