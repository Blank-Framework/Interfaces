<?php

namespace BlankFramework\Interfaces\Cache;

interface CacheInterface
{
    public function get(string $key, string $default): string;
    public function set(string $key, string $value, int $timeToLive = 3600): bool;
}
