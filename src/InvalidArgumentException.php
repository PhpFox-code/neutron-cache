<?php

namespace Phpfox\CacheManager;

/**
 * Exception interface for invalid cache arguments.
 *
 * Any time an invalid argument is passed into a method it must throw an
 * exception class which implements
 * Phpfox\CacheManager\InvalidArgumentException.
 */
class InvalidArgumentException extends CacheException
{
}
