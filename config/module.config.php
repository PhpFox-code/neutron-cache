<?php

namespace Phpfox\Cache;

return [
    'cache.drivers'  => [
        'filesystem' => FilesystemCacheStorage::class,
        'apc'        => ApcCacheStorage::class,
        'apcu'       => ApcuCacheStorage::class,
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
        'cache.local'     => [
            CacheStorageFactory::class,
            null,
            'cache.filesystem',
        ],
        'cache.apc'       => [CacheStorageFactory::class, null, 'cache.apc'],
        'cache.apcu'      => [CacheStorageFactory::class, null, 'cache.apcu'],
        'cache'           => [
            CacheStorageFactory::class,
            null,
            'cache.filesystem',
        ],
        'cache.memcache'  => [
            CacheStorageFactory::class,
            null,
            'cache.memcache',
        ],
        'cache.memcached' => [
            CacheStorageFactory::class,
            null,
            'cache.memcached',
        ],
    ],
];