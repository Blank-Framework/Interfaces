<?php

namespace BlankFramework\Interfaces\Database;

interface AdapterInterface
{
    public function query(string $query, ?array $parameters = null): array;
    public function queryAll(string $query, ?array $parameters = null): array;
    public function execute(string $query, ?array $parameters = null): int;
}
